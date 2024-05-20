<?= snippet('header') ?>
<?= snippet('nav') ?>
    <div id="app">
        <div class="container">
            <div class="page-title">찾아오시는 길</div>
            <section>
                <div class="map">
                    <?= $page->map() ?>
                </div>
                <div class="addr">
                    <?= $page->addr() ?><br>
                    <?= $page->addrEn() ?>
                </div>
                <div class="contact-info">
                    <span class="contact-type"><?= $page->contacttype() ?></span>
                    <span class="contact-number"><?= $page->contactnumber() ?></span>
                </div>
            </section>

            <hr>

            <div class="transport">
                <div class="subway">
                    <h1 class="transport-type">지하철</h1>
                    <div class="dest-stop"><?= $page->subwaystation() ?></div>

                    <div class="direction-details">
                        <div class="transport-line"><?= $page->subwayline() ?></div>
                        <div class="stop-details"><?= $page->subwaydirections() ?></div>
                    </div>
                </div>

                <div class="bus">
                    <h1 class="transport-type">버스</h1>
                    <div class="dest-stop"><?= $page->busstation() ?></div>
                    <div class="direction-details">
                        <div class="transport-line">간선</div>
                        <div class="stop-details"><?= $page->mainbus() ?></div>
                    </div>
                    <div class="direction-details">
                        <div class="transport-line">시외</div>
                        <div class="stop-details"><?= $page->intercitybus() ?></div>
                    </div>
                </div>

                <div class="vehicle">
                    <h1 class="transport-type">승용차</h1>
                    <div class="vehicle-info">
                        <div class="dest-stop"><?= $page->vehicleparking() ?></div>
                        <div class="stop-details"><?= $page->vehicleaddress() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?= snippet('footer') ?>