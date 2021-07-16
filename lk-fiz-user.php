<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/lib.css">
    <link rel="stylesheet" href="css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>
    <div class="voessen__personal-account">
        <div class="container">
            <div class="voessen__personal-account__header">
                <nav class="navbar navbar-expand-lg">
                    <div class="navbar-brand">
                        <svg class="voessen_lk-icon" width="18" height="18">
                            <use xlink:href="#svg-lk1"></use>
                        </svg>
                        Мой кабинет
                    </div>
                    <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <svg width="20" height="13">
                            <use xlink:href="#svg-nav"></use>
                        </svg>
                    </button>
                    <?php
                    include_once __DIR__ . '/inc/lk/nav.php'
                    ?>
                </nav>
            </div>
            <div class="voessen__form voessen__form--pading f-mar40">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 voessen__text">
                        <h4>Здравствуйте, Иванов Иван Иванович</h4>
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <ul class="nav d-block voessen__personal-account__info-user">
                                    <li class="row fpad15">
                                        <div class="col-sm-4">
                                            <b>Электронная почтa</b>
                                        </div>
                                        <div class="col-sm-8">
                                            alekseev.d@mail.com
                                        </div>
                                    </li>
                                    <li class="row fpad15">
                                        <div class="col-sm-4">
                                            <b>Телефон</b>
                                        </div>
                                        <div class="col-sm-8">
                                            +7 (495) 555-44-44
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-sm-4">
                                            <b>Адрес доставки</b>
                                        </div>
                                        <div class="col-sm-8">
                                            Москва, Золоторожский Вал, 11с26
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 tpad15">
                        <nav class="voessen__personal-account__nav-top">
                            <ul class="voessen__form__edit-nav voessen__form__edit-nav--lk nav d-block">
                                <li class="fpad20">
                                    <a href="" title="Редактировать личные данные">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-edit"></use>
                                        </svg>
                                        <span>Редактировать личные данные</span>
                                    </a>
                                </li>
                                <li class="fpad20">
                                    <a href="" title="Адреса доставки">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-adr"></use>
                                        </svg>
                                        <span>Адреса доставки</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Редактировать личные данные">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-pass"></use>
                                        </svg>
                                        <span>Изменить пароль</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="voessen__form voessen__form--pading f-mar40">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 voessen__text">
                        <h4>Здравствуйте, Иванов Иван Иванович</h4>
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <ul class="nav d-block voessen__personal-account__info-user">
                                    <li class="row fpad15">
                                        <div class="col-sm-4">
                                            <b>Организация</b>
                                        </div>
                                        <div class="col-sm-8">
                                            ОАО “Сбербанк”
                                        </div>
                                    </li>
                                    <li class="row fpad15">
                                        <div class="col-sm-4">
                                            <b>Электронная почтa</b>
                                        </div>
                                        <div class="col-sm-8">
                                            alekseev.d@mail.com
                                        </div>
                                    </li>
                                    <li class="row fpad15">
                                        <div class="col-sm-4">
                                            <b>Телефон</b>
                                        </div>
                                        <div class="col-sm-8">
                                            +7 (495) 555-44-44
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-sm-4">
                                            <b>Адрес доставки</b>
                                        </div>
                                        <div class="col-sm-8">
                                            Москва, Золоторожский Вал, 11с26
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 tpad15">
                        <nav class="voessen__personal-account__nav-top">
                            <ul class="voessen__form__edit-nav voessen__form__edit-nav--lk nav d-block">
                                <li class="fpad20">
                                    <a href="" title="Редактировать личные данные">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-edit"></use>
                                        </svg>
                                        <span>Редактировать данные организации</span>
                                    </a>
                                </li>
                                <li class="fpad20">
                                    <a href="" title="Адреса доставки">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-adr"></use>
                                        </svg>
                                        <span>Адреса доставки</span>
                                    </a>
                                </li>
                                <li class="fpad20">
                                    <a href="" title="Контактные лица">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-users"></use>
                                        </svg>
                                        <span>Контактные лица</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="Редактировать личные данные">
                                        <svg width="18" height="18">
                                            <use xlink:href="#edit-pass"></use>
                                        </svg>
                                        <span>Изменить пароль</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <?php
            include __DIR__ . '/inc/lk/list-order.php';
            ?>

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
