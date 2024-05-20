<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="container">
            <?php foreach ($page->children()->listed() as $item): ?>
                <div>
                    <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?= snippet('footer') ?>