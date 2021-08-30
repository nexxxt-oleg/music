<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <div class="row">
            <div class="col-12 music__page">
                <div class="music__page__breadcrumbs">
                    <ul class="nav">
                        <li><a href="">Главная</a></li>
                        <li><span>Сравнение</span></li>
                    </ul>
                </div>
                <header class="d-flex justify-content-between music__page__header">
                    <h1 class="music__page__title">Сравнение</h1>
                    <a href="" class="music__link music__link--del mt-5 ">
                        <span class="btn-close mr-2"></span>
                        Очистить сравнение
                    </a>
                </header>
                <div class="music__compare">
                    <div class="music__compare__header">
                        <div class="row align-items-center">
                            <div class="music__compare__header__col-count col-lg-3 col-sm-12 col-12">
                                <span class="music__label">Товаров в сравнении:</span>
                                <span class="music__count-products">4</span>
                            </div>
                            <div class="music__compare__header__col-filter col-lg-9 col-sm-12 col-12 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <label class="music__label">Характеристики:</label>
                                    <ul class="nav music__list-filter">
                                        <li>
                                            <label class="music__radiobutton">
                                                <input type="radio" value="1" name="filter" checked>
                                                <span>Все</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="music__radiobutton">
                                                <input type="radio" value="2" name="filter">
                                                <span>Различающиеся</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <label class="music__label">Категория:</label>
                                    <div class="btn-group music__page__sort w-auto">
                                        <button class="btn-sort dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            Компьютерные кресла
                                        </button>
                                        <div class="dropdown-menu music__filter-box__dropdown-menu music__filter-box__dropdown-menu--w20">
                                            <a href="" class="dropdown-item">Компьютерные кресла</a>
                                            <a href="" class="dropdown-item active"> Компьютерные кресла</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group music__page__sort music__page__sort--catalog music__compare__header__mob-sort">
                        <button class="btn-sort dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Компьютерные кресла
                        </button>
                        <div class="dropdown-menu dropdown-menu--black">
                            <a href="" class="dropdown-item">Компьютерные кресла2</a>
                            <a href="" class="dropdown-item active">Компьютерные кресла3</a>
                        </div>
                    </div>
                    <div class="row align-items-end music__compare__row">
                        <div class="music__compare__col-props col-lg-3 col-md-4">
                            <div class="music__mob-compare-params">
                                <div class="music__mob-compare-params__title">Сравнение характеристик</div>
                                <label class="music__lk-sender">
                                    <input type="checkbox" checked="" value="1" name="news">
                                    <span>Только различающиеся</span>
                                </label>
                            </div>
                            <ul class="nav music__nav-props js-compare-props">
                                <li class="music__nav-props__line music__nav-props__line--n1" data-sinhro="music__nav-props__line--n1">
                                    <span>Артикул</span>
                                </li>
                                <li class="music__nav-props__line music__nav-props__line--n2" data-sinhro="music__nav-props__line--n2">
                                    <span>Название модели модели модели модели</span>
                                </li>
                                <li class="music__nav-props__line music__nav-props__line--n3" data-sinhro="music__nav-props__line--n3">
                                    <span>Цвет</span>
                                </li>
                                <li class="music__nav-props__line music__nav-props__line--n4" data-sinhro="music__nav-props__line--n4">
                                    <span>Для людей ростом от</span>
                                </li>
                                <li class="music__nav-props__line music__nav-props__line--n5" data-sinhro="music__nav-props__line--n5">
                                    <span>Нагрузка до</span>
                                </li>
                            </ul>
                        </div>
                        <div class="music__compare__col-products col-lg-9 col-md-8 col-6">
                            <div id="compareSlider" class="music__list-compare swiper-container">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                </div>

                                <div class="button-prev">
                                    <svg width="9" height="18">
                                        <use xlink:href="#svg-str-prev"></use>
                                    </svg>
                                </div>
                                <div class="button-next">
                                    <svg width="9" height="18">
                                        <use xlink:href="#svg-str-next"></use>
                                    </svg>
                                </div>
                                <div class="pagination"></div>
                            </div>
                        </div>
                        <div class="music__compare__col-products music__compare__col-products--mob col-6">
                            <div id="compareSlider2" class="music__list-compare swiper-container">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        include __DIR__ . '/inc/product-compare.php';
                                        ?>
                                    </div>
                                </div>

                                <div class="button-prev">
                                    <svg width="9" height="18">
                                        <use xlink:href="#svg-str-prev"></use>
                                    </svg>
                                </div>
                                <div class="button-next">
                                    <svg width="9" height="18">
                                        <use xlink:href="#svg-str-next"></use>
                                    </svg>
                                </div>
                                <div class="pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="music__consul-form">
                    <div class="music__consul-form__wrap">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-4 col-xl-5 music__consul-form__label">
                                Остались вопросы?
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 ">
                                <a href="" class="music__btn w-100">
                                    <span>Получить консультацию по телефону</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


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