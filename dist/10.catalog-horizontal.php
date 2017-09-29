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
                        <?php include_once "parts/left-sidebar.php" ?>
                        <?php include_once "parts/filter.php" ?>

                    </div>
                    <div class="right-block">
                        <div class="catalog mt-minus-top">
                            <h2 class="catalog-title">Фекальные насосы</h2>
                            <div class="catalog-ctrl">
                                <div class="catalog-ctrl__title--mob"><a href="#">Сортировать</a></div>
                                <div class="row catalog-ctrl-wrapper">
                                    <div class="col-xl-3 col-lg-3 col-sm-12 catalog-ctrl-wrapper__item">
                                        <span class="catalog-ctrl__label">Сортировка: </span>
                                        <div class="catalog-ctrl__dropdown dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" id="sort-price"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>цена</span>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="sort-price">
                                                <li><a href="#">по популярности</a></li>
                                                <li><a href="#">по популярности</a></li>
                                                <li><a href="#">по популярности</a></li>
                                                <li><a href="#">по популярности</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-sm-12 catalog-ctrl-wrapper__item">
                                        <span class="catalog-ctrl__label">Показывать по:</span>
                                        <div class="catalog-ctrl__dropdown dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" id="sort-count"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>16</span>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="sort-count">
                                                <li><a href="#">32</a></li>
                                                <li><a href="#">48</a></li>
                                                <li><a href="#">64</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-2 col-sm-12 text-lg-center catalog-ctrl-wrapper__item">
                                        <span class="catalog-ctrl__label">Вид:</span>
                                        <span class="catalog-ctrl__orient">
                                            <a href="#" class="catalog-ctrl__orient--vertical active">
                                                <span></span><span></span><span></span><span></span>
                                            </a>
                                            <a href="#" class="catalog-ctrl__orient--horizontal">
                                                <span></span><span></span>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-12 text-lg-right catalog-ctrl-wrapper__item">
                                        <span class="catalog-ctrl__label">К сравнению: </span>
                                        <a href="#" class="catalog-ctrl__compare"><span>4 товара</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-list catalog-list--horizontal row">
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12 col-lg-absolute">
                                    <div class="catalog-list-slider">
                                        <div>
                                            <a href="#" class="catalog-list-slider__item" style="background: url('img/jpeg_files/catalog-banner.jpg') no-repeat center/cover">
                                                <span class="catalog-list-slider__item--subtitle">Специальное предложение</span>
                                                <span class="catalog-list-slider__item--title">Сделаем бесплатно анализ воды</span>
                                                <span class="catalog-list-slider__item--link link-arrow white"><span>подробнее</span></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="catalog-list-slider__item" style="background: url('img/jpeg_files/catalog-banner.jpg') no-repeat center/cover">
                                                <span class="catalog-list-slider__item--subtitle">Специальное предложение</span>
                                                <span class="catalog-list-slider__item--title">Сделаем бесплатно анализ воды</span>
                                                <span class="catalog-list-slider__item--link link-arrow white"><span>подробнее</span></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="catalog-list-slider__item" style="background: url('img/jpeg_files/catalog-banner.jpg') no-repeat center/cover">
                                                <span class="catalog-list-slider__item--subtitle">Специальное предложение</span>
                                                <span class="catalog-list-slider__item--title">Сделаем бесплатно анализ воды</span>
                                                <span class="catalog-list-slider__item--link link-arrow white"><span>подробнее</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>
                                <div class="col-12">
                                    <?php include "parts/goods-horizontal.php" ?>
                                </div>

                            </div>

                            <?php include_once "parts/pagination.php" ?>
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
                                    <p class="block-yellow-bg__text">Получите <br> больше преимуществ и специальные
                                        условия</p>
                                    <div class="form-registration">
                                        <form action="#">
                                            <input type="text" class="tel-input form-registration__input"
                                                   placeholder="(_ _ _) _ _ _ - _ _ - _ _">
                                            <input type="submit" class="form-registration__button" value="регистрация">
                                        </form>
                                    </div>
                                    <div class="link-more">
                                        <a href="#" class="link">узнать подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="one-item-slider-2 height-auto">
                                    <div>
                                        <div class="article-slide gray-border">
                                            <p class="section-subtitle">Статьи</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>
                                            <p class="article-slide__text">Возможен ли сколь-нибудь простой расчет
                                                расхода воды по диаметру трубы? Или единственный способ — обращаться к
                                                специалистам ...</p>
                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="article-slide gray-border">
                                            <p class="section-subtitle">Статьи</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>
                                            <p class="article-slide__text">Возможен ли сколь-нибудь простой расчет
                                                расхода воды по диаметру трубы? Или единственный способ — обращаться к
                                                специалистам ...</p>
                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="article-slide gray-border">
                                            <p class="section-subtitle">Статьи</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>
                                            <p class="article-slide__text">Возможен ли сколь-нибудь простой расчет
                                                расхода воды по диаметру трубы? Или единственный способ — обращаться к
                                                специалистам ...</p>
                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="one-item-slider-2 height-auto">
                                    <div>
                                        <div class="article-slide article-slide--bg" style="background: url('img/jpeg_files/art-sm-2.jpg') no-repeat center / cover">
                                            <p class="section-subtitle">Выполненные работы</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>

                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="article-slide article-slide--bg" style="background: url('img/jpeg_files/art-sm-2.jpg') no-repeat center / cover">
                                            <p class="section-subtitle">Выполненные работы</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>

                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="article-slide article-slide--bg" style="background: url('img/jpeg_files/art-sm-2.jpg') no-repeat center / cover">
                                            <p class="section-subtitle">Выполненные работы</p>
                                            <a href="#" class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </a>

                                            <a href="#" class="article-slide__link link-arrow"><span>читать далее</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="one-item-slider-2 height-auto">
                                    <div>
                                        <a href="#" class="article-slide  article-slide--bg article-slide--video" style="background: url('img/jpeg_files/art-sm-3.jpg') no-repeat center / cover">
                                            <span class="section-subtitle">Видео</span>
                                            <span class="article-slide__play">
                                                <object data="img/svg/play.svg" type="image/svg+xml" width="57" height="57"></object>
                                            </span>
                                            <span class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="article-slide  article-slide--bg article-slide--video" style="background: url('img/jpeg_files/art-sm-3.jpg') no-repeat center / cover">
                                            <span class="section-subtitle">Видео</span>
                                            <span class="article-slide__play">
                                                <object data="img/svg/play.svg" type="image/svg+xml" width="57" height="57"></object>
                                            </span>
                                            <span class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="article-slide  article-slide--bg article-slide--video" style="background: url('img/jpeg_files/art-sm-3.jpg') no-repeat center / cover">
                                            <span class="section-subtitle">Видео</span>
                                            <span class="article-slide__play">
                                                <object data="img/svg/play.svg" type="image/svg+xml" width="57" height="57"></object>
                                            </span>
                                            <span class="article-slide__title">Расход воды через трубу:
                                                возможен ли простой расчет?
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="seo-text">
                            <div class="text-block mb-7">
                                <h3>Общая классификация насосов</h3>
                                <p>Насос это гидравлическая машина, используемая для откачки, транспортировки, подачи и
                                    обеспечения циркуляции в замкнутом пространстве различных жидких сред, в том числе
                                    жидкостей
                                    с некоторым содержанием паров, газов и твердых частиц, а также для передачи через
                                    жидкость
                                    механической энергии в качестве привода к каким-либо механизмам.</p>
                                <ul>
                                    <li>по характеру движения рабочих органов;</li>
                                    <li>по характеру движения ведущего звена насоса;</li>
                                    <li>по направлению перемещения жидкости;</li>
                                    <li>по виду рабочих органов;</li>
                                    <li>по виду передачи движения к рабочим органам и др.</li>
                                </ul>

                                <h3>Классификация двигателей к насосам</h3>

                                <p>В качестве активаторов насосных установок широко применяются следующие виды
                                    двигателей:
                                    тепловые, электрические, водяные, работающие от энергии ветра. Вид используемого
                                    двигателя и
                                    способ, которым он соединяется с агрегатом, зависит от следующих факторов: вид
                                    насосной
                                    установки, тип энергии на которой работает насос и необходимая мощность. Помимо
                                    этого, при
                                    выборе насоса учитывается экономическая составляющая.</p>

                                <br>

                                <p>В случае если доступна электрическая энергия, наиболее часто используется
                                    электромотор,
                                    особенно если установка частично или полностью автоматизирована. Если электроэнергия
                                    недоступна или на местности имеется экономичное топливо, газовое или паровое
                                    хозяйство,
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
