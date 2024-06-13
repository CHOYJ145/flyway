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

            <div class="story-tab-list-wrapper">
                    <div class="story-buttons">
                        <div class="story-button on" data-tab="all">All</div>
                        <div class="story-button" data-tab="news">News</div>
                        <div class="story-button" data-tab="youtube">Youtube</div>
                    </div>
                </div>

            <div class="story-item">
                    <?php foreach ($page->children()->listed()->slice(0, 8) as $story): ?>
                            <a href="<?= $story->url() ?>">
                                <figure>
                                <?= $story->image() ?>
                                    <div class="story-item-type">
                                        <span class="story-type-button"><?= $story->type() ?></span>
                                    </div>
                                    <div class="story-item-text">
                                        <div><?= $story->title() ?></div>
                                        <div><?= $story->desc() ?></div>
                                    </div>
                                </figure>
                            </a>
                    <?php endforeach ?>
             </div>

             <div class="story-item off">
                    <?php foreach ($page->children()->listed()->slice(8, null) as $story): ?>
                            <a href="<?= $story->url() ?>">
                                <figure>
                                <?= $story->image() ?>
                                    <div class="story-item-type">
                                        <span class="story-type-button"><?= $story->type() ?></span>
                                    </div>
                                    <div class="story-item-text">
                                        <div><?= $story->title() ?></div>
                                        <div><?= $story->desc() ?></div>
                                    </div>
                                </figure>
                            </a>
                    <?php endforeach ?>
             </div>

        <div class="button-container">
            <div class="expand-button">컨텐츠 더 보기</div>
        </div>

    </div>

    <?= snippet('footer') ?>






