<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="music__home-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="music__home-slider__text">
                        <div class="swiper-container" id="slHomeText">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="music__home-slider__text-box">
                                        <div class="music__home-slider__text-box__wrap">
                                            <div class="music__home-slider__text-box__label music__home-slider__text-box__label--new">
                                                <span>Новинка</span>
                                            </div>
                                            <span class="music__home-slider__subtitle">ВИНИЛОВЫЙ ПРОИГРЫВАТЕЛЬ</span>
                                            <span class="music__home-slider__title">LENCO LS-50</span>
                                            <div class="music__home-slider__tizer">Это современный проигрыватель винила
                                                с двумя встроенными динамиками, функцией
                                                оцифровки и встроенным стерео усилителем</div>
                                            <a href="#" class="music__btn"><span>ПОДРОБНЕЕ</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="music__home-slider__text-box">
                                        <div class="music__home-slider__text-box__wrap">
                                            <div class="music__home-slider__text-box__label music__home-slider__text-box__label--new">
                                                <span>Новинка</span>
                                            </div>
                                            <span class="music__home-slider__subtitle">ВИНИЛОВЫЙ ПРОИГРЫВАТЕЛЬ2</span>
                                            <span class="music__home-slider__title">LENCO LS-50</span>
                                            <div class="music__home-slider__tizer">Это современный проигрыватель винила
                                                с двумя встроенными динамиками, функцией
                                                оцифровки и встроенным стерео усилителем</div>
                                            <a href="#" class="music__btn"><span>ПОДРОБНЕЕ</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                    <div class="music__home-slider__img-box">
                        <div class="swiper-container" id="slHomePic">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="music__home-slider__item-img">
                                        <picture>
                                            <source srcset="./img/sl1_3.jpg" media="(max-width: 768px)">
                                            <source srcset="./img/sl1.jpg" media="(min-width: 1920px)">
                                            <source srcset="./img/sl1_2.jpg">
                                            <img src="./img/sl1_2.jpg" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="music__home-slider__item-img">
                                        <picture>
                                            <source srcset="./img/sl1_3.jpg" media="(max-width: 768px)">
                                            <source srcset="./img/sl1.jpg" media="(min-width: 1920px)">
                                            <source srcset="./img/sl1_2.jpg">
                                            <img src="./img/sl1_2.jpg" alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev" id="prev"></div>
        <div class="swiper-button-next" id="next"></div>
    </div>

<?php
include_once __DIR__ . '/inc/footer.php';
?>