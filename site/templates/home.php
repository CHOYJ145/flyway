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
                <source src="<?= $topPCUrl ?>" type="video/mp4">
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

                let previousWidth = window.innerWidth;

                function loadVideoSource() {
                    const topElement = document.querySelector('.video--top source');
                    const currentWidth = window.innerWidth;

                    if (currentWidth <= 1024) {
                        topElement.src = topMUrl;
                    } else {
                        topElement.src = topPCUrl;
                    }

                    topVideo.load();
                }

                function handleResizeOrLoad() {
                    const currentWidth = window.innerWidth;
                    if (currentWidth !== previousWidth) {
                        previousWidth = currentWidth;
                        loadVideoSource();
                    }
                }

                window.addEventListener('load', handleResizeOrLoad);
                window.addEventListener('resize', handleResizeOrLoad);

                let actionExecuted = false;
                let videoEnded = false; // 비디오가 종료되었는지 여부를 추적

                topVideo.addEventListener('timeupdate', function() {
                    if (videoEnded) return; // 비디오가 종료된 경우 이벤트 무시

                    console.log('Time update:', topVideo.currentTime);
                    const timeRemaining = topVideo.duration - topVideo.currentTime;

                    if (timeRemaining <= 1.2 && !actionExecuted) {
                        if (firstSection) {
                            firstSection.classList.add('act');
                        }
                        document.body.classList.remove('scroll--p');
                        actionExecuted = true;
                    }
                });

                topVideo.addEventListener('ended', function() {
                    topVideo.pause();
                    topVideo.currentTime = 3;
                    videoEnded = true; // 비디오가 종료되었음을 표시
                });

                loadVideoSource();
            });

        </script>
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
                                <div class="title">Meeting Users</div>
                                <div class="sub">유저를 만납니다</div>
                                <p>결국 게임은 유저를 만나야 완성이 된다고 생각합니다.<br>
                                    유저의 반응을 통해서 우리는 우리의 선택에 대한 확신을 얻을 수 있게 되고, 유저들이 쌓아가는 다양한 데이터들을 통해 시장에서 살아남을 수 있는 경험치를 얻게 됩니다.</p>
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
                        document.addEventListener("DOMContentLoaded", function() {
                            const videoPCUrl = <?= json_encode($videoPCUrl) ?>;
                            const videoMUrl = <?= json_encode($videoMUrl) ?>;
                            let previousWidth = window.innerWidth;

                            function updateVideoSource() {
                                const videoElement = document.querySelector('.video--main source');
                                const videoElementParent = document.querySelector('.video--main');
                                const currentWidth = window.innerWidth;

                                if (currentWidth <= 1024) {
                                    console.log('Setting mobile video URL:', videoMUrl);
                                    videoElement.src = videoMUrl;
                                } else {
                                    console.log('Setting PC video URL:', videoPCUrl);
                                    videoElement.src = videoPCUrl;
                                }

                                videoElementParent.load();
                                console.log('Video source updated');
                            }

                            function handleResizeOrLoad() {
                                const currentWidth = window.innerWidth;
                                if (currentWidth !== previousWidth) {
                                    previousWidth = currentWidth;
                                    updateVideoSource();
                                }
                            }

                            updateVideoSource(); // 페이지가 로드될 때 한 번 호출
                            window.addEventListener('resize', handleResizeOrLoad); // 리사이즈 이벤트 처리
                        });
                    </script>
                </div>
            </div>
            <?= snippet('nav-footer') ?>
        </div>
    </section>
</div>
<?= snippet('footer-main') ?>
