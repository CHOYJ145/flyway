<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="container">
            <div class="page-title">
                FLYWAY GAMES의<br>
                게임을 소개합니다
            </div>
            <div class="game-list">
                <?php foreach ($page->children()->listed() as $item): ?>
                    <div class="game-item">
                        <a class="game-thumbnail" href="<?= $item->url() ?>">
                            <?php foreach ($item->files()->filterBy('template', 'thumbnail-game-pc') as $file): ?>
                                <img class="game-thumbnail--pc" src="<?= $file->url() ?>" alt="<?= $item->title() ?> | <?= $site->title() ?>">
                            <?php endforeach ?>
                            <?php foreach ($item->files()->filterBy('templat e', 'thumbnail-game-m') as $file): ?>
                                <img class="game-thumbnail--m" src="<?= $file->url() ?>" alt="<?= $item->title() ?> | <?= $site->title() ?>">
                            <?php endforeach ?>
                        </a>
                        <div class="game-info">
                            <div class="game-title-wrapper">
                                <a class="game-title" href="<?= $item->url() ?>"><?= $item->title() ?></a>
                                <div class="device-list">
                                    <?php foreach ($item->device()->split() as $device): ?>
                                        <span class="device-type"><?= $device ?></span>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="game-category">
                                <?= htmlspecialchars($item->content()->get('category')->value()) ?>
                            </div>
                            <div class="game-desc">
                                <?= $item->desc() ?>
                            </div>
                            <?php foreach ($item->contactLink()->toStructure() as $link): ?>
                                <a class="btn game-contact-link" href="<?= $link->link() ?>" target="_blank"><?= $link->label() ?> 바로가기</a>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>

        </div>
    </div>
<?= snippet('footer') ?>