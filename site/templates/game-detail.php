<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="detail-hero">
            <?php foreach ($page->files()->filterBy('template', 'thumbnail-game-pc') as $file): ?>
                <img class="game-thumbnail--pc" src="<?= $file->url() ?>" alt="<?= $page->title() ?> | <?= $site->title() ?>">
            <?php endforeach ?>
            <?php foreach ($page->files()->filterBy('template', 'thumbnail-game-m') as $file): ?>
                <img class="game-thumbnail--m" src="<?= $file->url() ?>" alt="<?= $page->title() ?> | <?= $site->title() ?>">
            <?php endforeach ?>
        </div>
        <div class="container container--detail">
            <div class="game-info">
                <div class="game-title-wrapper">
                    <a class="game-title" href="<?= $page->url() ?>"><?= $page->title() ?></a>
                    <div class="device-list">
                        <?php foreach ($page->device()->split() as $device): ?>
                            <span class="device-type"><?= $device ?></span>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="game-category">
                    <?= htmlspecialchars($page->content()->get('category')->value()) ?>
                </div>
                <div class="game-desc">
                    <?= $page->desc() ?>
                </div>
                <?php foreach ($page->contactLink()->toStructure() as $link): ?>
                    <a class="btn game-contact-link" href="<?= $link->link() ?>" target="_blank"><?= $link->label() ?> 바로가기</a>
                <?php endforeach ?>
            </div>
            <section>
                <div class="detail-cont"></div>
            </section>
        </div>
    </div>
<?= snippet('footer') ?>