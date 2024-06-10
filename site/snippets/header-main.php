<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site->title() ?></title>
    <link rel="icon" type="image/x-icon" href="<?= url('assets/favicon.ico') ?>">

    <?= css('assets/css/swiper-bundle.min.css') ?>
    <?= css('assets/css/style.css') ?>
    <style>
        html, body#main {
            background: var(--wh);
        }

        .sec3-swiper .swiper-wrapper {
            -webkit-transition-timing-function: linear !important;
            -o-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
        }
    </style>
</head>
<body id="main" class="scroll--p main-header--w">