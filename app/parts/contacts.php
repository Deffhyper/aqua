<div class="main-contacts">
    <div class="row no-gutters">
        <div class="col-xl-2 col-lg-3 col-md-3 col-xs-12">
            <p class="section-subtitle">Контакты</p>
            <p class="section-title">Как с нами <br> связаться</p>

            <div class="main-contacts__choice">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" id="city-choice" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">выберите ваш город</a>
                    <ul class="dropdown-menu" aria-labelledby="city-choice">
                        <li><a href="#">Город-1</a></li>
                        <li><a href="#">Город-2</a></li>
                        <li><a href="#">Город-3</a></li>
                        <li><a href="#">Город-4</a></li>
                    </ul>
                </div>
            </div>
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

                <p class="main-contacts__title">Адрес</p>
                <p class="text-gray">Украина <br>
                    Черновецкая область <br>
                    Черновцы, Галицкий путь
                </p>

                <p class="main-contacts__title">E-mail</p>
                <p><a href="mailto:apc-company@mail.ru" class="text-gray">apc-company@mail.ru</a></p>

                <p class="main-contacts__title">Телефон</p>
                <p><a href="tel:0800302828">0 800 30 28 28</a></p>

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

            <ul class="social-list">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>


        </div>


        <div class="col-xl-10 col-lg-9 col-md-9 col-xs-12">
            <div class="main-contacts__map">
                <div id="map" class="contact-map">
                    <script>
                        function initMap() {
                            var image = 'http://front.webvision.in.ua/promSIZ/img/jpeg_files/m-icon.png';
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