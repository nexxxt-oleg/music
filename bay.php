<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <div class="row">
            <div class="col-12 music__page">
                <div class="music__page__breadcrumbs">
                    <ul class="nav">
                        <li><a href="">Главная</a></li>
                        <li><span>Как купить</span></li>
                    </ul>
                </div>
                <h1 class="music__page__title">Как купить</h1>

                <ul class="nav d-block music__list-bay">
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="36">
                                    <use xlink:href="#svg-ico1"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc">
                            <div class="music__list-bay__item__title">
                                <b>1. Подберите товар</b>
                                или позвоните нам и наш менеджер все сделает за Вас
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="32">
                                    <use xlink:href="#svg-ico2"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc">
                            <div class="music__list-bay__item__title">
                                <b>2. Отправляете товар в корзину<br>
                                    и редактируете количество
                                </b>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="36">
                                    <use xlink:href="#svg-ico3"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc">
                            <div class="music__list-bay__item__title">
                                <b>3. Переходите на страницу оформления заказа и<br> заполняете все необходимые поля
                                </b>
                            </div>
                            <div class="music__list-bay__item__text">
                                <b>Если Вы из Москвы или МО </b><br>
                                – оплата производится на сайте или при получении<br><br>

                                <b>Если Вы из регионов</b> <br>
                                – оплата производится на сайте
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="36">
                                    <use xlink:href="#svg-ico4"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc tpad10">
                            <div class="music__list-bay__item__title">
                                <b>4. Позвонит менеджер для подтверждения заказа</b>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="34" height="36">
                                    <use xlink:href="#svg-ico5"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc">
                            <div class="music__list-bay__item__title">
                                <b>5. Склад с любовью соберет для Вас заказ
                                    <br>и передаст курьеру</b>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="25">
                                    <use xlink:href="#svg-ico6"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc tpad10">
                            <div class="music__list-bay__item__title">
                                <b>6. Заказ едет к Вам!</b>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex music__list-bay__item">
                        <div class="music__list-bay__item__ico">
                            <div class="music__circle-ico">
                                <svg width="36" height="36">
                                    <use xlink:href="#svg-ico7"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="music__list-bay__item__desc tpad10">
                            <div class="music__list-bay__item__title">
                                <b>7. Получение</b>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fpad70 tpad70">
        <?php
        include __DIR__ . '/inc/callback.php';
        ?>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>