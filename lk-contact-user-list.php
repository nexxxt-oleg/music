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
                        <svg class="voessen_lk-icon" width="17" height="18">
                            <use xlink:href="#svg-lk4"></use>
                        </svg>
                        Настройки
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
                    <h2>Контактные лица</h2>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="" title="Добавить">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-add-user"></use>
                                </svg>
                                <span>Добавить</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="table-responsive table-responsive-lg voessen__product__table-list-product">
                    <table class="table table-hover voessen__table">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Должность</th>
                            <th>Роль</th>
                            <th>Телефон</th>
                            <th>Моб. телефон</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Космодемьянский
                                Александр Анатольевич</td>
                            <td>Генеральный директор</td>
                            <td> </td>
                            <td>+7 (495) 555-44-22</td>
                            <td>+7 (495) 555-44-22</td>
                            <td>mail@website.com</td>
                            <td>
                                <ul class="nav flex-nowrap voessen__table__edit-nav">
                                    <li>
                                        <a href="" title="Редактировать">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-edit"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" title="Удалить">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-del-user"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Космодемьянский
                                Александр Анатольевич</td>
                            <td>Генеральный директор</td>
                            <td> </td>
                            <td>+7 (495) 555-44-22</td>
                            <td>+7 (495) 555-44-22</td>
                            <td>mail@website.com</td>
                            <td>
                                <ul class="nav flex-nowrap voessen__table__edit-nav">
                                    <li>
                                        <a href="" title="Редактировать">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-edit"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" title="Удалить">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-del-user"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Космодемьянский
                                Александр Анатольевич</td>
                            <td>Генеральный директор</td>
                            <td> </td>
                            <td>+7 (495) 555-44-22</td>
                            <td>+7 (495) 555-44-22</td>
                            <td>mail@website.com</td>
                            <td>
                                <ul class="nav flex-nowrap voessen__table__edit-nav">
                                    <li>
                                        <a href="" title="Редактировать">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-edit"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" title="Удалить">
                                            <svg width="18" height="18">
                                                <use xlink:href="#edit-del-user"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
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
<?php
include_once __DIR__ . '/inc/script.php';
?>
<script src="./js/datepicker.js"></script>
</body>
</html>
