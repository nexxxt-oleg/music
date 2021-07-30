<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>music</title>
</head>
<body class="music">
<div class="music__main">
    <div id="actionToast" class="toast hide w-100 music__top-action" data-bs-autohide="false">
        <div class="music__header__action">
            <div class="container">

                <button type="button" class="btn-close btn-close-white float-end" data-bs-dismiss="toast" aria-label="Close"></button>
                <span>СКИДКА 5% ПРИ ОПЛАТЕ ЗАКАЗА ОНЛАЙН</span>
            </div>
        </div>
    </div>

    <header class="music__header">

        <div class="music__header__top">
            <div class="container">
                <div class="music__header__top__row d-flex">
                    <div class="music__header__col-city">
                        <div class="dropdown">
                            <span class="music__city-btn dropdown-toggle" id="dropdownCity" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                Санкт-Петербург
                            </span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Санкт-Петербург</a></li>
                                <li><a class="dropdown-item" href="#">Москва</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="music__header__top__col-nav">
                        <nav class="navbar navbar-expand-lg ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarTopMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse w-100" id="navbarTopMenu">
                                <ul class="navbar-nav navbar-nav--top">
                                    <li><a href="">Как купить</a></li>
                                    <li><a href="">Оплата <span>/</span> Доставка</a></li>
                                    <li><a href="">Гарантия <span>/</span> Возврат</a></li>
                                    <li><a href="">Сервисные центры</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="music__header__top__col-tel">
                        <a href="tel:88007005829" class="tel">8-800-700-58-29</a>
                        <span class="music__header__work-time">Ежедневно с 9:00 до 20:00</span>
                    </div>
                    <div class="music__header__top__col-soc">
                        <ul class="nav justify-content-center nav--soc w-100 align-items-center">
                            <li>
                                <a href="" target="_blank">
                                    <svg width="24" height="20">
                                        <use xlink:href="#svg-telegram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <svg width="24" height="24">
                                        <use xlink:href="#svg-viber"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="music__header__top__col-lk">
                        <a href="" class="music__lk-btn">Личный кабинет</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container music__header__middle">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="/" class="music__header__middle__logo">
                        <svg width="200" height="28">
                            <use xlink:href="#svg-logo"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="music__header__search">
                        <form action="">
                            <div class="music__header__search__wrap">
                                <input class="music__header__search__inp" type="text" placeholder="Поиск">
                                <button type="submit" class="music__header__search__submit">
                                    <svg width="22" height="22">
                                        <use xlink:href="#svg-search"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="music__header__middle__right nav justify-content-between">
                        <li>
                            <a href="" class="music__header__item-r">
                                <div class="music__header__item-r__ico">
                                    <svg width="18" height="24">
                                        <use xlink:href="#svg-compare"></use>
                                    </svg>
                                </div>
                                <span class="music__header__item-r__caption">СРАВНЕНИЕ</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="music__header__item-r">
                                <div class="music__header__item-r__ico">
                                    <svg width="24" height="21">
                                        <use xlink:href="#svg-fav"></use>
                                    </svg>
                                </div>
                                <span class="music__header__item-r__caption">ИЗБРАННОЕ</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="music__header__item-r">
                                <div class="music__header__item-r__ico">
                                    <span class="music__header__item-r__count">3</span>
                                    <svg width="24" height="21">
                                        <use xlink:href="#svg-cart"></use>
                                    </svg>
                                </div>
                                <span class="music__header__item-r__caption">КОРЗИНА</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="music__header__bottom">
            <div class="container">
                <div class="d-flex music__header__bottom__row">
                    <div class="music__header__bottom__col-toggle-btn">

                    </div>
                    <div class="music__header__bottom__col-main-nav">
                        <div class="nav justify-content-between w-100 nav--main">
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="32" height="32">
                                        <use xlink:href="#svg-nav1"></use>
                                    </svg>
                                    <span>Виниловые проигрыватели</span>
                                </a>
                            </li>
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="25" height="32">
                                        <use xlink:href="#svg-nav2"></use>
                                    </svg>
                                    <span>Портативная акустика</span>
                                </a>
                            </li>
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="32" height="32">
                                        <use xlink:href="#svg-nav3"></use>
                                    </svg>
                                    <span>Аксессуары</span>
                                </a>
                            </li>
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="32" height="32">
                                        <use xlink:href="#svg-nav4"></use>
                                    </svg>
                                    <span>Хранение пластинок</span>
                                </a>
                            </li>
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="23" height="32">
                                        <use xlink:href="#svg-nav5"></use>
                                    </svg>
                                    <span>Бренды</span>
                                </a>
                            </li>
                            <li class="nav--main__item">
                                <a href="" class="nav--main__item__link">
                                    <svg width="32" height="32">
                                        <use xlink:href="#svg-nav6"></use>
                                    </svg>
                                    <span>Акции</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>




