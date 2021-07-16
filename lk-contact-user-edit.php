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
                    <h2>Редактировать контактное лицо</h2>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="" title="Удалить">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-del-user"></use>
                                </svg>
                                <span>Удалить</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="voessen__form__group">
                    <div class="voessen__form__group__body">
                        <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                            <label class="form-label">Контактное лицо ФИО</label>
                            <input type="text" class="form-control" value="Космодемьянский Александр Анатольевич">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">Должность</label>
                                    <input type="text" class="form-control" value="Генеральный директор">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">Роль</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">Номер телефона</label>
                                    <input type="text" class="form-control" value="+7 (495) 555-44-22">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">Моб. телефон</label>
                                    <input type="text" class="form-control" value="+7 (495) 555-44-22">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control" value="a.kosmodemyanskij@website.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                    <label class="form-label">Комментарий</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="voessen__form__group__footer">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 tpad15">
                                <button class="voessen__btn-green w-100">СОХРАНИТЬ</button>
                            </div>
                            <div class="col-lg-3 col-sm-6 tpad15">
                                <button class="voessen__btn-border w-100">ОТМЕНИТЬ</button>
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
</body>
</html>
