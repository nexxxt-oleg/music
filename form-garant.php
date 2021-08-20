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
                        <li><span>Заявка по гарантии<</span></li>
                    </ul>
                </div>
                <header class="d-flex justify-content-between music__page__header">
                    <h1 class="music__page__title">Заявка по гарантии</h1>
                    <ul class="nav music__menu-head">
                        <li><a href="">Гарантия</a></li>
                        <li><a href="" class="is_active">Заявка по гарантии</a></li>
                        <li><a href="">Возврат</a></li>
                    </ul>
                </header>

                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 fpad30">
                        <form action="" class="music__form music__form--shadow">
                            <div class="music__form__box-inp">
                                <label>Тип обращения*</label>
                                <select name="type" required class="form-select music__form__inp">
                                    <option>Гарантийное обращение</option>
                                    <option>Гарантийное обращение</option>
                                    <option>Гарантийное обращение</option>
                                </select>
                            </div>
                            <div class="music__form__box-inp">
                                <label>ФИО*</label>
                                <input type="text" required name="fio" class="music__form__inp">
                                <div class="music__form__box-inp__example">Например, Иванов Иван Иванович</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="music__form__box-inp">
                                        <label>Почта*</label>
                                        <input type="email" required name="email" class="music__form__inp">
                                        <div class="music__form__box-inp__example">Укажите актуальный email</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="music__form__box-inp">
                                        <label>Телефон*</label>
                                        <input type="tel" required name="tel" class="music__form__inp">
                                        <div class="music__form__box-inp__example">+7-XXX-XXX-XX-XX</div>
                                    </div>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <label>Модель*</label>
                                <input type="text" required name="model" class="music__form__inp">
                                <div class="music__form__box-inp__example">Укажите полное наименование устройства</div>
                            </div>
                            <div class="music__form__box-inp">
                                <label>Место приобретения*</label>
                                <input type="text" required name="vozvrat" class="music__form__inp">
                                <div class="music__form__box-inp__example">Укажите название магазина или сайта, где
                                    осуществлялась покупка
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="music__form__box-inp">
                                        <label>Номер заказа</label>
                                        <input type="text" required name="number" class="music__form__inp">
                                        <div class="music__form__box-inp__example">Укажите номер заказа, если товар был
                                            приобретен на нашем сайте
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="music__form__box-inp">
                                        <label>Дата приобретения*</label>
                                        <input type="text" required name="data" class="music__form__inp">
                                        <div class="music__form__box-inp__example">Укажите дату покупки товара</div>
                                    </div>
                                </div>
                            </div>
                            <div class="music__form__box-inp">
                                <label>Серийный номер</label>
                                <input type="text" required name="seriya" class="music__form__inp">
                                <div class="music__form__box-inp__example">Укажите серийный номер устройства</div>
                            </div>
                            <div class="music__form__box-inp">
                                <label>Чем мы можем вам помочь?*</label>
                                <textarea name="help" class="music__form__inp"></textarea>
                                <div class="music__form__box-inp__example">Подробно опишите ваш запрос или проблему
                                </div>
                            </div>

                            <div class="music__form__file-desc fpad15">
                                <p><b>Приложите файлы</b></p>

                                <p>По возможности приложите дополнительную информацию — фото и видео, выявляющие
                                    проблему,
                                    чек с подтверждением о покупке, скриншоты и т. п.</p>
                            </div>
                            <div class="music__form__box-inp">
                                <div class="d-flex align-items-center">
                                    <div class="music__form__file-upload">
                                        <label>
                                            <input type="file" name="file" multiple
                                                   id="uploaded-file">
                                            Загрузить
                                        </label>
                                    </div>
                                    <div class="music__form__box-inp__example pt-0">
                                        До 20 файлов (общий размер — до 20 МБ).
                                    </div>

                                </div>
                            </div>

                            <div class="music__form__box-inp">
                                <div class="row align-items-end">
                                    <div class="col-lg-6">
                                        <label>Введите капчу*</label>
                                        <input type="text" required name="capa" class="music__form__inp">
                                    </div>
                                    <div class="col-lg-6 pb-2">
                                        <img src="./img/capa.jpg" alt="" class="music__form__capa-img">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center tpad15">
                                <div class="col-lg-6 col-xl-5">
                                    <div class="music__form__box-inp">
                                        <input type="submit" class="music__form__submit" value="ОТПРАВИТЬ">
                                    </div>
                                </div>
                            </div>
                        </form>
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