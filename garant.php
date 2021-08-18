<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <div class="row">
            <div class="col-12 music__page">
                <div class="music__page__breadcrumbs">
                    <ul class="nav">
                        <li><a href="">Главная</a></li>
                        <li><a href="">Гарантия / Возврат </a></li>
                        <li><span>Гарантия</span></li>
                    </ul>
                </div>
                <header class="d-flex justify-content-between music__page__header">
                    <h1 class="music__page__title">Гарантия</h1>
                    <ul class="nav music__menu-head">
                        <li><a href="" class="is_active">Гарантия</a></li>
                        <li><a href="">Заявка по гарантии</a></li>
                        <li><a href="">Возврат</a></li>
                    </ul>
                </header>
                <div class="border-bottom music__text fpad50">
                    <p class="fonts-18"><b>Благодарим вас за покупку в интернет-магазине Musicroom.ru!</b></p>
                    <p>Практически на всю продукцию, за исключением комплектующих, установлен гарантийный срок 1 год с
                        даты покупки.</p>
                    <p>Просьба сохранять кассовый чек на покупку до окончания гарантийного срока.</p>
                    <p>Если в течении гарантийного срока устройство вышло из строя по причине заводского брака, то
                        устройство подлежит гарантийному ремонту, а в случае невозможности ремонта – замене на новое
                        аналогичное изделие.</p>
                </div>
                <div class="border-bottom tpad50 music__text">
                    <h2 class="text-uppercase">ЧТО ДЕЛАТЬ ПРИ ВОЗНИКНОВЕНИИ ГАРАНТИЙНОГО СЛУЧАЯ?</h2>
                    <div class="row">
                        <div class="col-lg-8">


                        </div>
                        <div class="col-lg-4">
                            <div class="music__text__alert">
                                <div class="music__text__alert__inner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="fpad70 tpad70">
        <?php
        include __DIR__ . '/inc/callback.php';
        ?>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>