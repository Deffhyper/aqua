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
                            <li class="lk-navigate__item active"><a href="#">Регистрационный данные</a></li>
                            <li class="lk-navigate__item"><a href="#">Личные данные</a></li>
                            <li class="lk-navigate__item "><a href="#">Мои заказы</a></li>
                            <li class="lk-navigate__item"><a href="#">Просмотренные товары</a></li>
                        </ul>
                    </div>
                    <div class="right-block">
                        <div class="lk-info input-block">
                            <form action="#">
                                <fieldset class="input-block__item">
                                    <input type="tel" class="input-error gray-input tel-input" placeholder="Телефон" required>
                                    <mark>*</mark>
                                    <span class="label-error">Введите правильно телефон</span>
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <input type="password" class="gray-input" placeholder="Пароль" required>
                                    <mark>*</mark>
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <input type="password" class="gray-input" placeholder="Подтверждение пароля" required>
                                    <mark>*</mark>
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <input type="email" class="gray-input" placeholder="E-mail" required>
                                    <mark>*</mark>
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <input type="text" class="gray-input" placeholder="Имя">
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <input type="text" class="gray-input" placeholder="Фамилия">
                                </fieldset>
                                <fieldset class="input-block__item">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle gray-input" role="button" id="city-choice" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">Город</a>
                                        <ul class="dropdown-menu" aria-labelledby="city-choice">
                                            <li><a href="#">Город-1</a></li>
                                            <li><a href="#">Город-2</a></li>
                                            <li><a href="#">Город-3</a></li>
                                            <li><a href="#">Город-4</a></li>
                                        </ul>
                                    </div>
                                    <mark>*</mark>
                                </fieldset>

                                <fieldset class="input-block__item text-center mt-4">
                                    <button type="reset" class="btn btn__sm btn__sm--gray mr-3">Сбросить</button>
                                    <button type="submit" class="btn btn--green">Сохранить изменения</button>
                                </fieldset>


                            </form>
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
