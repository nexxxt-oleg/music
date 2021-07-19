<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>
    <div class="voessen__full-banner voessen__full-banner--konstruct" style="background-image: url(./img/bg-konstr.jpg)">
        <div class="container">
            <div class="voessen__full-banner__wrap">
                <ul class="nav voessen__breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    <li><a href="">Газовые смеси</a></li>
                    <li><a href="">Поверочные газовые смеси ГСО-ПГС, калибровочные газовые смеси</a></li>
                    <li><span>Конструктор ГСО-ПГС</span></li>
                </ul>
                <div class="row align-items-center flex-grow-1">
                    <div class="voessen__text voessen__text--white col-xl-8 col-lg-9 fpad30">
                        <h1>Конструктор ГСО-ПГС</h1>
                        <p>Хотите сами создать нужную смесь?</p>

                        <p>Воспользуйтесь удобной формой заказа поверочных газовых смесей — нажмите на зеленую кнопку «Создать смесь», выберите компоненты, концентрацию с единицей измерения, укажите газ–разбавитель, объём баллона, количество баллонов, и есть ли баллоны на обмен, и нажмите кнопку «Отправить».</p>

                        <p>Если в смеси предусмотрено несколько компонентов, нажмите «Добавить компонент».</p>

                        <p>После того, как создадите баллон с желаемой смесью, нажмите «Готово», чтобы перейти к добавлению следующего баллона или к отправке заявке на производство.</p>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-flex justify-content-center">
                        <button class="voessen__btn-green voessen__btn-green--shadow">Создать смесь</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container voessen__z100">
        <div class="voessen__konstruct">
            <div class="voessen__konstruct__header">
                <h3>Смесь №1</h3>
                <a href="">
                    <svg width="12" height="12">
                        <use xlink:href="#svg-close"></use>
                    </svg>
                    Удалить смесь
                </a>
            </div>
            <div class="voessen__konstruct__body">
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <label class="voessen__konstruct__label">Определяемый компонент</label>
                        <select name="1" class="form-select">
                            <option>Компонент</option>
                            <option>Компонент2</option>
                        </select>
                    </div>
                    <div class="col col-w120">
                        <label class="voessen__konstruct__label">Концентрация</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col col-w100">
                        <label class="voessen__konstruct__label">Ед. изм.</label>
                        <select name="2" class="form-select">
                            <option>% НКПР</option>
                            <option>% НКПР2</option>
                        </select>
                    </div>
                    <div class="col col-w200">
                        <label class="voessen__konstruct__label">Газ-разбавитель</label>
                        <select name="3" class="form-select">
                            <option>Компонент</option>
                            <option>Компонент2</option>
                        </select>
                    </div>
                    <div class="col col-w-min">
                        <label class="voessen__konstruct__label">Условия по<br>
                            баллонам</label>
                        <select name="4" class="form-select">
                            <option>Покупка</option>
                            <option>Аренда</option>
                        </select>
                    </div>
                    <div class="col col-w-min">
                        <label class="voessen__konstruct__label">Баллон</label>
                        <select name="5" class="form-select">
                            <option>40-50 л</option>
                            <option>50-60 л</option>
                        </select>
                    </div>
                    <div class="col col-w-min">
                        <label class="voessen__konstruct__label">Кол-во</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <label class="voessen__konstruct__label">Определяемый компонент</label>
                        <select name="1" class="form-select">
                            <option>Компонент</option>
                            <option>Компонент2</option>
                        </select>
                    </div>
                    <div class="col col-w120">
                        <label class="voessen__konstruct__label">Концентрация</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <a href="" class="voessen__konstruct__del">
                            <svg width="12" height="12">
                                <use xlink:href="#svg-close"></use>
                            </svg>
                            Удалить компонент
                        </a>
                    </div>
                </div>
                <div class="row tpad30">
                    <div class="col-lg-3 col-md-6 col-12 fpad30">
                        <button class="voessen__btn-blue w-100"><span>Добавить компонент</span></button>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fpad30">
                        <button class="voessen__btn-blue w-100"><span>Готово</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 fpad30">
                        <button class="voessen__btn-green-a w-100"><span>В корзину</span></button>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fpad30">
                        <button class="voessen__btn-green-a w-100"><span>Отправить заявку на E-mail</span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="fpad60">
            <?php
            include_once __DIR__ . '/inc/banner1.php'
            ?>
        </div>
    </div>
    <?php
    include_once __DIR__ . '/inc/subscribe.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>
