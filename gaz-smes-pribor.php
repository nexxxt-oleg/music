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
    <div class="container voessen__product">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="">Газовые смеси</a></li>
            <li><a href="">Поверочные газовые смеси ГСО-ПГС, калибровочные газовые смеси</a></li>
            <li><span>Газовые смеси по приборам, средствам измерений</span></li>
        </ul>
        <header class="voessen__product__header voessen__title-box voessen__text">
            <h1>Поверочная газовая смесь для Gasera ONE Formaldehyde</h1>
            <div class="voessen__title-box__col-link tpad15">
                <button
                        id="js-btn-clipboard"
                        class="voessen__ico-link"
                        data-clipboard-text="#example2">
                    <svg width="12" height="12">
                        <use xlink:href="#svg-link"></use>
                    </svg>
                    Скопировать ссылку
                </button>
            </div>
        </header>
        <div class="row voessen__product__body">
            <div class="col-lg-4 fpad30">
                <div class="voessen__product__col-pic">
                    <div class="voessen__product__img">
                        <a href="/img/lot1@2.jpg" class="voessen__product__col-pic__item" data-fancybox="gallery">
                            <img
                                    src="./img/lot1.jpg"
                                    data-src="./img/lot1.jpg"
                                    data-srcset="./img/lot1@2.jpg 2x"
                                    alt=""
                            />
                        </a>
                    </div>
                    <a href="" class="voessen__item-product__fav">
                        <svg width="24" height="23">
                            <use xlink:href="#svg-fav"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 fpad30">
                <div class="voessen__text">
                    <p>Газоанализаторы Gasera ONE Formaldehyde предназначены для измерений содержания формальдегида
                        (СН2O) в атмосферном воздухе и воздухе рабочей зоны.</p>

                    <p>В Фёссен вы можете купить необходимые газовые смеси – ГСО-ПГС содержания формальдегида и
                        сопутствующее оборудование для поверки газоанализатора. Сам газоанализатор мы пока не продаём.
                        Но если очень нужно – напишите нам об этом на специальный e-mail: <a href="mailto:iwant@voessen.com">iwant@voessen.com</a>. Мы
                        постараемся вам помочь.</p>
                </div>
                <ul class="nav flex-column voessen__product__specifications">
                    <li>
                        <div class="voessen__product__specifications__label">Код:</div>
                        <div class="voessen__product__specifications__value">16652408–2016</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Артикул:</div>
                        <div class="voessen__product__specifications__value">16652408–2016</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Межповерочный
                            интервал:
                        </div>
                        <div class="voessen__product__specifications__value">1 год</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Наличие на складе:</div>
                        <div class="voessen__product__specifications__value">Есть в наличие</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 fpad30">
                <div class="voessen__product__card-bay">
                    <div class="h4">Комплект поверочных газовых смесей</div>
                    <div class="voessen__item-product__price">
                        <span class="voessen__item-product__price__value">
                            28 990 <span class="b-rub">Р</span> / комлект
                        </span>
                    </div>
                    <div class="row row--min">
                        <div class="col-6 col-sm-6 col-lg-5 voessen__item-product__col-count">
                            <div class="voessen__product__count-box">
                                <input type="text" value="1" readonly="" class="voessen__product__count-box__value"
                                       id="countProduct2">
                                <button class="voessen__product__count-box__nav voessen__product__count-box__nav--minus"
                                        onclick="countProduct('minus', 'countProduct2')">
                                </button>
                                <button class="voessen__product__count-box__nav voessen__product__count-box__nav--plus"
                                        onclick="countProduct('plus', 'countProduct2')">
                                </button>
                            </div>
                        </div>
                        <div class="d-lg-none col-3">
                            <a href="" class="voessen__item-product__fav-btn">
                                <svg width="24" height="23">
                                    <use xlink:href="#svg-fav"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-3 col-sm-3 col-lg-7 voessen__item-product__btn-bay">
                            <button class="btn-cart">
                                <svg class="btn-cart__icon" width="24" height="24">
                                    <use xlink:href="#svg-cart"></use>
                                </svg>
                                <span>В корзину</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="voessen__silver">
        <div class="container">
            <div class="col-12">
                <div class="voessen__tab-box">
                    <ul class="nav voessen__tab-box__header">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1">
                                Описание
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2">
                                Файлы
                            </a>
                        </li>
                    </ul>
                    <div class="voessen__tab-box__body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="table-responsive table-responsive-lg voessen__product__table-list-product">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Газ / газовая смесь</th>
                                            <th class="text-center" width="200">Объёмная доля, %</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>ПНГ-воздух</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>H2S (30 ppm) в азоте</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>H2S (30 ppm) в азоте</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>H2S (30 ppm) в азоте</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>H2S (30 ppm) в азоте</td>
                                            <td>1</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <ul class="nav flex-column voessen__list-docs">
                                    <li>
                                        <a download="" href="" class="d-flex align-items-center voessen__list-docs__item">
                                            <svg  width="34" height="36">
                                                <use xlink:href="#svg-pdf"></use>
                                            </svg>
                                            Описание типа СИ Gasera ONE Formaldehyde
                                        </a>
                                    </li>
                                    <li>
                                        <a download="" href="" class="d-flex align-items-center voessen__list-docs__item">
                                            <svg  width="34" height="36">
                                                <use xlink:href="#svg-pdf"></use>
                                            </svg>
                                            Методики поверки СИ Gasera ONE Formaldehyde
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row fpad15 align-items-center voessen__header-caption">
                <div class="col-lg-12 voessen__header-caption__col-title">
                    <h2 class="h2">Вам может потребоваться</h2>
                </div>
            </div>
            <?php
            include __DIR__ . '/inc/slider.php';
            ?>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/inc/subscribe.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>