<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <div class="row">
            <div class="col-12 music__page">
                <div class="music__page__breadcrumbs">
                    <ul class="nav">
                        <li><a href="">Главная</a></li>
                        <li><span>Страница не найдена</span></li>
                    </ul>
                </div>
                <div class="row tpad50 align-items-center">
                    <div class="col-lg-6">
                        <div class="music__text music__404">
                            <h1>ОШИБКА 404</h1>
                            <div class="music__desc-404">
                                Ой! кажется мы заблудились.<br>
                                Вернуться обратно?
                            </div>
                            <a href="" class="music__form__submit">ВОзвращаемся</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img
                                src="./img/404.jpg"
                                data-src="./img/404.jpg"
                                data-srcset="./img/404@2.jpg 2x"
                                alt=""
                        />
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