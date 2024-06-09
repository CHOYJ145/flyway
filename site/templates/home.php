<?= snippet('header-main') ?>
<?= snippet('nav') ?>
<div id="app" class="main-sec-wrapper">
    <section class="main-sec main-sec--1">
        <?php
        $topPCUrl = url('assets/file/top-pc.mp4');
        $topMUrl = url('assets/file/top-m.mp4');
        ?>
        <div class="main-sec-inner">
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
                const firstSection = document.querySelector('.main-sec--1');
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

                let actionExecuted = false;

                topVideo.addEventListener('timeupdate', function() {
                    const timeRemaining = topVideo.duration - topVideo.currentTime;

                    if (timeRemaining <= 1.2 && !actionExecuted) {
                        if (firstSection) {
                            firstSection.classList.add('act');
                        }
                        document.body.classList.remove('scroll--p');
                        actionExecuted = true;
                    }
                });

                topVideo.onended = function() {
                    topVideo.pause();
                };

                //
                // function coverAct() {
                //     const cover = document.querySelector('.cover--c');
                //     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                //
                //     const startScroll = window.innerHeight; // 100vh
                //     const endScroll = window.innerHeight * 2; // 200vh
                //     const maxOffset = 150; // 기준
                //
                //     if (scrollTop < startScroll) {
                //         cover.style.clipPath = `circle(0% at 100% 100%)`;
                //     } else if (scrollTop > endScroll) {
                //         cover.style.clipPath = `circle(${maxOffset}% at 100% 100%)`;
                //     } else {
                //         const scrollFraction = (scrollTop - startScroll) / (endScroll - startScroll);
                //         const offset = maxOffset * scrollFraction;
                //         cover.style.clipPath = `circle(${offset}% at 100% 100%)`;
                //     }
                // }
                //

            });
        </script>
    </section>
    <section class="main-sec main-sec--2">
        <div class="main-sec-inner">
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
    <section class="main-sec main-sec--3">
        <div class="main-sec-inner ms3-container">
            <div class="ms3-contents">
                <div class="ms3-content">
                    <div class="row-img-wrapper sec3-swiper">
                        <div class="row-img-inner">
                            <div class="row-img img-cover">
                                <img src="<?= url('assets/img/1.jpg') ?>">
                            </div>
                            <div class="row-img img-cover">
                                <img src="<?= url('assets/img/2.jpg') ?>">
                            </div>
                            <div class="row-img img-cover">
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
                <div class="ms3-content">
                    <?php
                    $videoPCUrl = url('assets/file/Game_PC.webm');
                    $videoMUrl = url('assets/file/Game_MO.webm');
                    ?>
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
                            <a class="btn btn--fly d-btn" href="<?= $site->url() ?>/game">
                                VIEW MORE
                            </a>
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
                </div>
            </div>
            <?= snippet('nav-footer') ?>
        </div>
    </section>
</div>
<?= snippet('footer-main') ?>
