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
                        <img src="./img/lk-verif.svg" class="voessen__lk-home__logo" alt="" width="313" height="207">
                    </div>
                    <div class="col-lg-7 col-xl-6 voessen__text voessen__lk-home__text">
                        <h3>Ваш аккаунт находится на верификации!</h3>
                        <p>Верификация позволяет нам быть уверенными в том, что Вы являетесь именно тем лицом, за которое себя выдаете.</p>
                        <p>Верификация учетной записи обычно занимает не более 5 минут и после ее завершения Вы сможете получить полный доступ к личному кабинету.</p>
                        <p>Если верификация не пройдена свяжитесь с нами <a href="mailto:support@voessen.com">support@voessen.com</a></p>
                        <p>Если ваши данные не прошли проверку, вы получите уведомление об этом по электронной почте.</p>
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
