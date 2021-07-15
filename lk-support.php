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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/inc/script.php';
?>
<script src="./js/datepicker.js"></script>
</body>
</html>
