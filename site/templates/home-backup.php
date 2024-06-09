<?= snippet('header-main') ?>
<?= snippet('nav') ?>
<div id="app">
    <section class="sec--1">
        <?php
        $topPCUrl = url('assets/file/top-pc.mp4');
        $topMUrl = url('assets/file/top-m.mp4');
        ?>
        <div class="sec-inner">
            <video class="video video--top" playsinline autoplay muted controlslist="nodownload">
                <source src="<?= $topPCUrl ?>" type="video/webm">
            </video>
            <div class="sec--1-text ani-text-wrapper">
                <div class="ani-text">INSPIRATION</div>
                <div class="ani-text">FROM</div>
                <div class="ani-text">FLYWAY</div>
            </div>
            <div class="cover--c"></div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const firstSection = document.querySelector('.sec--1');
                const topVideo = document.querySelector('.video--top');
                const topPCUrl = <?= json_encode($topPCUrl) ?>;
                const topMUrl = <?= json_encode($topMUrl) ?>;

                function loadVideoSource() {
                    const topElement = document.querySelector('.video--top source');
                    const currentWidth = window.innerWidth;

                    topElement.src = currentWidth <= 1024 ? topMUrl : topPCUrl;
                    topVideo.load();
                }

                window.addEventListener('load', loadVideoSource);
                window.addEventListener('resize', loadVideoSource);

                topVideo.onended = function() {
                    topVideo.pause();
                    if (firstSection) {
                        firstSection.classList.add('act');
                    }
                    document.body.classList.remove('scroll--p');
                };

                function checkScrollPosition() {
                    const scrollTop = window.scrollY;
                    const windowHeight = window.innerHeight;
                    const threshold = 2 * windowHeight; // 200vh

                    if (scrollTop > threshold) {
                        firstSection.classList.remove('act');
                    }
                }

                function coverAct() {
                    const cover = document.querySelector('.cover--c');
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    const startScroll = window.innerHeight; // 100vh
                    const endScroll = window.innerHeight * 2; // 200vh
                    const maxOffset = 150; // 기준

                    if (scrollTop < startScroll) {
                        cover.style.clipPath = `circle(0% at 100% 100%)`;
                    } else if (scrollTop > endScroll) {
                        cover.style.clipPath = `circle(${maxOffset}% at 100% 100%)`;
                    } else {
                        const scrollFraction = (scrollTop - startScroll) / (endScroll - startScroll);
                        const offset = maxOffset * scrollFraction;
                        cover.style.clipPath = `circle(${offset}% at 100% 100%)`;
                    }
                }

                window.addEventListener('scroll', function() {
                    checkScrollPosition();
                    coverAct()

                    if (window.scrollY === 0) {
                        topVideo.play();
                    }
                });
            });
        </script>
    </section>
    <section class="sec--2 sec--chk">
        <div class="sec-inner">
            <div class="float-img-wrapper">
                <div class="float-img-inner">
                    <div class="float-img img-cover">
                        <img src="<?= url('assets/img/1.jpg') ?>">
                    </div>
                    <div class="float-img img-cover">
                        <img src="<?= url('assets/img/2.jpg') ?>">
                    </div>
                    <div class="float-img img-cover">
                        <img src="<?= url('assets/img/3.jpg') ?>">
                    </div>
                </div>
            </div>
            <div class="sec--2-text ani-text-wrapper">
                <div class="ani-text">SEEKING</div>
                <div class="ani-text">FUN,</div>
                <div class="ani-text">MEETING</div>
                <div class="ani-text">USERS!</div>
            </div>
        </div>
    </section>
    <section class="sec--3 sec--chk">

        <div class="sec-inner">
            <div class="row-img-wrapper sec3-swiper">
                <div class="row-img-inner swiper-wrapper">
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/1.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/2.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/3.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/1.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/2.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/3.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/1.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/2.jpg') ?>">
                    </div>
                    <div class="row-img img-cover swiper-slide">
                        <img src="<?= url('assets/img/3.jpg') ?>">
                    </div>
                </div>
            </div>
            <div class="game-info--main">
                <div class="gi-col">
                    <div class="gi-text">
                        <div class="title">Seeking Fun</div>
                        <div class="sub">재미를 찾습니다</div>
                        <p>우리는 잠재력을 가진 개발자들의 열망을 기반으로 플레이어들에게 새로운 경험을 선사하는 게임 회사입니다. 플랫폼, 장르, 스타일의 제약을 뛰어넘어, 다양한 Creative 를 탐구하며 게임을 제작합니다.</p>
                    </div>
                    <div class="gi-img">
                        <img src="<?= url('assets/img/gi-1.jpg') ?>">
                    </div>
                </div>
                <div class="gi-col">
                    <div class="gi-img">
                        <img src="<?= url('assets/img/gi-2.jpg') ?>">
                    </div>
                    <div class="gi-text">
                        <div class="title">Seeking Fun</div>
                        <div class="sub">재미를 찾습니다</div>
                        <p>우리는 잠재력을 가진 개발자들의 열망을 기반으로 플레이어들에게 새로운 경험을 선사하는 게임 회사입니다. 플랫폼, 장르, 스타일의 제약을 뛰어넘어, 다양한 Creative 를 탐구하며 게임을 제작합니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec--4 sec--chk">
        <?php
        $videoPCUrl = url('assets/file/Game_PC.webm');
        $videoMUrl = url('assets/file/Game_MO.webm');
        ?>
        <div class="sec-inner">
            <div class="video--main-wrap">
                <video class="video video--main" playsinline autoplay muted loop controlslist="nodownload">
                    <source src="<?= $videoPCUrl ?>" type="video/webm">
                </video>
                <div class="cover--main">
                    <div class="d-text">
                        The Way to go is different.<br>
                        To achieve the Common Goal,<br>
                        We are Flyway!
                    </div>
                    <a class="btn btn--fly" href="<?= $site->url() ?>/game">
                        VIEW MORE
                    </a>
                </div>
            </div>
        </div>
        <script>
            const videoPCUrl = <?= json_encode($videoPCUrl) ?>;
            const videoMUrl = <?= json_encode($videoMUrl) ?>;
            function updateVideoSource() {
                const videoElement = document.querySelector('.video--main source');
                const videoElementParent = document.querySelector('.video--main');
                const currentWidth = window.innerWidth;

                if (currentWidth <= 1024) {
                    videoElement.src = videoMUrl;
                } else {
                    videoElement.src = videoPCUrl;
                }

                videoElementParent.load();
            }

            window.addEventListener('load', updateVideoSource);
            window.addEventListener('resize', updateVideoSource);
        </script>
    </section>
</div>
<?= snippet('footer-main') ?>
