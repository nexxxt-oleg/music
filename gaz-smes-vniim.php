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
    <div class="voessen__silver tpad0 fpad30">
        <div class="container voessen__product">
            <ul class="nav voessen__breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="">Газовые смеси</a></li>
                <li><a href="">Поверочные газовые смеси ГСО-ПГС, калибровочные газовые смеси</a></li>
                <li><span>Готовые газовые смеси ГСО-ПГС</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Готовые газовые смеси ГСО-ПГС</h1>
            </header>
            <div class="row">

                <div class="col-12">
                    <div class="voessen__product__sort-top">
                        <div class="voessen__product__search-box__label">
                            Номер ГСО
                        </div>
                        <div class="voessen__product__search-box__wrap flex-grow-1">
                            <form action="" class="w-100">
                                <div class="voessen__search-box w-100">
                                    <input class="voessen__search-box__inp" type="text" placeholder="Укажите номер в Госреестре СО " name="search">
                                    <button type="submit" class="voessen__search-box__submit">
                                        <svg class="icon--search" width="18" height="18">
                                            <use xlink:href="#svg-search"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <ul class="nav nav--view">
                            <li>
                                <a href="" class="active">
                                    <svg width="18" height="18">
                                        <use xlink:href="#svg-v-card"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg width="18" height="18">
                                        <use xlink:href="#svg-v-list"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 fpad30">
                    <?php
                    include __DIR__ . '/inc/product-item4.php'
                    ?>
                </div>
                <div class="col-12">
                    <div class="voessen__pagination">
                        <ul class="nav justify-content-center">
                            <li class="voessen__pagination__prev">
                                <a href="" class="voessen__pagination__nav">
                                    <svg width="25" height="13">
                                        <use xlink:href="#svg-prev"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="voessen__pagination__item"><a href="" class="active">1</a></li>
                            <li class="voessen__pagination__item"><a href="">2</a></li>
                            <li class="voessen__pagination__item"><a href="">3</a></li>
                            <li class="voessen__pagination__item"><a href="">4</a></li>
                            <li class="voessen__pagination__item"><a href="">5</a></li>
                            <li class="voessen__pagination__item"><span class="dots">...</span></li>
                            <li class="voessen__pagination__item"><a href="">10</a></li>
                            <li class="voessen__pagination__next">
                                <a href="" class="voessen__pagination__nav">
                                    <svg width="25" height="13">
                                        <use xlink:href="#svg-next"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container tpad50 fpad50 voessen__text">
    <h2>Готовые газовые смеси ГСО-ПГС</h2>
    <p>Газы в баллонах - оптимальная форма газообеспечения при невысоком потреблении<br>
        Для клиентов, которым требуются небольшие количества газа и мобильное снабжение им, наиболее удобным
        является получение газа в баллонах.</p>

    <p>Газы в баллонах содержатся под давлением до 150 атмосфер. Емкость баллонов варьируется от 1 до 50 литров.</p>
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