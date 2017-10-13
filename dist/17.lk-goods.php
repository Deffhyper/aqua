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
                        <ul class="">
                            <li class="lk-order-list__item">
                                <div class="goods-horizontal">
                                    <div class="goods-image goods-image--gray">
                                        <div class="goods-image__label"><i class="sprite sprite-b-new"></i></div>
                                        <a href="#">
                                            <img src="img/jpeg_files/goods-md-1.png" alt="goods" height="142" width="134">
                                        </a>
                                    </div>

                                    <div class="goods-property">
                                        <div class="goods-link">
                                            <a href="#">BPS 25-6ESA-180</a>
                                        </div>
                                        <div class="goods-subtitle"><span>Циркуляционный насос</span></div>
                                    </div>

                                    <div class="goods-price">
                                        <span class="goods-price-current">₴ 12 600 </span>
                                        <span class="goods-price-old">₴ 13 000</span>
                                    </div>

                                    <ul class="goods-property__ctrl">
                                        <li class="goods-property__ctrl--icon goods-horizontal__buy"><a href="#" data-toggle="modal" data-target="#modal-cart"><span class="iconmoon icon-basket"></span>Купить</a></li>
                                    </ul>

                                </div>
                            </li>

                            <li class="lk-order-list__item">
                                <div class="goods-horizontal">
                                    <div class="goods-image goods-image--gray">
                                        <div class="goods-image__label"><i class="sprite sprite-b-new"></i></div>
                                        <a href="#">
                                            <img src="img/jpeg_files/goods-md-1.png" alt="goods" height="142" width="134">
                                        </a>
                                    </div>

                                    <div class="goods-property">
                                        <div class="goods-link">
                                            <a href="#">BPS 25-6ESA-180</a>
                                        </div>
                                        <div class="goods-subtitle"><span>Циркуляционный насос</span></div>
                                    </div>

                                    <div class="goods-price">
                                        <span class="goods-price-current">₴ 12 600 </span>
                                        <span class="goods-price-old">₴ 13 000</span>
                                    </div>

                                    <ul class="goods-property__ctrl">
                                        <li class="goods-property__ctrl--icon goods-horizontal__buy"><a href="#" data-toggle="modal" data-target="#modal-cart"><span class="iconmoon icon-basket"></span>Купить</a></li>
                                    </ul>

                                </div>
                            </li>

<!--                            <li class="lk-order-list__item">-->

<!--                                this is old version                                                -->

<!--                                <div class="goods-horizontal">-->
<!---->
<!--                                    <div class="goods-lk-order-wrapper">-->
<!---->
<!--                                        <div class="goods-image goods-image--gray">-->
<!--                                            <a href="#">-->
<!--                                                <img src="img/jpeg_files/goods-md-1.png" alt="goods"-->
<!--                                                     height="142" width="134">-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class="goods-link">-->
<!--                                            <a href="#">BPS 25-6ESA-180 BPS</a>-->
<!--                                        </div>-->
<!--                                        <div class="goods-subtitle"><span>Циркуляционный насос</span>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!---->
<!--                                    <div class="goods-code"><span>код 123456</span></div>-->
<!---->
<!--                                    <div class="goods-quantity"><span>2 шт</span></div>-->
<!---->
<!--                                    <div class="goods-price">-->
<!--                                        <span class="goods-price-current">₴ 12 600 </span>-->
<!--                                        <span class="goods-price-old">₴ 13 000</span>-->
<!--                                    </div>-->
<!--                                    <ul class="goods-property__ctrl">-->
<!--                                        <li class="goods-property__ctrl--icon goods-horizontal__buy"><a href="#" data-toggle="modal" data-target="#modal-cart"><span class="iconmoon icon-basket"></span>Купить</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->

<!--                            </li>-->
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
