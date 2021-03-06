<?php include_once "parts/head.php" ?>
<body class="before-white">
<?php include_once "parts/header-white.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="page-title page-title-short">Ваш Кабинет</h1>
            <div class="row">
                <div class="col-12 d-flex-lg">
                    <div class="left-block">
                        <div class="left-block__mob-title"><a href="#" role="button">Ваш Кабинет</a></div>
                        <ul class="lk-navigate left-sidebar">
                            <li class="lk-navigate__item"><a href="#">Регистрационный данные</a></li>
                            <li class="lk-navigate__item"><a href="#">Личные данные</a></li>
                            <li class="lk-navigate__item  active"><a href="#">Мои заказы</a></li>
                            <li class="lk-navigate__item"><a href="#">Просмотренные товары</a></li>
                        </ul>
                    </div>
                    <div class="right-block">

                        <ul class="lk-order-block">
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-success">новый</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">
                                        <div class="lk-order-list__item">
                                            <p class="lk-order-list__item--subtitle">Личные данные</p>
                                            <table class="lk-order-list__item--table">
                                                <tbody>
                                                    <tr>
                                                        <td>Имя:</td>
                                                        <td>Алёна</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Фамилия:</td>
                                                        <td>Иванова</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Телефон:</td>
                                                        <td>970 98909 99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Город:</td>
                                                        <td>Киев</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail</td>
                                                        <td>eaxample@gmail.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="lk-order-list__item--subtitle">Информация о доставке и оплате</p>
                                            <table class="lk-order-list__item--table">
                                                <tbody>
                                                    <tr>
                                                        <td>Способ доставки:</td>
                                                        <td>курьером</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Адрес доставки:</td>
                                                        <td>г. Киев ул. Лобановского 76</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Способ оплаты:</td>
                                                        <td>безналичный расчёт</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="lk-order-list__item--subtitle">Состав заказа</p>
                                        </div>
                                    </li>
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <table class="cart-total">
                                            <tbody>
                                            <tr class="cart-total__sale">
                                                <td>Стоимость доставки:</td>
                                                <td><span class="goods-price-current">₴ 12 600</span></td>
                                            </tr>
                                            <tr class="cart-total__current">
                                                <td>Итого:</td>
                                                <td><span class="goods-price-current">₴ 12 600</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="btn btn__sm btn--green">Повторить заказ</a></td>
                                                <td><a href="#" class="btn btn__sm btn__sm--gray">Отменить заказ</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-success">в процессе</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span>выполнен</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-cancel">отменен</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-success">новый</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-success">новый</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="lk-order-block__item">
                                <ul class="lk-order">
                                    <li class="lk-order__prop">
                                        <span class="lk-order__prop--num">№ 234567</span>
                                        <time class="lk-order__prop--date">2 сентября 2017</time>
                                    </li>
                                    <li class="lk-order__amount">3 товара на сумму <b>12 600 грн</b></li>
                                    <li class="lk-order__status">статус: <span class="status-success">новый</span></li>
                                    <li class="lk-order__detail"><a href="#" class="btn-link-dotted">подробнее</a></li>
                                </ul>
                                <ul class="lk-order-list">
                                    <li class="lk-order-list__item">

                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods"
                                                             height="142" width="134">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180 BPS 25-6ESA-180 BPS 25-6ESA-180 BPS
                                                        25-6ESA-180 BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос Циркуляционный насос</span>
                                                </div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-2.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="lk-order-list__item">
                                        <div class="goods-horizontal">

                                            <div class="goods-lk-order-wrapper">

                                                <div class="goods-image goods-image--gray">
                                                    <a href="#">
                                                        <img src="img/jpeg_files/goods-md-3.png" alt="goods">
                                                    </a>
                                                </div>
                                                <div class="goods-link">
                                                    <a href="#">BPS 25-6ESA-180</a>
                                                </div>
                                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>

                                            </div>

                                            <div class="goods-code"><span>код 123456</span></div>

                                            <div class="goods-quantity"><span>2 шт</span></div>

                                            <div class="goods-price">
                                                <span class="goods-price-current">₴ 12 600 </span>
                                                <span class="goods-price-old">₴ 13 000</span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                        </ul>


                        <?php include_once "parts/pagination.php" ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once "parts/footer.php" ?>

    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>
</html>
