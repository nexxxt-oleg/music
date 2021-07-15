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
                    <h2>Отправить документы</h2>
                </div>
                <form action="">
                    <div class="voessen__form__group">
                        <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                            <label class="form-label">Номер заказа</label>
                            <input type="text" class="form-control" value="111">
                        </div>


                        <div id="upload-dropzone2" class="dropzone">
                            <span class="dropzone__text1">Перетащите сюда ваши файлы</span>
                            <span class="dropzone__text2">или</span>
                            <div class="dropzone__btn">
                                <label class="fileup-btn">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 512 484.59">
                                        <path fill="#0092d2"
                                              d="M464.06,47.86c-63.81-63.81-167.65-63.81-231.47,0L34.18,246.27A116.91,116.91,0,0,0,199.52,411.6L381.39,229.73a70.14,70.14,0,1,0-99.2-99.2L163.26,249.46a23.38,23.38,0,1,0,33.06,33.07L315.26,163.6a23.38,23.38,0,1,1,33.07,33.06L166.46,378.54a70.15,70.15,0,0,1-99.21-99.21L265.66,80.93A116.91,116.91,0,1,1,431,246.26L232.59,444.67a23.38,23.38,0,1,0,33.07,33.07l198.4-198.41a163.67,163.67,0,0,0,0-231.47Z"/>
                                    </svg>
                                    Выбрать файлы
                                    <input type="file" id="upload-demo2" multiple>
                                </label>
                            </div>
                        </div>
                        <div id="upload-demo-queue2" class="queue voessen__form__group__list-file"></div>
                        <div class="voessen__form__group__footer">
                            <div class="row justify-content-center">

                                <div class="col-lg-3 col-sm-6 tpad15">
                                    <button class="voessen__btn-border w-100" type="reset">ОТМЕНИТЬ</button>
                                </div>
                                <div class="col-lg-3 col-sm-6 tpad15">
                                    <button class="voessen__btn-green w-100" type="submit">ОТПРАВИТЬ</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
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
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="./js/file_input.js"></script>
</body>
</html>
