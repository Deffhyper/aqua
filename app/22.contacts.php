<?php include_once "parts/head.php" ?>
<body class="before-white">
<?php include_once "parts/header-white.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="page-title">Контакты</h1>

            <div class="row">

                <div class="col-lg-6 push-lg-6 col-sm-12">
                    <div class="contacts-right">
                        <form action="#">
                            <fieldset class="input-block__item">
                                <input type="text" class="gray-input" placeholder="Имя">
                            </fieldset>

                            <fieldset class="input-block__item">
                                <input type="tel" class="input-error gray-input tel-input" placeholder="Телефон" required>
                                <mark>*</mark>
                                <span class="label-error">Введите правильно телефон</span>
                            </fieldset>

                            <fieldset class="input-block__item">
                                <textarea name="" id="" class="gray-input" cols="30" rows="10" placeholder="Вопрос"></textarea>
                            </fieldset>

                            <fieldset class="input-block__item text-center mt-4">
                                <button type="submit" class="btn btn__sm btn__sm--gray">Написать нам</button>
                            </fieldset>


                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pull-lg-6 col-sm-12">
                    <div class="contacts-left">
                        <div class="block-w-border">
                            <div class="main-contacts-block">
                                <p class="main-contacts__title">Адрес</p>
                                <p class="text-gray">Украина <br>
                                    Черновецкая область <br>
                                    Черновцы, Галицкий путь
                                </p>
                                <p class="main-contacts__title">E-mail</p>
                                <p><a href="mailto:apc-company@mail.ru" class="text-gray">apc-company@mail.ru</a></p>

                                <p class="main-contacts__title">Телефон</p>
                                <p><a href="tel:0800302828">0 800 30 28 28</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 mb-5">

                    <div id="map" class="contact-map">
                        <script>
                            function initMap() {
                                var image = 'http://front.webvision.in.ua/aqua/img/jpeg_files/map-picker.png';
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: 50.4434022, lng: 30.5202183},
                                    scrollwheel: false,
                                    zoom: 13
                                });
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: map.getCenter(),
                                    icon: image
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUXKVYkyQErp_WoaAk24K9diLh7ShZu28&callback=initMap"
                                async defer></script>
                    </div>
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
