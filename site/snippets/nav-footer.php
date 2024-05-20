<footer>
    <div class="footer-inner">
        <div class="f-info">
            <a class="logo" href="<?= $site->url() ?>">
                <?= snippet('logo') ?>
            </a>
            <div class="copyright"><?= $site->copyright() ?></div>
        </div>
        <div class="f-nav">
            <div class="f-nav-item"><a href="<?= $site->url() ?>/contact">CONTACT</a></div>
            <div class="f-nav-item"><a href="<?= $site->url() ?>/privacy-policy">PRIVACY POLICY</a></div>
            <?php foreach ($site->footerLink()->toStructure() as $fLink): ?>
                <div class="f-nav-item">
                    <?php if ($fLink->link()->isNotEmpty()): ?>
                        <a href="<?= $fLink->link() ?>" target="_blank"><?= $fLink->label() ?></a>
                    <?php else: ?>
                        <span><?= $fLink->label() ?></span>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</footer>