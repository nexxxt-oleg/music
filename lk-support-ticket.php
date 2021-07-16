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

            <div class="voessen__personal-account__ticket">
                <div class="voessen__personal-account__ticket__header">
                    <div class="voessen__personal-account__ticket__number">
                        № 1000
                    </div>
                    <div class="voessen__personal-account__ticket__label">
                        Заголовок обращения
                    </div>
                    <ul class="voessen__form__edit-nav nav">
                        <li>
                            <a href="">
                                <svg width="12" height="12">
                                    <use xlink:href="#edit-del"></use>
                                </svg>
                                <span>Закрыть</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="voessen__personal-account__ticket__body">
                    <div id="jsScrollTicket">
                        <ul class="nav d-block voessen__personal-account__ticket__list">
                            <li class="voessen__personal-account__ticket__message">

                                <div class="voessen__personal-account__ticket__message__ava">
                                    <img src="./img/ava1.png" alt="">
                                </div>
                                <div class="voessen__personal-account__ticket__message__text voessen__message">
                                    <div class="voessen__message__header">
                                        <h3>Иванов Иван Иванович</h3>
                                        <span class="voessen__message__date">01.11.2020   15:00:32</span>
                                    </div>
                                    <div class="voessen__message__text">
                                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                                        Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала
                                        XVI века. В то время некий безымянный печатник создал большую коллекцию
                                        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                                    </div>
                                    <div class="voessen__message__footer">
                                        <div class="voessen__message__file">
                                            <svg width="18" height="24">
                                                <use xlink:href="#svg-file"></use>
                                            </svg>
                                            <a href="" download="">Договор № 1000-5000-5000-470</a>
                                            <span class="voessen__message__file__size">120 кб</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="voessen__personal-account__ticket__message">

                                <div class="voessen__personal-account__ticket__message__ava">
                                    <img src="./img/ava2.png" alt="">
                                </div>
                                <div class="voessen__personal-account__ticket__message__text voessen__message">
                                    <div class="voessen__message__header">
                                        <h3>Иванов Иван Иванович</h3>
                                        <span class="voessen__message__date">01.11.2020   15:00:32</span>
                                    </div>
                                    <div class="voessen__message__text">
                                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                                        Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала
                                        XVI века. В то время некий безымянный печатник создал большую коллекцию
                                        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                                    </div>
                                </div>
                            </li>


                            <li class="voessen__personal-account__ticket__message">

                                <div class="voessen__personal-account__ticket__message__ava">
                                    <img src="./img/ava1.png" alt="">
                                </div>
                                <div class="voessen__personal-account__ticket__message__text voessen__message">
                                    <div class="voessen__message__header">
                                        <h3>Иванов Иван Иванович</h3>
                                        <span class="voessen__message__date">01.11.2020   15:00:32</span>
                                    </div>
                                    <div class="voessen__message__text">
                                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                                        Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала
                                        XVI века. В то время некий безымянный печатник создал большую коллекцию
                                        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                                    </div>
                                    <div class="voessen__message__footer">
                                        <div class="voessen__message__file">
                                            <a href="" download="">Договор № 1000-5000-5000-470</a>
                                            <span class="voessen__message__file__size">120 кб</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="voessen__personal-account__ticket__footer">
                    <form action="">
                        <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                            <textarea class="form-control" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-8 col-xl-9">
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
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <buttom class="voessen__btn-green w-100" type="submit">Отправить</buttom>
                            </div>
                        </div>
                    </form>
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
