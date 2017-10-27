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
                        <ul class="lk-wish-list">
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>

                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
                            </li>
                            <li class="lk-wish-list__item">
                                <?php include "parts/goods-horizontal.php" ?>
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
