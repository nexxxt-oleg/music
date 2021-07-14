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
                    <div class="navbar-brand" >
                        <svg class="voessen_lk-icon" width="18" height="18">
                            <use xlink:href="#svg-lk1"></use>
                        </svg>
                        Мой кабинет
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
            <div class="voessen__form voessen__form--pading voessen__lk-home">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img src="./img/lk-hello.svg" class="voessen__lk-home__logo" alt="" width="313" height="207">
                    </div>
                    <div class="col-lg-7 col-xl-6 voessen__text voessen__lk-home__text">
                        <h3>Здравствуйте!</h3>
                        <p>Пройдите полную регистрацию для доступа к актуальным ценам товаров, заказам и автоматизированным финансовым и логистическим операциям </p>
                        <div class="tpad15">
                            <a href="" class="voessen__btn-green">
                                ПОЛНАЯ РЕГИСТРАЦИЯ
                            </a>
                        </div>
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
