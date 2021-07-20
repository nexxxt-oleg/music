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
    <div class="container voessen__product">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="">Чистые газы в баллонах </a></li>
            <li><span>Поверочная газовая смесь в баллоне ГСО № 10524-2014</span></li>
        </ul>
        <header class="voessen__product__header voessen__title-box voessen__text">
            <h1>Поверочная газовая смесь в баллоне ГСО № 10524-2014</h1>
            <div class="voessen__title-box__col-link tpad15">
                <button
                        id="js-btn-clipboard"
                        class="voessen__ico-link"
                        data-clipboard-text="#example2">
                    <svg width="12" height="12">
                        <use xlink:href="#svg-link"></use>
                    </svg>
                    Скопировать ссылку
                </button>
            </div>
        </header>
        <div class="row voessen__product__body">
            <div class="col-lg-4 fpad30">
                <div class="voessen__product__col-pic">
                    <div class="voessen__product__img">
                        <a href="/img/lot1@2.jpg" class="voessen__product__col-pic__item" data-fancybox="gallery">
                            <img
                                    src="./img/lot1.jpg"
                                    data-src="./img/lot1.jpg"
                                    data-srcset="./img/lot1@2.jpg 2x"
                                    alt=""
                            />
                        </a>
                    </div>
                    <a href="" class="voessen__item-product__fav">
                        <svg width="24" height="23">
                            <use xlink:href="#svg-fav"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 fpad30">
                <ul class="nav flex-column voessen__product__specifications">
                    <li>
                        <div class="voessen__product__specifications__label">Код:</div>
                        <div class="voessen__product__specifications__value">16652408–2016</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Артикул:</div>
                        <div class="voessen__product__specifications__value">16652408–2016</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Стандарт:</div>
                        <div class="voessen__product__specifications__value">ТУ 2114–001–16652408–2016</div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Аналогичные стандарты:</div>
                        <div class="voessen__product__specifications__value">
                            ТУ 2114–001–16652408–2017<br>
                            ТУ 2114–001–16652408–2018<br>
                            ТУ 2114–001–16652408–2019<br>
                            ТУ 2114–001–16652408–2020<br>
                            ТУ 2114–001–16652408–2021
                        </div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Кодировка вещества:</div>
                        <div class="voessen__product__specifications__value">
                            CAS 7440–37–1<br>
                            UN 1006 (Сжатый)<br>
                            PubChem
                        </div>
                    </li>
                    <li>
                        <div class="voessen__product__specifications__label">Наличие на складе:</div>
                        <div class="voessen__product__specifications__value">Есть в наличие</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 fpad30">
                <div class="voessen__product__card-bay">
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Класс чистоты:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="voessen__product__har-select">
                                <select class="form-select form-select-sm" name="har1">
                                    <option value="1">Аргон нулевой</option>
                                    <option value="2">Аргон нулевой</option>
                                    <option value="3">Аргон нулевой</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Объем баллона:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="voessen__product__har-select">
                                <select class="form-select form-select-sm" name="har1">
                                    <option value="1">40 литров</option>
                                    <option value="2">41 литров</option>
                                    <option value="3">42 литров</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Давление в баллоне:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <span class="voessen__product__har-value">
                                14,7 МПа
                            </span>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Выберите условия по
                                баллонам:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="voessen__product__har-select">
                                <select class="form-select form-select-sm" name="har2">
                                    <option value="1">Обмен или наполнению</option>
                                    <option value="2">Обмен или наполн</option>
                                    <option value="3">Обмен или наполн</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row voessen__product__card-bay__row">
                        <div class="col-sm-6">
                            <label class="voessen__product__har-label">
                                Наличие обменных
                                баллонов:
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <span class="voessen__product__har-value">
                                Есть в полном объёме
                            </span>
                        </div>
                    </div>
                    <div class="voessen__product__card-bay__requirements">
                        <a href="" class="voessen__link">
                            <span>Требования к обменным баллонам</span>
                        </a>
                    </div>
                    <div class="voessen__item-product__price">
                        <span class="voessen__item-product__price__old-value">
                            26 091 <span class="b-rub">Р</span>
                        </span>
                        <span class="voessen__item-product__price__value">
                            28 990 <span class="b-rub">Р</span> / шт
                        </span>
                    </div>
                    <div class="row row--min">
                        <div class="col-6 col-sm-6 col-lg-5 voessen__item-product__col-count">
                            <div class="voessen__product__count-box">
                                <input type="text" value="1" readonly="" class="voessen__product__count-box__value"
                                       id="countProduct2">
                                <button class="voessen__product__count-box__nav voessen__product__count-box__nav--minus"
                                        onclick="countProduct('minus', 'countProduct2')">
                                </button>
                                <button class="voessen__product__count-box__nav voessen__product__count-box__nav--plus"
                                        onclick="countProduct('plus', 'countProduct2')">
                                </button>
                            </div>
                        </div>
                        <div class="d-lg-none col-3">
                            <a href="" class="voessen__item-product__fav-btn">
                                <svg width="24" height="23">
                                    <use xlink:href="#svg-fav"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-3 col-sm-3 col-lg-7 voessen__item-product__btn-bay">
                            <button class="btn-cart">
                                <svg class="btn-cart__icon" width="24" height="24">
                                    <use xlink:href="#svg-cart"></use>
                                </svg>
                                <span>В корзину</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="table-responsive table-responsive-lg voessen__product__table-list-product pb-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Класс чистоты</th>
                            <th>Чистота</th>
                            <th colspan="12" style="text-align: center">Примеси [ppm]</th>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>H<sub>2</sub>O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                            <td>H2O</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="">Аргон нулевой</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 5.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 6.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><a href="">Аргон 7.0</a></td>
                            <td>≥99.999%</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>≤2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex fpad50 align-items-center flex-wrap">
                    <span class="fonts18 fw-bold mr-10">Нужна помощь в выборе чистоты?</span>
                    <button class="voessen__btn-green">Получить консультацию</button>
                </div>
            </div>
        </div>
    </div>

    <div class="voessen__silver">
        <div class="container">
            <div class="col-12">
                <div class="voessen__tab-box">
                    <ul class="nav voessen__tab-box__header voessen__tab-box__header--product">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1">
                                Тип баллонов
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2">
                                Характеристика
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3">
                                Класс опасности
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab4">
                                Получение
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab5">
                                Применение
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab6">
                                Физические свойства
                            </a>
                        </li>
                    </ul>
                    <div class="voessen__tab-box__body voessen__tab-box__body--product">
                        <div class="tab-content">
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion" data-toggle="collapse"
                                        data-target="#tab1">
                                    Тип баллонов
                                </button>
                                <div class="tab-pane fade show active accordion-collapse collapse" id="tab1">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <p>Технический газ требователен к условиям хранения и эксплуатации, и если он не
                                            используется регулярно, такое оборудование станет балластом в бюджете
                                            организации. Кроме этого, газовые баллоны должны храниться с соблюдением
                                            норм и
                                            правил, что приводит к необходимости организации дополнительного склада.
                                            Поэтому, если газовая сварка используется в организации нечасто, снижение
                                            расходов станет лучшим финансовым решением. Для внутреннего пользования
                                            подойдет
                                            аренда на кратковременный период, которую предлагает компания ООО «Фёссен Эм
                                            Ай
                                            И».</p>
                                    </div>
                                </div>
                            </div>
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion collapsed"
                                        data-toggle="collapse" data-target="#tab2">
                                    Характеристика
                                </button>
                                <div class="tab-pane fade accordion-collapse collapse" id="tab2">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <p>При нормальных условиях — газ без цвета и запаха. Инертен. При высокой
                                            концентрации в
                                            воздухе вызывает удушье. Тяжелее воздуха.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion collapsed"
                                        data-toggle="collapse" data-target="#tab3">
                                    Класс опасности
                                </button>
                                <div class="tab-pane fade accordion-collapse collapse" id="tab3">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <div class="voessen__text">
                                            <p class="fonts18 fw-bold">Международная маркировка в соответствии с СГС
                                                (GHS)</p>
                                            <p>Сигнальное слово: ОСТОРОЖНО</p>
                                            <div class="voessen__box-ifo-pic">
                                                <div class="voessen__box-ifo-pic__img">
                                                    <img src="./img/d1.jpg" alt="">
                                                </div>
                                                <div class="voessen__box-ifo-pic__desc">
                                                    H–фразы:
                                                    <br>Сжатый газ → H280 — Содержит газ под давлением; при нагревании
                                                    может
                                                    произойти взрыв.
                                                    <br>Криогенная жидкость → H281 — Содержит охлаждённый газ; может
                                                    вызывать
                                                    криогенные ожоги или увечья.
                                                </div>
                                            </div>
                                            <div class="voessen__box-ifo-pic">
                                                <div class="voessen__box-ifo-pic__img">
                                                    <img src="./img/t2.jpg" alt="">
                                                </div>
                                                <div class="voessen__box-ifo-pic__desc">
                                                    ADR Класс: 2
                                                    <br>1A (Сжатый)
                                                    <br>3A (Криогенный)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion collapsed"
                                        data-toggle="collapse" data-target="#tab4">
                                    Получение
                                </button>
                                <div class="tab-pane fade accordion-collapse collapse" id="tab4">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <p>Чистый аргон получают в промышленном масштабе путем сжижения и последующего
                                            разделения жидкого воздуха. Для получения чистого аргона берется сырой аргон
                                            из
                                            воздухоразделительной установки, содержащий до 5% кислорода, затем
                                            дополнительно
                                            очищается от кислорода во вторичной колонне методом «противодавления». Особо
                                            чистым
                                            аргон становится в процессе дополнительной очистки на специальном
                                            оборудовании.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion collapsed"
                                        data-toggle="collapse" data-target="#tab5">
                                    Применение
                                </button>
                                <div class="tab-pane fade accordion-collapse collapse" id="tab5">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <ul class="voessen__application-list">
                                            <li>В газовой хроматографии в качестве газа–носителя.</li>
                                            <li>При плазменном травлении, ионной имплантации.</li>
                                            <li>В качестве инертной подушки при выращивании кристаллов.</li>
                                            <li>В спектроскопии и масс–спектрометрии с индуктивно-связанной плазмой .
                                            </li>
                                            <li>В атомно-абсорбционной спектрометрии в качестве защитного газа для
                                                графита.
                                            </li>
                                            <li>В качестве компонента специальных сварочных смесей или в чистом виде в
                                                сварочных
                                                процессах для защиты сварочной ванны, корня шва.
                                            </li>
                                            <li>В лампах, фосфоресцирующих трубках.</li>
                                            <li>В медицине при аргоноплазменной коагуляции.</li>
                                            <li>В смеси с фтором для эксимерных лазеров.</li>
                                            <li>В качестве продувочного газа в лабораториях.</li>
                                            <li>Как компонент поверочных газовых смесей.</li>
                                        </ul>
                                        <ul class="nav oessen__application-ico">
                                            <li>
                                                <img src="./img/s1.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s2.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s3.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s4.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s5.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s6.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s7.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s8.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s9.svg" alt="" width="50" height="72">
                                            </li>

                                            <li>
                                                <img src="./img/s10.svg" alt="" width="50" height="72">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="voessen__tab-box__body__item">
                                <button class="accordion-button voessen__tab-box__mob-accordion collapsed"
                                        data-toggle="collapse" data-target="#tab6">
                                    Физические свойства
                                </button>
                                <div class="tab-pane fade accordion-collapse collapse" id="tab6">
                                    <div class="voessen__tab-box__body__item__inner">
                                        <div class="table-responsive table-responsive-lg voessen__product__table-list-product">
                                            <table class="table table-hover voessen__table">
                                                <thead>
                                                <tr>
                                                    <th>Молекулярная масса</th>
                                                    <th></th>
                                                    <th class="text-center">39.948</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Точка кипения</td>
                                                    <td>при 1.013 бар [°C]</td>
                                                    <td class="text-center">-185.87</td>
                                                    <td>при 14.5 psi [°F]</td>
                                                    <td class="text-center">-352.55</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row fpad15 align-items-center voessen__header-caption">
                <div class="col-lg-12 voessen__header-caption__col-title">
                    <h2 class="h2">Вам может потребоваться</h2>
                </div>
            </div>
            <?php
            include __DIR__ . '/inc/slider.php';
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