<?= snippet('header-main') ?>
<?= snippet('nav') ?>
<div id="app">
    <section class="sec--1">
        <div class="sec-inner">
            <div class="sec--1-text ani-text-wrapper">
                <div class="ani-text">INSPIRATION</div>
                <div class="ani-text">FROM</div>
                <div class="ani-text">FLYWAY</div>
            </div>
        </div>
    </section>
    <section class="sec--2">
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
    <section class="sec--3">
        <div class="sec-inner">
            <div class="row-img-wrapper">
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
    </section>
    <section class="sec--4">
        <div class="sec-inner">
            <video class="video video--main" playsinline autoplay muted loop controlslist="nodownload">
                <source src="<?= url('assets/file/test.mp4') ?>" type="video/mp4">
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
    </section>
</div>
<?= snippet('footer-main') ?>
