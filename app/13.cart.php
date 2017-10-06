<?php include_once "parts/head.php" ?>
<body class="before-white">
<?php include_once "parts/header-white.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12 cart">

            <h1 class="page-title">Ваша Корзина</h1>
            <table class="cart-table">
                <tbody>
                    <tr class="cart-table__header">
                        <td></td>
                        <td></td>
                        <td>Наименование</td>
                        <td>Количество</td>
                        <td>Цена</td>
                        <td>К оплате</td>
                        <td></td>
                    </tr>

                    <tr class="cart-table__item">
                        <td>1</td>
                        <td>
                            <div class="goods-horizontal">
                                <div class="goods-image goods-image--gray">
                                    <a href="#">
                                        <img src="img/jpeg_files/goods-md-1.png" alt="goods" height="142" width="134">
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="goods-property">
                                <div class="goods-link">
                                    <a href="#">BPS 25-6ESA-180</a>
                                </div>
                                <div class="goods-subtitle"><span>Циркуляционный насос</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="goods-amount">
                                <form action="#">
                                    <button type="button" class="dec"></button>
                                    <input type="text" value="1" class="goods-amount-input" autocomplete="off">
                                    <button type="button" class="inc"></button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="goods-price">
                                <span class="goods-price-current">₴ 12 600 </span>
                                <span class="goods-price-old">₴ 13 000</span>
                            </div>
                        </td>
                        <td>
                            <div class="goods-price">
                                <div class="goods-label goods-label--green">-10</div>
                                <span class="goods-price-current">₴ 12 600 </span>
                            </div>
                        </td>

                        <td>
                            <a href="#" class="close-btn"></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>




    <?php include_once "parts/footer.php" ?>

    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>
</html>
