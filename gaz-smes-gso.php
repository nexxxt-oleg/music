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
                <div class="col-xl-3 col-lg-4">
                    <div class="voessen__product__sb voessen__filter">
                        <div class="voessen__product__sb__caption hidden-911">Подбор по параметрам</div>
                        <div class="navbar navbar-expand-lg position-static">
                            <button class="navbar-toggler collapsed w-100" type="button" data-toggle="collapse"
                                    data-target="#filterNav" aria-controls="filterNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <div class="d-flex align-items-center voessen__filter__mob-title ">
                                    <svg width="20" height="20" class="mr-10">
                                        <use xlink:href="#svg-filter"></use>
                                    </svg>
                                    <span>Подбор по параметрам</span>
                                </div>

                            </button>
                            <div class="navbar-collapse w-100 collapse--lk collapse" id="filterNav">
                                <div class="navbar-brand border-bottom">
                                    <div class="d-flex align-items-center voessen__filter__mob-title pl-20">
                                        <svg width="20" height="20" class="mr-10">
                                            <use xlink:href="#svg-filter"></use>
                                        </svg>
                                        <span>Подбор по параметрам</span>
                                        <button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse"
                                                data-target="#filterNav" aria-controls="filterNav" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                            <svg width="13" height="13" >
                                                <use xlink:href="#svg-close"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="voessen__product__sb__section voessen__product__sb__section--border">
                                        <div class="voessen__product__sb__section__caption">
                                            Газ-разбавитель
                                        </div>
                                        <select class="form-select form-select-sm" name="har1">
                                            <option value="1">air [воздух]</option>
                                            <option value="2">air [воздух]</option>
                                            <option value="3">air [воздух]</option>
                                        </select>
                                    </div>
                                    <div class="voessen__product__sb__section">
                                        <div class="voessen__product__sb__section__caption">
                                            Компоненты
                                        </div>
                                        <div class="voessen__search-box">
                                            <input class="voessen__search-box__inp" type="text" name="search">
                                            <button type="submit" class="voessen__search-box__submit">
                                                <svg class="icon--search" width="18" height="18">
                                                    <use xlink:href="#svg-search"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="voessen__product__sb__list-check">
                                            <div id="jsScrollWrap">
                                                <ul class="nav flex-column voessen__checkbox-list">
                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="1" checked>
                                                            <span>Ar [аргон]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="2">
                                                            <span>AsH3 [арсин]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="3">
                                                            <span>BCl3 [бор треххлористый (трихлорид бора)]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="1">
                                                            <span>C10H12 [дициклопентадиен]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="3">
                                                            <span>BCl3 [бор треххлористый (трихлорид бора)]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="1">
                                                            <span>C10H12 [дициклопентадиен]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="3">
                                                            <span>BCl3 [бор треххлористый (трихлорид бора)]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="1">
                                                            <span>C10H12 [дициклопентадиен]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="3">
                                                            <span>BCl3 [бор треххлористый (трихлорид бора)]</span>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label class="voessen__checkbox-item">
                                                            <input type="checkbox" name="ff" value="1">
                                                            <span>C10H12 [дициклопентадиен]</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="voessen__product__sb__footer">
                                        <button type="submit" class="voessen__btn-blue w-100"><span>Применить</span>
                                        </button>
                                        <a href="" class="voessen__filter__clear">
                                            <svg width="12" height="12">
                                                <use xlink:href="#svg-close"></use>
                                            </svg>
                                            Сбросить фильтры
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="voessen__product__sort-top">
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
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
                            <?php
                            include __DIR__ . '/inc/product-item4.php'
                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 fpad30">
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