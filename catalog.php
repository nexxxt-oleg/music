<?php
include_once __DIR__ . '/inc/header.php'
?>
    <section class="music__catalog-top">
        <div class="container">
            <div class="row">
                <div class="col-12 music__page">
                    <div class="music__page__breadcrumbs">
                        <ul class="nav">
                            <li><a href="">Главная</a></li>
                            <li><span>Виниловые проигрыватели </span></li>
                        </ul>
                    </div>
                    <header class="d-flex music__page__header">
                        <div class="music__catalog-top__ico">
                            <svg width="32" height="32">
                                <use xlink:href="#svg-nav1"></use>
                            </svg>
                        </div>

                        <h1 class="music__page__title">Виниловые проигрыватели</h1>
                    </header>
                    <div class="row music__catalog-top__row-filter">
                        <div class="col-lg-12 col-xl-12">
                            <ul class="nav music__filter-list">
                                <li>
                                    <div class="dropdown music__filter-box">
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            По возрастанию цены
                                        </button>
                                        <div class="dropdown-menu music__filter-box__dropdown-menu music__filter-box__dropdown-menu--w20">
                                            <ul class="nav">
                                                <li><a class="dropdown-item" href="#">По умолчанию</a></li>
                                                <li><a class="dropdown-item active" href="#">По возрастанию цены</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">По новизне</a></li>
                                                <li><a class="dropdown-item" href="#">По скидке</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown music__filter-box">
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Цена
                                        </button>
                                        <div class="dropdown-menu music__filter-box__dropdown-menu ">
                                            <div class="music__filter-box__dropdown-menu__top">
                                                <div class="d-flex music__filter-box__price-row">
                                                    <input type="text" class="music__filter-box__price" id="priceMin">
                                                    <span></span>
                                                    <input type="text" class="music__filter-box__price" id="priceMax">
                                                </div>
                                                <div class="music__filter-box__range-price">
                                                    <div id="priceRange" data-max-price="100000"></div>
                                                </div>
                                            </div>
                                            <div class="music__filter-box__dropdown-menu__footer">
                                                <button class="music__filter-box__submit">ПРИМЕНИТЬ</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown music__filter-box">
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Цвет
                                        </button>
                                        <div class="dropdown-menu music__filter-box__dropdown-menu ">
                                            <div class="music__filter-box__dropdown-menu__top">
                                                <div class="music__filter-box__list">
                                                    <ul class="nav">
                                                        <li>
                                                            <label class="dropdown-item">
                                                                <input type="checkbox" value="1" name="color">
                                                                <span class="music__filter-box__item-caption">
                                                                    <img src="./img/color1.png" class="" alt="">
                                                                    Белый
                                                                   <span class="music__filter-box__count">20</span>                                                                 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="dropdown-item">
                                                                <input type="checkbox" value="2" name="color">
                                                                <span class="music__filter-box__item-caption">
                                                                    <img src="./img/color2.png" class="" alt="">
                                                                    Черный
                                                                   <span class="music__filter-box__count">20</span>                                                                 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="dropdown-item">
                                                                <input type="checkbox" value="3" name="color">
                                                                <span class="music__filter-box__item-caption">
                                                                    <img src="./img/color3.png" class="" alt="">
                                                                    Серый
                                                                   <span class="music__filter-box__count">20</span>                                                                 </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="music__filter-box__dropdown-menu__footer">
                                                <button class="music__filter-box__submit">ПРИМЕНИТЬ</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown music__filter-box">
                                        <button class="dropdown-toggle is_active" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Бренд
                                        </button>
                                        <div class="dropdown-menu music__filter-box__dropdown-menu ">
                                            <div class="music__filter-box__dropdown-menu__top">
                                                <div class="music__filter-box__list">
                                                    <ul class="nav">
                                                        <li>
                                                            <label class="dropdown-item">
                                                                <input type="checkbox" value="1" name="color" checked>
                                                                <span class="music__filter-box__item-caption">
                                                                    ALIVE AUDIO
                                                                   <span class="music__filter-box__count">20</span>                                                                 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="dropdown-item">
                                                                <input type="checkbox" value="2" name="color">
                                                                <span class="music__filter-box__item-caption">
                                                                    CROSLEY
                                                                   <span class="music__filter-box__count">20</span>                                                                 </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="music__filter-box__dropdown-menu__footer">
                                                <button class="music__filter-box__submit">ПРИМЕНИТЬ</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown music__filter-box">
                                        <button class="dropdown-toggle disabled" >
                                            Оцифровка на флэшку
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container tpad15">
    <ul class="nav  music__filter__tags">
        <li>
            <div class="music__filter__tags__item music__filter__tags__item--all">
                Очистить фильтры
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        </li>
        <li>
            <div class="music__filter__tags__item">
                Цена: от 7 000 ₽ до 20 000 ₽
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        </li>
        <li>
            <div class="music__filter__tags__item">
                Бренд: CROSLEY
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        </li>
    </ul>
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <?php
            include __DIR__ . '/inc/item-product.php';
            ?>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <div class="music__carusel-product__item music__item-product">
                <a href="" class="music__item-product__link">
                    <ul class="music__item-product__label nav flex-column">
                        <li>
                            <div class="music__item-product__label__new">
                                <span>Новинка</span>
                            </div>
                        </li>
                        <li>
                            <div class="music__item-product__label__sale">
                                <span>-10%</span>
                            </div>
                        </li>
                    </ul>
                    <ul class="music__item-product__fav-compare nav flex-column">
                        <li>
                            <a href="" class="music__item-product__fav-compare__inner">
                                <svg width="18" height="16">
                                    <use xlink:href="#svg-fav"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" class="music__item-product__fav-compare__inner">
                                <svg width="14" height="18">
                                    <use xlink:href="#svg-compare"></use>
                                </svg>
                            </a>
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
                    <div class="music__item-product__category">
                        L-3808 Matt Grey
                    </div>
                    <div class="music__item-product__title">
                        ПРОФЕССИОНАЛЬНЫЙ ВИНИЛОВЫЙ
                        ПРОИГРЫВАТЕЛЬ LENCO 3808
                    </div>
                </a>
                <div class="music__item-product__footer">
                    <div class="music__item-product__footer__col-cost">
                        <span class="music__item-product__price">29 490 <span class="b-rub">Р</span></span>
                    </div>
                    <a data-bs-toggle="modal" href="#preOrder" class="music__item-product__btn-bay">ПРЕДЗАКАЗ</a>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <?php
            include __DIR__ . '/inc/item-product.php';
            ?>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <?php
            include __DIR__ . '/inc/item-product.php';
            ?>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <?php
            include __DIR__ . '/inc/item-product.php';
            ?>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
            <?php
            include __DIR__ . '/inc/item-product.php';
            ?>
        </div>
    </div>

    <?php
    include __DIR__ . '/inc/pagination.php';
    ?>
</div>
    <div class="fpad70 tpad70">
        <?php
        include __DIR__ . '/inc/callback.php';
        ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="preOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Оповестить о поступлении</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="music__text fpad15">
                        <p>Уважаемый клиент!<br>
                            К сожалению, данный товар сейчас недоступен для покупки.<br>
                            Вы можете оставить свои контактные данные, и мы сообщим,<br>
                            когда данный товар поступит на наш склад!</p>
                    </div>
                    <form action="" class="music__form">
                        <div class="music__form__box-inp">
                            <input type="text" required name="fio" class="music__form__inp" placeholder="Ваше имя*">
                        </div>
                        <div class="music__form__box-inp">
                            <input type="tel" required name="tel" class="music__form__inp" placeholder="Номер телефона*">
                        </div>
                        <div class="music__form__box-inp">
                            <input type="email" required name="email" class="music__form__inp" placeholder="Ваш E-mail*">
                        </div>
                        <div class="music__form__box-inp">
                            <input type="submit" class="music__form__submit" value="ОТПРАВИТЬ">
                        </div>
                        <div class="music__form__ps">
                            Нажимая на кнопку “Отправить”, я принимаю условия<br>
                            <a href="" target="_blank">Политики конфиденциальности</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>