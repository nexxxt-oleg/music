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
                        <li><span>Возврат</span></li>
                    </ul>
                </div>
                <header class="d-flex justify-content-between music__page__header">
                    <h1 class="music__page__title">Возврат</h1>
                    <ul class="nav music__menu-head">
                        <li><a href="">Гарантия</a></li>
                        <li><a href="">Заявка по гарантии</a></li>
                        <li><a href="" class="is_active">Возврат</a></li>
                    </ul>
                </header>
                <div class="border-bottom ">
                    <div class="row">
                        <div class="col-lg-6 music__text fpad50">
                            <h2 class="text-uppercase">Товары надлежащего качества</h2>
                            <p>Если вы по каким-то причинам хотите вернуть товар, при этом с ним все хорошо, вы можете это сделать в течение 7 дней с момента получения.</p>
                            <br>
                            <p>Возврат денежных средств осуществляется после возврата товара в магазин и его осмотра на предмет повреждений, а также сохранности товарного вида. Обращаем ваше внимание, что стоимость доставки в таком случае не возвращается.</p>
                            <br>
                            <p>Для осуществления возврата вы можете связаться с магазином в чате, по телефону 8-800-700-58-29 (звонок бесплатный), почте hi@musicroom.ru или заполнить короткую форму.</p>
                        </div>
                        <div class="col-lg-6 fpad50">
                            <form action="" class="music__form music__form--shadow">
                                <div class="music__form__box-inp">
                                    <label>ФИО*</label>
                                    <input type="text" required name="fio" class="music__form__inp">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="music__form__box-inp">
                                            <label>E-mail*</label>
                                            <input type="email" required name="email" class="music__form__inp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="music__form__box-inp">
                                            <label>Номер телефона*</label>
                                            <input type="tel" required name="tel" class="music__form__inp">
                                        </div>
                                    </div>
                                </div>
                                <div class="music__form__box-inp">
                                    <label>Номер заказа*</label>
                                    <input type="text" required name="number" class="music__form__inp">
                                </div>
                                <div class="music__form__box-inp">
                                    <label>Причина возврата*</label>
                                    <input type="text" required name="vozvrat" class="music__form__inp">
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="music__form__box-inp">
                                            <span class="music__form__ps">
                                                Нажимая на кнопку “Отправить”, я принимаю условия <a href="" target="_blank">Политики конфиденциальности</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="music__form__box-inp">
                                            <input type="submit" class="music__form__submit" value="ОТПРАВИТЬ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="border-bottom tpad50 music__text">
                    <h2 class="text-uppercase">Товары ненадлежащего качества</h2>
                    <div class="row">
                        <div class="col-lg-6 fpad50">
                            Если вы приобрели товар и заметили, что с ним что-то не так, Вам необходимо обратиться в гарантийный сервис, оставив заявку.
                            С вами свяжутся в течение 2-3 рабочих дней и решат ваш вопрос.
                        </div>
                        <div class="col-lg-4 col-xl-3 fpad50">
                            <a href="" class="w-100 music__form__submit">ОСТАВИТЬ ЗАЯВКУ</a>
                        </div>
                    </div>
                </div>
                <div class="tpad50 music__text">
                    <h2 class="text-uppercase">Отмена заказа</h2>
                    <div class="fpad30">
                        <p>В любой момент до получения заказа вы можете его отменить. Это можно сделать через «Личный Кабинет», вкладка «Мои заказы», или же связавшись с магазином любым удобным способом: по телефону <b>8-800-700-58-29</b> (звонок бесплатный), по почте <b>hi@musicroom.ru</b>, в чате. </p>
                    </div>
                    <div class="music__text__alert">
                        <div class="music__text__alert__inner">
                            <p class="fpad30"><b>Внимание!</b> В соответствии со ст. 18 Закона «О защите прав потребителей» собранная мебель надлежащего качества не подлежит замене или возврату (в том числе при желании корректировки форм, цвета или размеров).</p>
                            <p class="fpad30">При покупке кресел и столов мы настоятельно рекомендуем тщательно осмотреть и «примерить» все части до сборки. Сборку рекомендуется производить только после полного удовлетворения товаром потребителя.</p>
                            <p>В ходе сборки неизбежно нарушается товарный вид изделия, что делает невозможным его последующую продажу.</p>
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