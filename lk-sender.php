<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="lk-top">
        <div class="container">
            <div class="row">
                <div class="col-12 music__page">
                    <div class="music__page__breadcrumbs">
                        <ul class="nav">
                            <li><a href="">Главная</a></li>
                            <li><a href=""> Личный кабинет</a></li>
                            <li><span>Рассылки</span></li>
                        </ul>
                    </div>
                    <h1 class="music__page__title">Рассылки</h1>
                    <?php
                    include_once __DIR__ . '/inc/lk-top__nav.php'
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container tpad50 fpad70">
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <label class="music__lk-sender">
                    <input type="checkbox" checked value="1" name="news">
                    <span>Новинки каталога</span>
                </label>
                <label class="music__lk-sender">
                    <input type="checkbox" checked value="2" name="action">
                    <span>Скидки и промоакции</span>
                </label>
                <label class="music__lk-sender">
                    <input type="checkbox" value="3" name="art">
                    <span>Новости и статьи</span>
                </label>
            </div>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>