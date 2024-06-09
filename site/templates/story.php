<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="story-content">
            <div class="story-heading">
                <div><?= $page->headlinekor() ?></div>
                <div><?= $page->headlineeng() ?></div>
            </div>

            <div class="story-desc">
                <?= $page->desc() ?>
            </div>

            <div class="story-buttons">
                <?php foreach ($page->type()->split() as $type): ?>
                    <div class="story-button"><?= $type ?></div>
                <?php endforeach ?>
            </div>


            <div class="story-item">
                    <?php foreach ($page->children()->listed() as $story): ?>
                        <a href="<?= $story->url() ?>">
                            <figure>
                                <?= $story->image() ?>
                                <div class="story-item-type">
                                    <span class="story-type-button"><?= $story->type() ?></span>
                                </div>
                                <div class="story-item-text"><?= $story->title() ?></div>
                                <div class="story-item-text"><?= $story->desc() ?></div>
                             </figure>
                        </a>
                    <?php endforeach ?>
        </div>
        <div class="button-container">
            <div class="expand-button">컨텐츠 더 보기</div>
        </div>
    </div>

    <?= snippet('footer') ?>






