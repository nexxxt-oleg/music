<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>music</title>
</head>
<body class="music">
<div class="music__main" id="top">
    <div id="actionToast" class="toast hide w-100 music__top-action" data-bs-autohide="false">
        <div class="music__header__action">
            <div class="container">

                <button type="button" class="btn-close btn-close-white float-end" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                <span>СКИДКА 5% ПРИ ОПЛАТЕ ЗАКАЗА ОНЛАЙН</span>
            </div>
        </div>
    </div>

    <header class="music__header">

        <div id="scrollMenu" class="music__header__mob">
            <div class="music__header__mob__menu">
                <div class="collapse" id="navMobMenu">
                    <div class="music__header__mob__menu__wrap">
                        <div class="music__header__mob__menu__top">
                            <div class="container d-flex">
                                <a href="#navMobMenu" data-bs-toggle="collapse"
                                   class="music__header__mob__menu__top__close">
                                    <svg class="icon-silver" width="18" height="18">
                                        <use xlink:href="#svg-close"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <ul class="nav music__header__mob__menu__list">
                                <li><a href="">Виниловые проигрыватели</a></li>
                                <li><a href="">Портативная акустика</a></li>
                                <li><a href="">Аксессуары</a></li>
                                <li><a href="">Системы хранения пластинок</a></li>
                                <li><a href="">Подобрать проигрыватель</a></li>
                                <li><a href="">Бренды</a></li>
                                <li><a href="">Акции</a></li>
                                <li><a href="">О нас</a></li>
                                <li><a href="">Оплата / Доставка</a></li>
                                <li><a href="">Гарантия / Возврат</a></li>
                                <li><a href="">Сервисные центры</a></li>
                                <li><a href="">Контакты</a></li>
                                <li><a href="">Как купить</a></li>
                                <li><a href="">Кредит на покупку</a></li>
                                <li><a href="">Часто задаваемые вопросы</a></li>
                                <li><a href="">Подарочные сертификаты</a></li>
                                <li><a href="">Бонусная программа</a></li>
                                <li><a href="">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row music__header__mob__top-row">
                    <div class="col-6">
                        <a href="/" class="music__header__mob__logo">
                            <svg width="200" height="28">
                                <use xlink:href="#svg-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="music__header__top__col-tel">
                            <a href="tel:88007005829" class="tel">8-800-700-58-29</a>
                            <span class="music__header__work-time">Ежедневно с 9:00 до 20:00</span>
                        </div>
                    </div>
                </div>
                <div class="row music__header__mob__bottom-row">
                    <div class="col-6">
                        <div class="music__header__col-city">
                            <div class="dropdown">
                                <span class="music__city-btn dropdown-toggle" data-bs-toggle="dropdown"
                                      aria-expanded="false">
                                    Санкт-Петербург
                                </span>
                                <ul class="dropdown-menu dropdown-menu--city">
                                    <li><a class="dropdown-item" href="#">Санкт-Петербург</a></li>
                                    <li><a class="dropdown-item" href="#">Москва</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="nav music__header__mob__navbar">
                            <li>
                                <a href="#mobSearch" data-bs-toggle="collapse">
                                    <svg class="icon" width="24" height="24">
                                        <use xlink:href="#svg-search"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg class="icon" width="18" height="24">
                                        <use xlink:href="#svg-user"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#navMobMenu"
                                   data-bs-toggle="collapse"
                                >
                                    <svg class="icon" width="32" height="18">
                                        <use xlink:href="#svg-menu"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobSearch" class="collapse music__mob-search">
                <div class="music__header__mob__footer">
                    <div class="container">
                        <div class="music__header__mob__search">
                            <form action="" class="music__header__search-form">
                                <div class="music__header__search">
                                    <input type="text" required="" class="music__header__search__inp"
                                           placeholder="Поиск">
                                    <button type="submit" class="music__header__search__submit">
                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 512 512">
                                            <path fill="#a9a9a9"
                                                  d="M508.88,493.79,353.09,338a201.62,201.62,0,0,0,52.24-135.34C405.33,90.92,314.42,0,202.67,0S0,90.92,0,202.67,90.92,405.33,202.67,405.33A201.62,201.62,0,0,0,338,353.09L493.79,508.88a10.67,10.67,0,1,0,15.09-15.09ZM202.67,384c-100,0-181.34-81.34-181.34-181.33S102.69,21.33,202.67,21.33,384,102.68,384,202.67,302.65,384,202.67,384Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <a href="#mobSearch" data-bs-toggle="collapse" class="music__header__search-form__close">
                                <svg class="icon-silver" width="18" height="18">
                                    <use xlink:href="#svg-close"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="music__header__top">
            <div class="container">
                <div class="music__header__top__row d-flex">
                    <div class="music__header__col-city">
                        <div class="dropdown">
                            <span class="music__city-btn dropdown-toggle" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                Санкт-Петербург
                            </span>
                            <ul class="dropdown-menu dropdown-menu--city">
                                <li><a class="dropdown-item" href="#">Санкт-Петербург</a></li>
                                <li><a class="dropdown-item" href="#">Москва</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="music__header__top__col-nav">
                        <ul class="nav navbar-nav--top">
                            <li><a href="">Как купить</a></li>
                            <li><a href="">Оплата <span>/</span> Доставка</a></li>
                            <li><a href="">Гарантия <span>/</span> Возврат</a></li>
                            <li><a href="">Сервисные центры</a></li>
                        </ul>
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

        <div class="music__header__middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 hidden-991">
                        <a href="/" class="music__header__middle__logo">
                            <svg width="200" height="28">
                                <use xlink:href="#svg-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6 hidden-991">
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
                            <li class="music__col-toggle-cat">
                                <a href="" class="music__header__item-r">
                                    <div class="music__header__item-r__ico">
                                        <svg width="21" height="21">
                                            <use xlink:href="#svg-cat"></use>
                                        </svg>
                                    </div>
                                    <span class="music__header__item-r__caption">Каталог</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="music__header__bottom">
            <div class="container position-relative">
                <div class="d-flex music__header__bottom__row">
                    <div class="music__header__bottom__col-toggle-btn">
                        <button class="hamburger  hamburger--collapse navbar-toggler collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#navDopMenu" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                        </button>
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
                <div class="music__header__bottom__dop-menu">
                    <div class="collapse" id="navDopMenu">
                        <div class="music__header__bottom__dop-menu__wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="nav flex-column">
                                        <li><a href="">Виниловые проигрыватели</a></li>
                                        <li><a href="">Портативная акустика</a></li>
                                        <li><a href="">Аксессуары для виниловых проигрывателей</a></li>
                                        <li><a href="">Системы хранения пластинок</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="nav flex-column">
                                        <li><a href="">Подобрать проигрыватель</a></li>
                                        <li><a href="">Подарочные сертификаты</a></li>
                                        <li><a href="">Кредит на покупку</a></li>
                                        <li><a href="">Бренды</a></li>
                                        <li><a href="">Акции</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>




