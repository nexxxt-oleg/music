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
                <li><a href="">Газовые смеси по номерам ГСО</a></li>
                <li><span>Информация об устаревших ГСО</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Информация об устаревших ГСО</h1>
            </header>
            <div class="voessen__product__search-box">
                <div class="voessen__product__search-box__label">
                    Номер ГСО
                </div>
                <div class="voessen__product__search-box__wrap">
                    <form action="">
                        <div class="voessen__search-box">
                            <input class="voessen__search-box__inp" type="text"
                                   placeholder="Информация об устаревших ГСО" name="search">
                            <button type="submit" class="voessen__search-box__submit">
                                <svg class="icon--search" width="18" height="18">
                                    <use xlink:href="#svg-search"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="voessen__box-scroll">
                <div class="voessen__box-scroll__inner">
                    <div class="row">
                        <div class="col-10">
                            <div class="voessen__product__th voessen__product__th--min">
                                <div class="voessen__product__th__rb voessen__col-145">
                                    № ГСО<br>
                                    (№ ЭМ ВНИИМ)
                                </div>
                                <div class="voessen__product__th__rb voessen__col-200">
                                    Компонентный состав
                                </div>
                                <div class="voessen__product__th__rb voessen__col-200">
                                    Номинальное значение
                                    объемной (молярной) доли
                                    определяемого компонента
                                </div>
                                <div class="voessen__product__th__rb voessen__col-96">
                                    Единицы
                                    измерений
                                </div>
                                <div class="voessen__product__th__rb voessen__col-120">
                                    Пределы
                                    допускаемого
                                    отклонения ±Д
                                </div>
                                <div class="voessen__product__th__rb voessen__col-130">
                                    Пределы
                                    допускаемой
                                    погрешности ±Д *
                                </div>
                                <div class="voessen__col-65">
                                    Разряд
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="voessen__product__search-item voessen__product__search-item--v2">
                        <div class="voessen__col-145 voessen__rb">
                        <span>
                            5832-91<br>
                            (06.01.480)
                        </span>
                        </div>
                        <div class="voessen__col-200 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>аргон [Ar]</span>
                            </div>
                            <div>
                                <span>гелий [He]</span>
                            </div>
                        </div>
                        <div class="voessen__col-200 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.5</span>
                            </div>
                            <div>
                                <span>остальное</span>
                            </div>
                        </div>
                        <div class="voessen__col-96 voessen__rb">
                            <span>млн-1 об.</span>
                        </div>
                        <div class="voessen__col-120 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.3 абс.</span>
                            </div>
                            <div>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="voessen__col-130 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.1 абс.</span>
                            </div>
                            <div>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="voessen__col-65 voessen__rb">
                            <span>2</span>
                        </div>
                        <div class="voessen__col-link-btn">
                            <a href="" class="voessen__btn-green2">Купить действующий
                                аналог ГСО ХХХХ-ХХ</a>
                        </div>
                    </div>
                    <div class="voessen__product__search-item voessen__product__search-item--v2">
                        <div class="voessen__col-145 voessen__rb">
                        <span>
                            5832-91<br>
                            (06.01.480)
                        </span>
                        </div>
                        <div class="voessen__col-200 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>аргон [Ar]</span>
                            </div>
                            <div>
                                <span>гелий [He]</span>
                            </div>
                        </div>
                        <div class="voessen__col-200 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.5</span>
                            </div>
                            <div>
                                <span>остальное</span>
                            </div>
                        </div>
                        <div class="voessen__col-96 voessen__rb">
                            <span>млн-1 об.</span>
                        </div>
                        <div class="voessen__col-120 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.3 абс.</span>
                            </div>
                            <div>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="voessen__col-130 voessen__rb voessen__two-row">
                            <div class="voessen__two-row__top">
                                <span>0.1 абс.</span>
                            </div>
                            <div>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="voessen__col-65 voessen__rb">
                            <span>2</span>
                        </div>
                        <div class="voessen__col-link-btn">
                            <a href="" class="voessen__btn-green2">Купить действующий
                                аналог ГСО ХХХХ-ХХ</a>
                        </div>
                    </div>
                    <div class="voessen__product__search-item voessen__product__search-item--v2">
                    <div class="voessen__col-145 voessen__rb">
                    <span>
                        5832-91<br>
                        (06.01.480)
                    </span>
                    </div>
                    <div class="voessen__col-200 voessen__rb voessen__two-row">
                        <div class="voessen__two-row__top">
                            <span>аргон [Ar]</span>
                        </div>
                        <div>
                            <span>гелий [He]</span>
                        </div>
                    </div>
                    <div class="voessen__col-200 voessen__rb voessen__two-row">
                        <div class="voessen__two-row__top">
                            <span>0.5</span>
                        </div>
                        <div>
                            <span>остальное</span>
                        </div>
                    </div>
                    <div class="voessen__col-96 voessen__rb">
                        <span>млн-1 об.</span>
                    </div>
                    <div class="voessen__col-120 voessen__rb voessen__two-row">
                        <div class="voessen__two-row__top">
                            <span>0.3 абс.</span>
                        </div>
                        <div>
                            <span>-</span>
                        </div>
                    </div>
                    <div class="voessen__col-130 voessen__rb voessen__two-row">
                        <div class="voessen__two-row__top">
                            <span>0.1 абс.</span>
                        </div>
                        <div>
                            <span>-</span>
                        </div>
                    </div>
                    <div class="voessen__col-65 voessen__rb">
                        <span>2</span>
                    </div>
                    <div class="voessen__col-link-btn">
                        <a href="" class="voessen__btn-green2">Купить действующий
                            аналог ГСО ХХХХ-ХХ</a>
                    </div>
                </div>
                </div>
            </div>
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
