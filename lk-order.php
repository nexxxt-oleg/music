<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="lk-top">
        <div class="container">
            <div class="row">
                <div class="col-12 music__page">
                    <div class="music__page__breadcrumbs">
                        <ul class="nav">
                            <li><a href="">Главная</a></li>
                            <li><a href=""> Личный кабинет</a></li>
                            <li><span>Мои заказы</span></li>
                        </ul>
                    </div>
                    <h1 class="music__page__title">Мои заказы</h1>
                    <?php
                    include_once __DIR__ . '/inc/lk-top__nav.php'
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container tpad50 fpad70">
        <div class="row">
            <div class="col-12">
                <div class="order__collapse order-info">
                    <div class="order__collapse__order-top" data-bs-toggle="collapse"
                         data-bs-target="#collapse2_tab1">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <span class="order-info__number">№ 492 704 186 от 14.12.20</span>
                            </div>
                            <div class="col-lg-2">
                                <span class="order-info__status">
                                    <svg width="18" height="18">
                                        <use xlink:href="#svg-status1"></use>
                                    </svg>
                                    Обрабатывается
                                </span>
                            </div>
                            <div class="col-lg-2">
                                <span>Кол-во товаров: <b>4 шт</b>.</span>
                            </div>
                            <div class="col-lg-2">
                                <span>Сумма: <b>64 660 <span class="b-rub">Р</span></b></span>
                            </div>
                            <div class="col-lg-3 order__collapse__order-top__col-shot">
                                <ul class="nav order-info__btn flex-grow-1 justify-content-end">
                                    <li>
                                        <a href="" class="btn-bay btn-bay--min"><span>ОПЛАТИТЬ</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="btn-border btn-border--min"><span>ОТМЕНИТЬ</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="collapse2_tab1" class="collapse show">
                        <div class="order__collapse__body">
                            <div class="order-info__item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-xl-3">
                                        <a href="" class="music__item-product__link">
                                            <ul class="music__item-product__label nav flex-column">
                                                <li>
                                                    <div class="music__item-product__label__sale">
                                                        <span>-10%</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <figure class="music__item-product__img">
                                                <img
                                                        src="./img/lot1.jpg"
                                                        data-src="./img/lot1.jpg"
                                                        data-srcset="./img/lot1@2.jpg 2x"
                                                        alt=""
                                                />
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="order-info__item__brand">L-3808 Matt Grey</div>
                                        <a class="order-info__item__title">
                                            ПРОФЕССИОНАЛЬНЫЙ ВИНИЛОВЫЙ
                                            ПРОИГРЫВАТЕЛЬ LENCO 3808
                                        </a>
                                        <div class="order-info__item__color">
                                            <img src="./img/color3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xl-2 ml-auto">
                                        <span class="order-info__item__param">1 шт.</span>
                                    </div>
                                    <div class="col-lg-2 col-xl-2">
                                        <span class="order-info__item__param">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info__item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-xl-3">
                                        <a href="" class="music__item-product__link">
                                            <figure class="music__item-product__img">
                                                <img
                                                        src="./img/lot1.jpg"
                                                        data-src="./img/lot1.jpg"
                                                        data-srcset="./img/lot1@2.jpg 2x"
                                                        alt=""
                                                />
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="order-info__item__brand">L-3808 Matt Grey</div>
                                        <a class="order-info__item__title">
                                            ПРОФЕССИОНАЛЬНЫЙ ВИНИЛОВЫЙ
                                            ПРОИГРЫВАТЕЛЬ LENCO 3808
                                        </a>
                                        <div class="order-info__item__color">
                                            <img src="./img/color3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xl-2 ml-auto">
                                        <span class="order-info__item__param">1 шт.</span>
                                    </div>
                                    <div class="col-lg-2 col-xl-2">
                                        <span class="order-info__item__param">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info__footer-row row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="order-info__footer">
                                        <p><b>Способ доставки:</b></p>

                                        <p>Самовывоз из ПВЗ СДЭК</p>

                                        <p><b>Адрес доставки:</b></p>

                                        <p>г. Москва, ул. Очаковское шоссе, 10 к2 стр1</p>

                                        <p><b>Получатель:</b></p>

                                        <p>Иванов Иван Иванович<br>
                                            +7 (495) 555-44-33<br>
                                            <a href="">ivanov@mail.ru</a></p>

                                        <p><b>Способ оплаты:</b></p>

                                        <p>Онлайн банковской картой</p>

                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Вес заказа</span>
                                        <span class="val">12 кг</span>
                                    </div>
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Товары <span class="number">2</span></span>
                                        <span class="val">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Скидка на товары</span>
                                        <span class="val">2 000 <span class="b-rub">Р</span></span>
                                    </div>
                                    <div class="order-info__footer--itog-row fonts16">
                                        <span class="label"><b>Итого</b></span>
                                        <span class="val"><b>64 660 <span class="b-rub">Р</span></b></span>
                                    </div>
                                    <div class="order-info__footer--itog-btn tpad15 fpad15">
                                        <button class="btn-bay">
                                            <span>ОПЛАТИТЬ</span>
                                        </button>
                                    </div>
                                    <div class="order-info__footer--itog-btn tpad15 fpad15">
                                        <button class="btn-border">
                                            <span>ОТМЕНИТЬ</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order__collapse order-info">
                    <div class="order__collapse__order-top collapsed" data-bs-toggle="collapse"
                         data-bs-target="#collapse1_tab3">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <span class="order-info__number">№ 492 704 186 от 14.12.20</span>
                            </div>
                            <div class="col-lg-2">
                                <span class="order-info__status">
                                    <svg width="18" height="16">
                                        <use xlink:href="#svg-status2"></use>
                                    </svg>
                                    Ждет оплаты
                                </span>
                            </div>
                            <div class="col-lg-2">
                                <span>Кол-во товаров: <b>4 шт</b>.</span>
                            </div>
                            <div class="col-lg-2">
                                <span>Сумма: <b>64 660 <span class="b-rub">Р</span></b></span>
                            </div>
                            <div class="col-lg-3 order__collapse__order-top__col-shot">
                                <ul class="nav order-info__btn flex-grow-1 justify-content-end">
                                    <li>
                                        <a href="" class="btn-bay btn-bay--min"><span>ОПЛАТИТЬ</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="collapse1_tab3" class="collapse">
                        <div class="order__collapse__body">
                            <div class="order-info__item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-xl-3">
                                        <a href="" class="music__item-product__link">
                                            <ul class="music__item-product__label nav flex-column">
                                                <li>
                                                    <div class="music__item-product__label__sale">
                                                        <span>-10%</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <figure class="music__item-product__img">
                                                <img
                                                        src="./img/lot1.jpg"
                                                        data-src="./img/lot1.jpg"
                                                        data-srcset="./img/lot1@2.jpg 2x"
                                                        alt=""
                                                />
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="order-info__item__brand">L-3808 Matt Grey</div>
                                        <a class="order-info__item__title">
                                            ПРОФЕССИОНАЛЬНЫЙ ВИНИЛОВЫЙ
                                            ПРОИГРЫВАТЕЛЬ LENCO 3808
                                        </a>
                                        <div class="order-info__item__color">
                                            <img src="./img/color3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xl-2 ml-auto">
                                        <span class="order-info__item__param">1 шт.</span>
                                    </div>
                                    <div class="col-lg-2 col-xl-2">
                                        <span class="order-info__item__param">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info__item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-xl-3">
                                        <a href="" class="music__item-product__link">
                                            <figure class="music__item-product__img">
                                                <img
                                                        src="./img/lot1.jpg"
                                                        data-src="./img/lot1.jpg"
                                                        data-srcset="./img/lot1@2.jpg 2x"
                                                        alt=""
                                                />
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="order-info__item__brand">L-3808 Matt Grey</div>
                                        <a class="order-info__item__title">
                                            ПРОФЕССИОНАЛЬНЫЙ ВИНИЛОВЫЙ
                                            ПРОИГРЫВАТЕЛЬ LENCO 3808
                                        </a>
                                        <div class="order-info__item__color">
                                            <img src="./img/color3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xl-2 ml-auto">
                                        <span class="order-info__item__param">1 шт.</span>
                                    </div>
                                    <div class="col-lg-2 col-xl-2">
                                        <span class="order-info__item__param">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info__footer-row row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="order-info__footer">
                                        <p><b>Способ доставки:</b></p>

                                        <p>Самовывоз из ПВЗ СДЭК</p>

                                        <p><b>Адрес доставки:</b></p>

                                        <p>г. Москва, ул. Очаковское шоссе, 10 к2 стр1</p>

                                        <p><b>Получатель:</b></p>

                                        <p>Иванов Иван Иванович<br>
                                            +7 (495) 555-44-33<br>
                                            <a href="">ivanov@mail.ru</a></p>

                                        <p><b>Способ оплаты:</b></p>

                                        <p>Онлайн банковской картой</p>

                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Вес заказа</span>
                                        <span class="val">12 кг</span>
                                    </div>
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Товары <span class="number">2</span></span>
                                        <span class="val">64 660 <span class="b-rub">Р</span></span>
                                    </div>
                                    <div class="order-info__footer--itog-row">
                                        <span class="label">Скидка на товары</span>
                                        <span class="val">2 000 <span class="b-rub">Р</span></span>
                                    </div>
                                    <div class="order-info__footer--itog-row fonts16">
                                        <span class="label"><b>Итого</b></span>
                                        <span class="val"><b>64 660 <span class="b-rub">Р</span></b></span>
                                    </div>
                                    <div class="order-info__footer--itog-btn tpad15 fpad15">
                                        <button class="btn-bay">
                                            <span>ОПЛАТИТЬ</span>
                                        </button>
                                    </div>
                                    <div class="order-info__footer--itog-btn tpad15 fpad15">
                                        <button class="btn-border">
                                            <span>ОТМЕНИТЬ</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>