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
                    <h2>Настройки</h2>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="" title="Редактировать личные данные">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-edit"></use>
                                </svg>
                                <span>Редактировать личные данные</span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Контактные лица">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-users"></use>
                                </svg>
                                <span>Контактные лица</span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Адреса доставки">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-adr"></use>
                                </svg>
                                <span>Адреса доставки</span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Изменить пароль">
                                <svg width="18" height="18">
                                    <use xlink:href="#edit-pass"></use>
                                </svg>
                                <span>Изменить пароль</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="voessen__form__group">
                    <div class="voessen__form__group__header">
                        <h3>Контактное лицо</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Фамилия *</label>
                                <input type="text" class="form-control" required="" readonly value="Иванов">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Имя *</label>
                                <input type="text" class="form-control" required="" readonly value="Иванов">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Отчество *</label>
                                <input type="text" class="form-control" required="" readonly value="Иванов">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">E-mail *</label>
                                <input type="email" class="form-control" required="" readonly
                                       value="ivanov@mail.ru">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Номер телефона *</label>
                                <input type="tel" class="form-control" required="" readonly
                                       value="+7 (495) 555-44-33">
                            </div>
                        </div>
                    </div>

                    <div class="voessen__form__group__header">
                        <h3>Информация об организации</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">ИНН*</label>
                                <input type="text" class="form-control" readonly value="1111">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">БИК*</label>
                                <input type="text" class="form-control" readonly value="222">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Номер расчетного счета*</label>
                                <input type="text" class="form-control" readonly value="333">
                            </div>
                        </div>
                    </div>
                    <h3 class="h3">Автоматически заполненная информация</h3>
                    <p>Проверьте, пожалуйста, правильность всех данных</p>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label class="form-label">Краткое наименование  *</label>
                        <input type="text" class="form-control" readonly required value="ООО «Фёссен Эм Ай И»">
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label class="form-label">Полное наименование  *</label>
                        <input type="text" class="form-control" readonly required value="Общество с ограниченной ответственностью «Фёссен Эм Ай И»">
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">ОГРН  *</label>
                                <input type="text" class="form-control" readonly required value="1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">КПП  *</label>
                                <input type="text" class="form-control" readonly required value="1">
                            </div>
                        </div>
                    </div>

                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label class="form-label">Почтовый адрес  *</label>
                        <input type="text" class="form-control" readonly value="1111">
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label class="form-label">Юридический адрес  *</label>
                        <input type="text" class="form-control" readonly value="1111">
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label class="form-label">Фактический адрес  *</label>
                        <input type="text" class="form-control" readonly value="1111">
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">ФИО руководителя организации *</label>
                                <input type="text" class="form-control" readonly required value="1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Должность руководителя организации *</label>
                                <input type="text" class="form-control" readonly required value="1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">E-mail организации *</label>
                                <input type="email" class="form-control" readonly required value="nn@mail.ru">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                                <label class="form-label">Телефон организации *</label>
                                <input type="text" class="form-control" readonly required value="+1 1231 123333">
                            </div>
                        </div>
                    </div>

                    <div class="voessen__form__group__footer">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 tpad15">
                                <button class="voessen__btn-green w-100">РЕДАКТИРОВАТЬ</button>
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
