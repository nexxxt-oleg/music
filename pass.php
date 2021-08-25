<?php
include_once __DIR__ . '/inc/header.php'
?>
<div class="music__box-lk">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="music__box-lk__wrap music__box-lk__wrap--min">
                <div class="music__box-lk__title">Восстановить пароль</div>

                <form action="" class="music__form">
                    <div class="music__form__text">
                        Укажите E-mail, который Вы использовали для регистрации. На указанный e-mail будет отправлено письмо со ссылкой для сброса пароля.
                    </div>
                    <div class="music__form__box-inp">
                        <label>E-mail*</label>
                        <input type="email" required name="email" class="music__form__inp">
                    </div>

                    <div class="music__form__box-inp">
                        <input type="submit" class="music__form__submit" value="ВОЙТИ">
                    </div>
                    <div class="music__text d-flex justify-content-between">
                        <a href="">Вход</a>
                        <a href="">Регистрация</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>
