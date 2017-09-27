<?php include_once "parts/head.php" ?>
<body class="before-white">
<?php include_once "parts/header-white.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="page-title">Каталог</h1>
            <div class="row">
                <div class="col-12 d-flex-lg">
                    <div class="left-block">
                        <div class="left-block__mob-title"><a href="#" role="button">Список</a></div>
                        <ul class="left-sidebar">
                            <li class="left-sidebar__item"><a href="#">Водоснабжение</a></li>
                            <li class="left-sidebar__item has-child">
                                <a href="#">Водоотведение</a>
                                <ul class="left-sidebar-second">
                                    <li class="left-sidebar-second__item"><a href="#">Дренажные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Фекальные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Комплектующие</a></li>
                                </ul>
                            </li>
                            <li class="left-sidebar__item has-child">
                                <a href="#">Трубопроводы и арматура</a>
                                <ul class="left-sidebar-second">
                                    <li class="left-sidebar-second__item"><a href="#">Дренажные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Фекальные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Комплектующие</a></li>
                                </ul>
                            </li>
                            <li class="left-sidebar__item has-child">
                                <a href="#">Отопление</a>
                                <ul class="left-sidebar-second">
                                    <li class="left-sidebar-second__item"><a href="#">Дренажные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Фекальные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Комплектующие</a></li>
                                </ul>
                            </li>
                            <li class="left-sidebar__item has-child">
                                <a href="#">Фильтрация</a>
                                <ul class="left-sidebar-second">
                                    <li class="left-sidebar-second__item"><a href="#">Дренажные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Фекальные насосы</a></li>
                                    <li class="left-sidebar-second__item"><a href="#">Комплектующие</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="right-block">
                        <div class="category-block">
                            <h2 class="category-block__title">Водоотведение</h2>
                            <ul class="category-block__list list-inline">
                                <li class="category-block__list--item">
                                    <a href="#" class="category">
                                        <span class="category__image gray-border">
                                            <img src="img/jpeg_files/cat-1.jpg" alt="category" width="79" height="156">
                                        </span>
                                        <span class="category__link">
                                            <span class="link-arrow"><span>Дренажные насосы</span></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="category-block__list--item">
                                    <a href="#" class="category">
                                        <span class="category__image gray-border">
                                            <img src="img/jpeg_files/cat-2.jpg" alt="category" width="79" height="156">
                                        </span>
                                        <span class="category__link">
                                            <span class="link-arrow"><span>Фекальные насосы</span></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="category-block__list--item">
                                    <a href="#" class="category">
                                        <span class="category__image gray-border">
                                            <img src="img/jpeg_files/cat-3.jpg" alt="category" width="79" height="156">
                                        </span>
                                        <span class="category__link">
                                            <span class="link-arrow"><span>Комплектующие</span></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="three-items-block row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="padding-lg-block">
                                    <p class="title-sm-light ">Просмотренные товары</p>
                                    <div class="goods-combo-small">
                                        <?php include "parts/small-goods.php" ?>
                                        <?php include "parts/small-goods.php" ?>
                                        <?php include "parts/small-goods.php" ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="padding-lg-block gray-border">
                                    <p class="title-sm-light">Рекомендуемые товары</p>
                                    <div class="goods-combo-small">
                                        <?php include "parts/small-goods.php" ?>
                                        <?php include "parts/small-goods.php" ?>
                                        <?php include "parts/small-goods.php" ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12">
                                <div class="padding-lg-block block-yellow-bg">
                                    <p class="title-md">регистрация</p>
                                    <p class="block-yellow-bg__text">Получите <br> больше преимуществ и специальные условия</p>
                                    <div class="form-registration">
                                        <form action="#">
                                            <input type="text" class="tel-input form-registration__input" placeholder="(_ _ _) _ _ _ - _ _ - _ _">
                                            <input type="submit" class="form-registration__button" value="регистрация">
                                        </form>
                                    </div>
                                    <div class="link-more">
                                        <a href="#" class="link">узнать подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="three-items-block row">
                            <div class="col-xl-4">
                                <div class="one-item-slider height-auto">
                                    <div>
                                        <img src="img/jpeg_files/art-sm.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="one-item-slider height-auto">
                                    <div>
                                        <img src="img/jpeg_files/art-sm-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="one-item-slider height-auto">
                                    <div>
                                        <img src="img/jpeg_files/art-sm-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="img/jpeg_files/art-sm-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="seo-text">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--    --><?php //include_once "parts/contacts.php" ?>
    <?php include_once "parts/footer.php" ?>

    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>
</html>
