<?php
include_once __DIR__ . '/inc/header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-12 music__page">
            <div class="music__page__breadcrumbs">
                <ul class="nav">
                    <li><a href="">Главная</a></li>
                    <li><a href="">Акции</a></li>
                    <li><span>Lenco объявляет CYBER-распродажу! Почему? Да потому что Киберпонедельник уже рядом!</span>
                    </li>
                </ul>
            </div>
            <article class="music__page__wrap music__box__item border-bottom">
                <figure class="music__page__picture music__box__item__img">
                    <img
                            src="./img/action2.jpg"
                            data-src="./img/action2.jpg"
                            data-srcset="./img/action2@2.jpg 2x"
                            alt=""
                    />
                </figure>
                <div class="row">
                    <div class="col-lg-4 text-center fpad30">
                        <span class="music__box__item__date">до 21 июля 2021</span>
                    </div>
                    <div class="col-lg-8 music__text">
                        <h1>Lenco объявляет CYBER-распродажу! Почему? Да потому что Киберпонедельник
                            уже рядом!</h1>
                        <p>Дарим скидку 20% на выделенный ассортимент виниловых проигрывателей на любой кошелёк и любой вкус, меломаны оценят.</p>
                        <p>Используйте промокод <b>MONDAY20</b> в корзине при покупке виниловых проигрывателей.</p>
                    </div>
                </div>
            </article>
            <div class="tpad70">
                <h2 class="music__caption">Товары Участвующие в акции</h2>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 fpad30">
                        <?php
                        include __DIR__ . '/inc/item-product.php';
                        ?>
                    </div>
                </div>

                <?php
                include __DIR__ . '/inc/pagination.php';
                ?>
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
