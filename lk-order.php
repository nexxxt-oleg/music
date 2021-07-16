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
                            <use xlink:href="#svg-lk2"></use>
                        </svg>
                        Мои заказы
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
            <div class="voessen__form voessen__form--pading voessen__form--mob">
                <div class="voessen__form__header">
                    <div class="voessen__form__header__order-top">
                        <h2>Заказ № 1000-5000-5000-470</h2>
                        <dl class="voessen__form__header__order-top__info">
                            <dt>Дата:</dt>
                            <dd>10.08.2020</dd>
                        </dl>
                        <dl class="voessen__form__header__order-top__info">
                            <dt>Статус:</dt>
                            <dd>Выполнен</dd>
                        </dl>
                    </div>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="" title="Повторить заказ">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-repeat"></use>
                                </svg>
                                <span>Повторить заказ</span>
                            </a>
                        </li>
                        <li class="mob-hidden">
                            <a href="#" onClick="window.print()" title="Распечатать">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-print"></use>
                                </svg>
                                <span>Распечатать</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="voessen__product__table-list-product">
                    <table class="table table-hover voessen__table voessen__table--mob">
                        <thead>
                        <tr>
                            <th>Артикул</th>
                            <th style="width: 340px">Товар</th>
                            <th style="width: 150px">Количество</th>
                            <th>Ед. изм</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="tr-center">
                            <td>
                                <span class="voessen__table__label-mob">Артикул</span>
                                1000-5000-5000-470
                            </td>
                            <td colspan="2" class="voessen__product__table__mob-product">
                                <div class="d-flex align-items-center voessen__product__table__card-pr">
                                    <div class="voessen__product__table__card-pr__img">
                                        <img src="./img/lot1.jpg" alt="">
                                    </div>
                                    <div class="voessen__product__table__card-pr__desc">
                                        <a href="" class="voessen__product__table__card-pr__title">
                                            Газовая смесь C3H8 [пропан]
                                            (1.00 %) в воздухе, в баллоне
                                        </a>
                                        <span class="voessen__product__table__card-pr__count">10 литров</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="voessen__table__label-mob">Ед. изм</span>
                                Баллон
                            </td>
                            <td>
                                <span class="voessen__table__label-mob">Цена</span>
                                10 000 000, 00 <span class="b-rub">Р</span>
                            </td>
                            <td class="voessen__table__mob-footer">
                                <span class="voessen__table__label-mob">Сумма</span>
                                10 000 000, 00 <span class="b-rub">Р</span>
                            </td>
                        </tr>
                        <tr class="tr-center">
                            <td>
                                <span class="voessen__table__label-mob">Артикул</span>
                                1000-5000-5000-470
                            </td>
                            <td colspan="2" class="voessen__product__table__mob-product">
                                <div class="d-flex align-items-center voessen__product__table__card-pr">
                                    <div class="voessen__product__table__card-pr__img">
                                        <img src="./img/lot1.jpg" alt="">
                                    </div>
                                    <div class="voessen__product__table__card-pr__desc">
                                        <a href="" class="voessen__product__table__card-pr__title">
                                            Газовая смесь C3H8 [пропан]
                                            (1.00 %) в воздухе, в баллоне
                                        </a>
                                        <span class="voessen__product__table__card-pr__count">10 литров</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="voessen__table__label-mob">Ед. изм</span>
                                Баллон
                            </td>
                            <td>
                                <span class="voessen__table__label-mob">Цена</span>
                                10 000 000, 00 <span class="b-rub">Р</span>
                            </td>
                            <td class="voessen__table__mob-footer">
                                <span class="voessen__table__label-mob">Сумма</span>
                                10 000 000, 00 <span class="b-rub">Р</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="d-flex">
                        <div class="voessen__personal-account__order-itog">
                            <dl class="voessen__personal-account__order-itog__row">
                                <dt>Количество товаров</dt>
                                <dd>200</dd>
                            </dl>
                            <dl class="voessen__personal-account__order-itog__row">
                                <dt>Значение НДС</dt>
                                <dd>10 %</dd>
                            </dl>
                            <dl class="voessen__personal-account__order-itog__row">
                                <dt>Цена без НДС</dt>
                                <dd>2 000 000,00 <span class="b-rub">Р</span></dd>
                            </dl>
                            <dl class="voessen__personal-account__order-itog__row">
                                <dt>Итого (общая сумма)</dt>
                                <dd>2 000 000,00 <span class="b-rub">Р</span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
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
