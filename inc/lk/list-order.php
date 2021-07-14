<div class="voessen__form voessen__form--pading voessen__form--mob">
    <div class="voessen__form__header">
        <h2>Мои заказы</h2>
    </div>
    <div class="voessen__product__table-list-product">
        <table class="table table--top table-hover voessen__table voessen__table--mob">
            <thead>
            <tr>
                <th>Номер заказа</th>
                <th>Статус</th>
                <th>Дата</th>
                <th>Сумма</th>
                <th>Документы</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class="voessen__table__label-mob">Номер заказа</span>
                    1000-5000-5000-470
                </td>
                <td>
                    <span class="voessen__table__label-mob">Статус</span>
                    В обработке
                </td>
                <td>
                    <span class="voessen__table__label-mob">Дата</span>
                    10.08.2020
                </td>
                <td>
                    <span class="voessen__table__label-mob">Сумма</span>
                    10 000 000, 00 ₽
                </td>
                <td>
                    <span class="voessen__table__label-mob">Документы</span>
                    Счет № 1000-5000-5000-470
                </td>
                <td class="voessen__table__mob-footer">
                    <ul class="nav voessen__form__list-order-lk">
                        <li>
                            <a href="" title="Отменить заказ">
                                <svg width="12" height="12">
                                    <use xlink:href="#edit-del"></use>
                                </svg>
                                <span>Отменить заказ</span>
                            </a>
                        </li>
                        <li class="only-w7">
                            <a href="">Подробнее о заказе</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="voessen__table__label-mob">Номер заказа</span>
                    1000-5000-5000-470
                </td>
                <td>
                    <span class="voessen__table__label-mob">Статус</span>
                    В обработке
                </td>
                <td>
                    <span class="voessen__table__label-mob">Дата</span>
                    10.08.2020
                </td>
                <td>
                    <span class="voessen__table__label-mob">Сумма</span>
                    10 000 000, 00 ₽
                </td>
                <td>
                    <span class="voessen__table__label-mob">Документы</span>
                    Счет № 1000-5000-5000-470<br>
                    Счет № 1000-5000-5000-470
                </td>
                <td class="voessen__table__mob-footer">
                    <ul class="voessen__form__list-order-lk nav">
                        <li>
                            <a href="" title="Повторить заказ">
                                <svg width="12" height="12">
                                    <use xlink:href="#edit-repeat"></use>
                                </svg>
                                <span>Повторить заказ</span>
                            </a>
                        </li>
                        <li class="only-w7">
                            <a href="">Подробнее о заказе</a>
                        </li>
                    </ul>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <button class="voessen__btn-more">Показать еще</button>
    </div>
    <?php
    include __DIR__ . '/../pagination.php';
    ?>
</div>