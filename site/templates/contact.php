<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="container">
            <div class="page-title">찾아오시는 길</div>
            <div class="map">
                <?= $page->map() ?>
            </div>
            <div class="addr">
                <?= $page->addr() ?><br>
                <?= $page->addrEn() ?>
            </div>
        </div>
    </div>
<?= snippet('footer') ?>