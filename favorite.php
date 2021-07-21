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
                <li><span>Избранное</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Избранное</h1>
                <a href="" class="voessen__all-clear">
                    <svg width="15" height="18">
                        <use xlink:href="#svg-del"></use>
                    </svg>
                    Очистить избранное
                </a>
            </header>

            <div class="voessen__product__sort-top">
                <div class="voessen__product__col-sort voessen__product__col-sort--cat">
                    <label>Категория:</label>
                    <div class="btn-group voessen__sort">
                        <button class="btn-sort dropdown-toggle" data-toggle="dropdown">
                            Все
                        </button>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <a href="" class="dropdown-item">По умолчанию</a>
                            <a href="" class="dropdown-item active">Цене</a>
                            <a href="" class="dropdown-item"> По убыванию цены</a>
                            <a href="" class="dropdown-item">По новизне</a>
                            <a href="" class="dropdown-item">По популярности</a>
                            <a href="" class="dropdown-item">По скидке</a>
                        </div>
                    </div>
                </div>
                <div class="voessen__product__col-sort">
                    <label>Сортировать по:</label>
                    <div class="btn-group voessen__sort">
                        <button class="btn-sort dropdown-toggle" data-toggle="dropdown">
                            Цене
                        </button>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <a href="" class="dropdown-item">По умолчанию</a>
                            <a href="" class="dropdown-item active">Цене</a>
                            <a href="" class="dropdown-item"> По убыванию цены</a>
                            <a href="" class="dropdown-item">По новизне</a>
                            <a href="" class="dropdown-item">По популярности</a>
                            <a href="" class="dropdown-item">По скидке</a>
                        </div>
                    </div>
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
            <div class="row">
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-lg-3 fpad30">
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