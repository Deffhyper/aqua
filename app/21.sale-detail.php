<?php include_once "parts/head.php" ?>
<body class="before-white">
<?php include_once "parts/header-white.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="page-title">Акция детальная</h1>
            <div class="row">
                <div class="col-12 d-flex-lg">
                    <div class="media big">
                        <div class="media-image">
                            <div class="block-w-border">
                                <img src="img/jpeg_files/media-big.jpg" alt="image" width="" height="">
                            </div>
                        </div>
                        <div class="media-body">
                            <time class="media-body__time" datetime="27.08.2017">27.08.2017</time>
                            <div class="section-title__border">
                                <h2 class="media-body__title"><a href="#">Правильный выбор насоса для садового участка:
                                        мнение профессионалов и опыт дачников</a></h2>
                            </div>
                            <p class="media-body__category">
                                <span>Рубрика: водоснабжение</span>
                            </p>
                            <p class="media-body__category">
                                <span>Рубрика: водоснабжение</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex-lg">
                    <div class="right-block offset-left">

                        <div class="text-block mb-7">
                            <h3>Общая классификация насосов</h3>
                            <p>Насос это гидравлическая машина, используемая для откачки, транспортировки, подачи и
                                обеспечения циркуляции в замкнутом пространстве различных жидких сред, в том числе жидкостей
                                с некоторым содержанием паров, газов и твердых частиц, а также для передачи через жидкость
                                механической энергии в качестве привода к каким-либо механизмам.</p>
                            <ul>
                                <li>по характеру движения рабочих органов;</li>
                                <li>по характеру движения ведущего звена насоса;</li>
                                <li>по направлению перемещения жидкости;</li>
                                <li>по виду рабочих органов;</li>
                                <li>по виду передачи движения к рабочим органам и др.</li>
                            </ul>

                            <h3>Классификация двигателей к насосам</h3>

                            <p>В качестве активаторов насосных установок широко применяются следующие виды двигателей:
                                тепловые, электрические, водяные, работающие от энергии ветра. Вид используемого двигателя и
                                способ, которым он соединяется с агрегатом, зависит от следующих факторов: вид насосной
                                установки, тип энергии на которой работает насос и необходимая мощность. Помимо этого, при
                                выборе насоса учитывается экономическая составляющая.</p>

                            <br>

                            <p>В случае если доступна электрическая энергия, наиболее часто используется электромотор,
                                особенно если установка частично или полностью автоматизирована. Если электроэнергия
                                недоступна или на местности имеется экономичное топливо, газовое или паровое хозяйство,
                                широко применяется система турбин или соответствующих двигателей.</p>
                        </div>

                        <div class="four-image-slider">
                            <div>
                                <div class="four-image-slider__item">
                                    <a href="#">
                                        <img src="img/jpeg_files/img-1.jpg" alt="ef" height="220" width="220">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="four-image-slider__item">
                                    <a href="#">
                                        <img src="img/jpeg_files/img-2.jpg" alt="ef" height="220" width="220">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="four-image-slider__item">
                                    <a href="#">
                                        <img src="img/jpeg_files/img-3.jpg" alt="ef" height="220" width="220">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="four-image-slider__item">
                                    <a href="#">
                                        <img src="img/jpeg_files/img-4.jpg" alt="ef" height="220" width="220">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="four-image-slider__item">
                                    <a href="#">
                                        <img src="img/jpeg_files/img-1.jpg" alt="ef" height="220" width="220">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="related-product">
                            <p class="related-product__title">Сопутствующие товары</p>
                            <div class="related-product__slider">
                                <div>
                                    <div class="goods-combo">
                                        <?php include "parts/goods.php" ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="goods-combo">
                                        <?php include "parts/goods.php" ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="goods-combo">
                                        <?php include "parts/goods.php" ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="goods-combo">
                                        <?php include "parts/goods.php" ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php include_once "parts/pagination.php" ?>
                    </div>
                </div>

            </div>

            <?php include_once "parts/contacts.php" ?>

        </div>
    </div>
</div>


<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>
