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
                        <svg class="voessen_lk-icon" width="15" height="18">
                            <use xlink:href="#svg-lk3"></use>
                        </svg>
                        Документы
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
                    <h2>Документы</h2>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="" title="Отправить документы">
                                <svg width="12" height="12">
                                    <use xlink:href="#edit-send-doc"></use>
                                </svg>
                                <span>Отправить документы</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="voessen__form__filter">
                    <div class="row align-items-center">
                        <div class="col-lg-4 fpad15">
                            <div class="d-flex align-items-center">
                                <label class="voessen__form__filter__label">Тип документа:</label>
                                <div class="flex-grow-1">
                                    <select name="" class="form-select form-select--h32">
                                        <option value="Все">Все</option>
                                        <option value="Все">Все</option>
                                        <option value="Все">Все</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 fpad15">
                            <div class="d-flex align-items-center">
                                <label class="voessen__form__filter__label">Период:</label>
                                <div class="voessen__form__filter__date">
                                    <div class="voessen__form__filter__date__inp">
                                        <input type="text" class="form-control form-control--h32 form-control--date" id="dateDoc1">
                                    </div>
                                    <div class="voessen__form__filter__date__sel">&mdash;</div>
                                    <div class="voessen__form__filter__date__inp">
                                        <input type="text" class="form-control form-control--h32 form-control--date" id="dateDoc2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 fpad15">
                            <div class="voessen__form__filter__search">
                                <label>Быстрый поиск</label>
                                <input type="text" class="form-control form-control--h32">
                                <button class="voessen__form__filter__search__submit">
                                    <svg class="icon--search" width="18" height="18">
                                        <use xlink:href="#svg-search"></use>
                                    </svg>
                                </button>
                            </div>
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
<script src="./js/datepicker.js"></script>
</body>
</html>
