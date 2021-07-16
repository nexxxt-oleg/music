<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/lib.css">
    <link rel="stylesheet" href="css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>
    <div class="voessen__personal-account">
        <div class="container">
            <div class="voessen__personal-account__header">
                <nav class="navbar navbar-expand-lg">
                    <div class="navbar-brand">
                        <svg class="voessen_lk-icon" width="18" height="17">
                            <use xlink:href="#svg-lk6"></use>
                        </svg>
                        Рассылки
                    </div>
                    <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <svg width="20" height="13">
                            <use xlink:href="#svg-nav"></use>
                        </svg>
                    </button>
                    <?php
                    include_once __DIR__ . '/inc/lk/nav.php'
                    ?>
                </nav>
            </div>
            <div class="voessen__form voessen__form--pading">
                <div class="voessen__form__header">
                    <h2>Рассылки</h2>
                </div>

                <ul class="nav d-block voessen__form__mailing">
                    <li>
                        <span>Новости</span>
                        <label class="voessen__form__chekbox"><input name="news" type="checkbox"
                                                                     checked><span></span></label>
                    </li>
                    <li>
                        <span>Новики каталога</span>
                        <label class="voessen__form__chekbox"><input name="catalog"
                                                                     type="checkbox"><span></span></label>
                    </li>
                    <li>
                        <span>Распродажи</span>
                        <label class="voessen__form__chekbox"><input name="sales" type="checkbox"
                                                                     checked><span></span></label>
                    </li>
                </ul>

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
