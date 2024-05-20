<header>
    <div class="header-inner">
        <a class="logo" href="<?= $site->url() ?>">
            <?= snippet('logo') ?>
        </a>
        <nav>
            <?php foreach ($site->children()->listed() as $item): ?>
                <?php if ($item->show()->toBool()): ?>
                    <?php if ($item->isOpen()): ?>
                        <div class="nav-item on"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></div>
                    <?php else: ?>
                        <div class="nav-item"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></div>
                    <?php endif ?>
                <?php else: ?>
                    <div class="nav-item"><span><?= $item->title() ?></span></div>
                <?php endif ?>
            <?php endforeach ?>
        </nav>
        <div class="nav-btn">
            <?= snippet('icon-menu') ?>
        </div>
    </div>
</header>

<div class="panel">
    <div class="panel-inner">
        <nav>
            <?php foreach ($site->children()->listed() as $item): ?>
                <?php if ($item->isOpen()): ?>
                    <div class="nav-item on"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></div>
                <?php else: ?>
                    <div class="nav-item"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></div>
                <?php endif ?>
            <?php endforeach ?>
        </nav>
    </div>
</div>