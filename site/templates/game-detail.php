<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="detail-hero">
            <?php foreach ($page->files()->filterBy('template', 'thumbnail-game-pc') as $file): ?>
                <img class="game-thumbnail--pc" src="<?= $file->url() ?>"
                     alt="<?= $page->title() ?> | <?= $site->title() ?>">
            <?php endforeach ?>
            <?php foreach ($page->files()->filterBy('template', 'thumbnail-game-m') as $file): ?>
                <img class="game-thumbnail--m" src="<?= $file->url() ?>"
                     alt="<?= $page->title() ?> | <?= $site->title() ?>">
            <?php endforeach ?>
        </div>
        <div class="container container--detail">
            <div class="game-info">
                <div class="game-info-col">
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
                    <?php foreach ($page->contactLink()->toStructure() as $link): ?>
                        <a class="btn game-contact-link pc" href="<?= $link->link() ?>"
                           target="_blank"><?= $link->label() ?> 바로가기</a>
                    <?php endforeach ?>
                </div>
                <div class="game-info-col">
                    <div class="game-desc">
                        <?= $page->desc() ?>
                    </div>
                </div>

                <?php foreach ($page->contactLink()->toStructure() as $link): ?>
                    <a class="btn game-contact-link m" href="<?= $link->link() ?>"
                       target="_blank"><?= $link->label() ?> 바로가기</a>
                <?php endforeach ?>
            </div>
            <section class="sec--detail-cont">
                <?php foreach ($page->cont()->toStructure() as $cont): ?>
                    <div class="detail-cont">
                        <?php if ($cont->cTitle()->isNotEmpty() && $cont->cDesc()->isNotEmpty()): ?>
                            <div class="detail-cont--row">
                                <div class="cont-title"><?= $cont->cTitle() ?></div>
                                <div class="cont-desc"><?= $cont->cDesc() ?></div>
                            </div>
                        <?php endif ?>
                        <?php if ($cont->cImg()->isNotEmpty()): ?>
                            <div class="detail-cont--row">
                                <?php foreach ($cont->cImg()->toFiles() as $img): ?>
                                    <div class="cont-img">
                                        <img class="img-cover" src="<?= $img->url() ?>"
                                             alt="<?= $page->title() ?> | <?= $site->title() ?>">
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </section>
        </div>
    </div>
<?= snippet('footer') ?>