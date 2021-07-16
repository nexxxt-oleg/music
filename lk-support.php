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
                        <svg class="voessen_lk-icon" width="18" height="18">
                            <use xlink:href="#svg-lk5"></use>
                        </svg>
                        Поддержка
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
                    <h2>Поддержка</h2>
                    <div class="voessen__form__header__support">
                        <div class="voessen__form__filter__search">
                            <label>Быстрый поиск</label>
                            <input type="text" class="form-control form-control--h32">
                            <button class="voessen__form__filter__search__submit">
                                <svg class="icon--search" width="18" height="18">
                                    <use xlink:href="#svg-search"></use>
                                </svg>
                            </button>
                        </div>
                        <button href="#questionModal" data-toggle="modal" class="voessen__btn-green voessen__btn-green--min">Задать вопрос</button>
                    </div>
                </div>


                <div class="table-responsive table-responsive-lg voessen__product__table-list-product">
                    <table class="table table-border table-hover voessen__table">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Дата обновления</th>
                            <th>Тема</th>
                            <th>Номер заказа</th>
                            <th style="width: 110px">Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1000</td>
                            <td>01.11.2020 15:00:32</td>
                            <td><a href="">Заголовок обращения</a></td>
                            <td>1000-5000-5000-470</td>
                            <td>Открытый</td>
                        </tr>
                        <tr>
                            <td>1000</td>
                            <td>01.11.2020 15:00:32</td>
                            <td><a href="">Заголовок обращения</a></td>
                            <td>1000-5000-5000-470</td>
                            <td>Открытый</td>
                        </tr>
                        <tr>
                            <td>1000</td>
                            <td>01.11.2020 15:00:32</td>
                            <td><a href="">Заголовок обращения</a></td>
                            <td>1000-5000-5000-470</td>
                            <td>Открытый</td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="voessen__btn-more">Показать еще</button>
                </div>
                <?php
                include __DIR__ . '/inc/pagination.php';
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>

<div class="modal fade" id="questionModal" tabindex="-1" >
    <div class="modal-dialog modal-dialog--support">
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <h5 class="modal-title">Задать вопрос</h5>
            <form action="">
            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                <label class="form-label">Ваше имя</label>
                <input type="text" class="form-control"  required="" value="">
            </div>
            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                <label class="form-label">Номер телефона</label>
                <input type="tel" class="form-control"  required="" value="">
            </div>
            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control"  required="" value="">
            </div>
            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                <label class="form-label">Сообщение</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <label class="fileup-btn fileup-btn--v2">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 484.59">
                            <path fill="#0092d2"
                                  d="M464.06,47.86c-63.81-63.81-167.65-63.81-231.47,0L34.18,246.27A116.91,116.91,0,0,0,199.52,411.6L381.39,229.73a70.14,70.14,0,1,0-99.2-99.2L163.26,249.46a23.38,23.38,0,1,0,33.06,33.07L315.26,163.6a23.38,23.38,0,1,1,33.07,33.06L166.46,378.54a70.15,70.15,0,0,1-99.21-99.21L265.66,80.93A116.91,116.91,0,1,1,431,246.26L232.59,444.67a23.38,23.38,0,1,0,33.07,33.07l198.4-198.41a163.67,163.67,0,0,0,0-231.47Z"/>
                        </svg>
                        Выбрать файлы
                        <input type="file"  multiple>
                    </label>
                </div>
                <div class="col-sm-6">
                    <buttom class="voessen__btn-green w-100" type="submit">Отправить</buttom>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/inc/script.php';
?>

</body>
</html>
