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
                            <li><span>Личные данные</span></li>
                        </ul>
                    </div>
                    <h1 class="music__page__title">Личные данные</h1>
                    <?php
                    include_once __DIR__ . '/inc/lk-top__nav.php'
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container tpad50 fpad50">
        <div class="music__form__box-inp">
            <label>Фамилия Имя Отчество*</label>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <input type="text" readonly required name="fio" class="music__form__inp" value="Иванов Иван Иванович">
                </div>
                <div class="col-lg-6 col-xl-5">
                    <span class="music__form__desc">Ваше имя необходимо для того, чтобы мы знали с кем имеем дело))</span>
                </div>
            </div>
        </div>
        <div class="music__form__box-inp">
            <label>E-mail*</label>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <input type="email" required name="email" class="music__form__inp">
                </div>
                <div class="col-lg-6 col-xl-5">
                        <span class="music__form__desc">Является логином для входа на сайт. Также на него будут приходить
уведомления о статусах заказа</span>
                </div>
            </div>
        </div>
        <div class="music__form__box-inp">
            <label>Телефон*</label>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <input type="tel" required name="tel" class="music__form__inp">
                </div>
                <div class="col-lg-6 col-xl-5">
                    <span class="music__form__desc">Контактный телефон нужен для уточнения деталей заказа</span>
                </div>
            </div>
        </div>
        <div class="music__form__box-inp">
            <label>Новый пароль*</label>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <input type="password" required name="pass" class="music__form__inp">
                </div>
                <div class="col-lg-6 col-xl-5">
                    <span class="music__form__desc">Пароль должен быть не менее 6 символов длиной</span>
                </div>
            </div>
        </div>
        <div class="music__form__box-inp">
            <label>Подтверждение пароля*</label>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <input type="password" required name="pass2" class="music__form__inp">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="music__form__box-inp">
                    <input type="submit" class="music__form__submit" value="РЕДАКТИРОВАТЬ">
                </div>
            </div>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>