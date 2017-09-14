$(function() {

    var windowWidth = $(document).width();

    ////////////////////////////////// mobile footer ///////////////////////////////////////

    function bindJsOnMobile(windowWidth) {

        var pageFtitle = $('.footer-title');

        if (windowWidth < 768) {
            pageFtitle.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            pageFtitle.unbind('click');
            pageFtitle.next().removeAttr('style');
            pageFtitle.removeClass('rotate');
        }
    }

    $(window).ready(bindJsOnMobile(windowWidth)).resize(function () {
        bindJsOnMobile(window.innerWidth);
    });


    ////////////////////////////// menu //////////////////////////////////////

    $(document).on('click', '.header-catalog-button a', function (e) {
        e.preventDefault();
        if(!$(this).hasClass('open')){
            $('.menu-trigger').addClass('open');
            $('.header').addClass('menu-open');
            $('.header-overlay').addClass('active');
            $('.header-menu').addClass('open');

            if($('.header-catalog').hasClass('open')){
                $('.header-catalog').removeClass('open');
            }
        } else {
            $(this).removeClass('open');
            $('.header').removeClass('menu-open');
            $('.header-overlay').removeClass('active');
            $('.header-menu').removeClass('open');
        }
    });

    $(document).on('click', '.menu-trigger', function (e) {
        e.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $('.header').addClass('menu-open');
            $('.header-overlay').addClass('active');
            $('.header-catalog').addClass('open');

            if($('.header-menu').hasClass('open')){
                $('.header-menu').removeClass('open');
            }
        } else {
            $(this).removeClass('open');
            $('.menu-trigger').removeClass('open');
            $('.header').removeClass('menu-open');
            $('.header-overlay').removeClass('active');
            $('.header-catalog').removeClass('open');
            $('.header-menu').removeClass('open');
        }
    });


});