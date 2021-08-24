<?php
include_once __DIR__ . '/inc/header.php'
?>
<div class="music__box-lk">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="music__box-lk__wrap">
                <div class="music__box-lk__title">Личный кабинет</div>
                <div class="music__box-lk__wrap__row">
                    <div class="music__box-lk__col-left">
                        <form action="" class="music__form">
                            <div class="music__form__box-inp">
                                <label>E-mail*</label>
                                <input type="email" required name="fio" class="music__form__inp">
                            </div>
                            <div class="music__form__box-inp">
                                <label>Пароль*</label>
                                <div class="music__form__box-inp__pass">
                                    <input type="password" required name="pass" class="music__form__inp">
                                    <div onclick="passOpen(this)" class="music__form__box-inp__show-pass">
                                        <svg width="25" height="19">
                                            <use xlink:href="#svg-pass"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <div class="d-flex justify-content-between music__form__box-inp__foot">
                                    <label class="music__checkbox">
                                        <input type="checkbox" value="1" name="a">
                                        <span class="music__checkbox__caption">
                                            Запомнить меня
                                        </span>
                                    </label>
                                    <a href="" class="music__link">Восстановить пароль</a>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <input type="submit" class="music__form__submit" value="ВОЙТИ">
                            </div>
                            <div class="music__text text-center">
                                <a href="">Зарегистрироваться</a>
                            </div>
                        </form>
                    </div>

                    <div class="music__box-lk__col-right">
                        <div class="music__box-lk__col-right__col1">
                            или
                        </div>
                        <div class="music__box-lk__col-right__col2">
                            Войти как пользователь
                            <ul class="nav d-block nav--soc-reg">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>
