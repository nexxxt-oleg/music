<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>

    <div class="container">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><span>Реквизиты компании</span></li>
        </ul>
        <header class="voessen__title-box voessen__text">
            <h1>Реквизиты компании</h1>
        </header>
        <div class="d-flex align-items-center justify-content-between border-bottom fpad30 voessen__rekvizit-caption">
            <div class="fots20">Общество с ограниченной ответственностью «Фёссен Эм Ай И»</div>
            <a
                class="voessen__font16-l voessen__rekvizit-caption__file"
                href="">
                <svg width="18" height="24">
                    <use xlink:href="#svg-file"></use>
                </svg>
                Скачать реквизиты
            </a>
        </div>
        <div class="border-bottom voessen__contacts-info">
            <div class="row tpad30">
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Юридический адрес:
                    </div>
                    <div class="voessen__text">
                        117246, г. Москва, Научный проезд, дом 17, <br>
                        1-й подъезд, 14 этаж, офис 14-2
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Фактический адрес:
                    </div>
                    <div class="voessen__text">
                        117246, г. Москва, Научный проезд, дом 17, <br>
                        1-й подъезд, 14 этаж, офис 14-2
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Адрес для почтовых отправлений:
                    </div>
                    <div class="voessen__text">
                        117246, г. Москва, Научный проезд, дом 17, <br>
                        1-й подъезд, 14 этаж, офис 14-2
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom voessen__contacts-info">
            <div class="row tpad30">
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Телефоны:
                    </div>
                    <a href="tel:88005515340" class="fots20">8 800 551-53-40</a><br>
                    <a href="tel:+74951280758" class="fots20">+7 495 128-07-58</a>
                </div>
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Электронная почта:
                    </div>
                    <a href="mailto:info@voessen.com" class="fots20"><span class="voessen__link-border">info@voessen.com</span></a>
                </div>
                <div class="col-sm-12 col-lg-4 fpad30">
                    <div class="voessen__label-info">
                        Сайт:
                    </div>
                    <a href="https://voessen.com" target="_blank" class="fots20"><span class="voessen__link-border">https://voessen.com</span></a>
                </div>
            </div>
        </div>
        <div class="row tpad30">
            <div class="col-sm-12 col-lg-6 fpad30 voessen__text">
                <div class="voessen__label-info">
                    Генеральный директор:
                </div>
                <p>Гусев Евгений Николаевич, действует на основании устава</p>
                <div class="voessen__label-info">
                    ИНН:
                </div>
                <p>7708271931</p>
                <div class="voessen__label-info">
                    КПП:
                </div>
                <p>772801001</p>
                <div class="voessen__label-info">
                    ОГРН:
                </div>
                <p>5157746029018</p>
            </div>
            <div class="col-sm-12 col-lg-6 fpad30 voessen__text">
                <div class="voessen__label-info">
                    Расчетный счёт:
                </div>
                <p>40702810202890000437 в АО "АЛЬФА-БАНК" г. Москва</p>
                <div class="voessen__label-info">
                    Корреспондентский счёт:
                </div>
                <p>30101810200000000593 в ГУ БАНКА РОССИИ ПО ЦФО</p>
                <div class="voessen__label-info">
                    ИНН банка:
                </div>
                <p>7728168971</p>
                <div class="voessen__label-info">
                    БИК:
                </div>
                <p>044525593</p>
            </div>
        </div>
    </div>
    <?php
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>