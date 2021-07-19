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
            <li><span>Газовые смеси для промышленных лазеров</span></li>
        </ul>
        <header class="voessen__product__header voessen__title-box voessen__text">
            <h1>Смесь газовая лазерная He [гелий, 70%], N2 [азот, 26%],<br>
                CO2 [диоксид углерода 4 %] в баллоне 40 л</h1>
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
                        <div class="voessen__product__specifications__label">Стандарт:</div>
                        <div class="voessen__product__specifications__value">ТУ 2114-014-20810646-2014</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Наличие на складе:</div>
                        <div class="voessen__product__specifications__value">Есть в наличие</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 fpad30">
                <div class="voessen__product__card-bay">
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Тип баллона:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <span class="voessen__product__har-value">
                                Баллон алюминиевый <br>
                                Luxfer, 40 л, с нерж.<br>
                                вентилем
                            </span>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Объем баллона:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="voessen__product__har-select">
                                <select class="form-select form-select-sm" name="har1">
                                    <option value="1">40 литров</option>
                                    <option value="2">41 литров</option>
                                    <option value="3">42 литров</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Давление в баллоне:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <span class="voessen__product__har-value">
                                14,7 МПа
                            </span>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Выберите условия по
                                баллонам:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="voessen__product__har-select">
                                <select class="form-select form-select-sm" name="har2">
                                    <option value="1">Обмен или наполнению</option>
                                    <option value="2">Обмен или наполн</option>
                                    <option value="3">Обмен или наполн</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Наличие обменных
                                баллонов:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <span class="voessen__product__har-value">
                                Есть в полном объёме
                            </span>
                        </div>
                    </div>
                    <div class="voessen__product__card-bay__requirements">
                        <a href="" class="voessen__link">
                            <span>Требования к обменным баллонам</span>
                        </a>
                    </div>
                    <div class="voessen__item-product__price">
                        <span class="voessen__item-product__price__old-value">
                            26 091 <span class="b-rub">Р</span>
                        </span>
                        <span class="voessen__item-product__price__value">
                            28 990 <span class="b-rub">Р</span> / шт
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

            <div class="col-12">
                <div class="table-responsive table-responsive-lg voessen__product__table-list-product">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Класс чистоты</th>
                                <th>Чистота</th>
                                <th colspan="12" style="text-align: center">Примеси [ppm]</th>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                                <td>H2O</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="">Аргон нулевой</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 5.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 6.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 7.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="voessen__text fpad50">
                    <p>Купить лазерную газовую смесь He [гелий, 70%], N2 [азот, 26%], CO2 [диоксид углерода 4 %] в баллоне 40 л. Газовая смесь может быть произведена в баллонах любого объёма. Заказать любые газовые смеси и чистые газы в Фёссен можно от 1 баллона. Доставим по всей России и СНГ.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="voessen__silver tpad50">
        <div class="container">
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