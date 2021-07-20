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
    <div class="voessen__full-banner" style="background-image: url(./img/bg-truba.jpg)">
        <div class="container">
            <div class="voessen__full-banner__wrap">
                <ul class="nav voessen__breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    <li><a href="">Трубопроводы</a></li>
                    <li><span>Разработка проектной и рабочей документации</span></li>
                </ul>
                <div class="voessen__full-banner__wrap__desc row">
                    <div class="voessen__text voessen__text--white col-xl-8">
                        <h1>Разработка проектной и рабочей документации
                            инженерами-экспертами в области газов</h1>
                        <p>Прокладка трубопровода технических газов требует предварительного планирования, проектирования, утверждения проекта. Суть создания проекта заключается в том, чтобы максимально учесть требования технического задания, условия эксплуатации, требования по технике безопасности и особенности планировки объекта.</p>
                        <div class="tpad15">
                            <a href="/" class="voessen__btn-green">ОСТАВИТЬ ЗАЯВКУ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="voessen__text border-bottom fpad50">
            <h2>Элементы проектирования</h2>
            <p>В рамках проектных работ специалисты нашей компании грамотно и рационально выстраивают прокладку трубопровода для кислорода, закиси азота, углекислого газа, аргона, водорода,  гелия – активных и инертных газов, используемых в промышленности, испытательных и производственных лабораториях, в медицинских учреждениях. При этом тщательно выбирают:</p>
            <ul>
                <li>материал и технические параметры труб,</li>
                <li>тип соединения и отводов,</li>
                <li>варианты крепления и сочленения отдельных элементов,</li>
                <li>подбирают наиболее надежную арматуру и контрольно-измерительное оборудование.</li>
            </ul>
            <p>В проект включают не только собственно трубопровод технических газов, но и элементы всей системы подготовки, подачи, смешения газовых сред. Это могут быть шкафы и площадки для хранения баллонов с газом, смесевые узлы.</p>
            <br>
            <br>
            <h2>Комплект документов</h2>
            <p>Виды работ, которые выполняют наши инженеры, включают подготовку проектной документации, куда входят чертежи, спецификации, технологические карты. Готовая техническая документация служит руководством для реализации проекта, а также позволяет составить точную смету стоимости проектирования и монтажных работ с учетом цен на рекомендуемые материалы. Весь пакет проектировочных документов передают заказчику после завершения монтажа и проверки работоспособности готового газопровода.</p>
        </div>

        <div class="voessen__text tpad70 fpad70">
            <h2>Выполненные проекты</h2>
            <div class="voessen__wrap-slider voessen__wrap-slider--img">
                <div id="sliderImages" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/img/portfolio1.jpg" class="voessen__zoom-link" data-fancybox="gallery">
                                <img src="./img/portfolio1.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/img/portfolio1.jpg" class="voessen__zoom-link" data-fancybox="gallery">
                                <img src="./img/portfolio1.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/img/portfolio1.jpg" class="voessen__zoom-link" data-fancybox="gallery">
                                <img src="./img/portfolio1.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/img/portfolio1.jpg" class="voessen__zoom-link" data-fancybox="gallery">
                                <img src="./img/portfolio1.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-button-next voessen__slider-product__nav">
                        <svg width="25" height="13">
                            <use xlink:href="#svg-next"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-prev voessen__slider-product__nav">
                        <svg width="25" height="13">
                            <use xlink:href="#svg-prev"></use>
                        </svg>
                    </div>
                    <div class="swiper-pagination swiper-pagination--footer"></div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include_once __DIR__ . '/inc/callback.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>