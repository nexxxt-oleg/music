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
    <div class="voessen__full-banner" style="background-image: url(./img/bg-gaz4.jpg)">
        <div class="container">
            <div class="voessen__full-banner__wrap">
                <ul class="nav voessen__breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    <li><a href="">Газовые смеси</a></li>
                    <li><span>Эксимерные газовые смеси для офтальмологических лазеров</span></li>
                </ul>
                <div class="voessen__full-banner__wrap__desc row">
                    <div class="voessen__text voessen__text--white col-xl-8">
                        <h1>Эксимерные газовые смеси для<br>
                            офтальмологических лазеров</h1>
                        <p>ООО «Фёссен Эм Ай И» является ведущим поставщиком газовых смесей, используемых в самых
                            различных отраслях промышленности и научных исследований.</p>

                        <p>В нашей линейке в том числе смеси для эксимерных лазеров: COMPexPro 102, COMPexPro110,
                            COMPexPro 201, COMPexPro 205, SCHWIND AMARIS, NIDEK, WaveLight Allegretto Wave Eye-Q, STAR
                            S4 IR®, МикроСкан Визум, а так же других лазеров, в том числе промышленного применения.</p>
                        <div class="tpad15">
                            <a href="/" class="voessen__btn-green">ОСТАВИТЬ ЗАЯВКУ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="voessen__text fpad30">
            <p>Газы для эксимерных лазеров (премиксы и буферы) — это газовые смеси, являющиеся рабочим телом эксимерного
                лазера. Ими заправляют лазеры, используемые в офтальмологии, косметической медицине, в полупроводниковом
                производстве и научных исследованиях. В состав премикса могут входить гелий, неон, аргон, криптон,
                ксенон, фтор в различных концентрациях и сочетаниях, а также хлороводород и водород. В состав буфера
                входят только инертные газы. Для каждой модели лазера обычно используются смеси уникального процентного
                состава, определяемого производителем конкретной лазерной установки. Поскольку концентрации исходных
                газов в эксимерных газовых смесях могут быть любыми, в зависимости от требований производителя лазера
                или спецификации клиента, эксимерные смеси изготавливаются по заявкам.</p>
        </div>
        <table class="table table-hover voessen__table voessen__table--mob">
            <thead>
            <tr>
                <th>Лазер</th>
                <th>Тип</th>
                <th>Длина волны</th>
                <th>Состав смеси</th>
                <th class="not-bg"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class="voessen__table__label-mob">Лазер</span>
                    <a href="">COMPexPro 102</a></td>
                <td>
                    <span class="voessen__table__label-mob">Тип</span>
                    СXeCl</td>
                <td>
                    <span class="voessen__table__label-mob">Длина волны</span>
                    308 нм</td>
                <td>
                    <span class="voessen__table__label-mob">Состав смеси</span>
                    HCl + H2 + He + Xe + Ne</td>
                <td class="td-btn"><a href="" class="voessen__btn-green voessen__btn-green--min">Посмотреть</a></td>
            </tr>
            <tr>
                <td>
                    <span class="voessen__table__label-mob">Лазер</span>
                    <a href="">COMPexPro 102</a></td>
                <td>
                    <span class="voessen__table__label-mob">Тип</span>
                    СXeCl</td>
                <td>
                    <span class="voessen__table__label-mob">Длина волны</span>
                    308 нм</td>
                <td>
                    <span class="voessen__table__label-mob">Состав смеси</span>
                    HCl + H2 + He + Xe + Ne</td>
                <td class="td-btn"><a href="" class="voessen__btn-green voessen__btn-green--min">Посмотреть</a></td>
            </tr>
            <tr>
                <td>
                    <span class="voessen__table__label-mob">Лазер</span>
                    <a href="">COMPexPro 102</a></td>
                <td>
                    <span class="voessen__table__label-mob">Тип</span>
                    СXeCl</td>
                <td><span class="voessen__table__label-mob">Длина волны</span>
                    308 нм</td>
                <td><span class="voessen__table__label-mob">Состав смеси</span>
                    HCl + H2 + He + Xe + Ne</td>
                <td class="td-btn"><a href="" class="voessen__btn-green voessen__btn-green--min">Посмотреть</a></td>
            </tr>
            <tr>
                <td><span class="voessen__table__label-mob">Лазер</span>
                    <a href="">COMPexPro 102</a></td>
                <td><span class="voessen__table__label-mob">Тип</span>СXeCl</td>
                <td><span class="voessen__table__label-mob">Длина волны</span>308 нм</td>
                <td><span class="voessen__table__label-mob">Состав смеси</span>HCl + H2 + He + Xe + Ne</td>
                <td class="td-btn"><a href="" class="voessen__btn-green voessen__btn-green--min">Посмотреть</a></td>
            </tr>
            </tbody>
        </table>


    </div>

    <?php
    include_once __DIR__ . '/inc/callback.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>