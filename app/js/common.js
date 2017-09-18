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

    function triggerSiteMenu(windowWidth) {

        if (windowWidth > 991) {

            $('.menu-trigger').unbind('click').click( function (e) {
                e.preventDefault();
                if(!$(this).hasClass('open')){
                    $(this).addClass('open');
                    $('.header').addClass('menu-open');
                    $('.header-overlay').addClass('active');
                    $('.header-catalog').addClass('open');
                    $('body').css('overflow', 'hidden');
                    if($('.header-menu').hasClass('open')){
                        $('.header-menu').removeClass('open');
                    }
                } else {
                    $(this).removeClass('open');
                    $('.header').removeClass('menu-open');
                    $('.header-overlay').removeClass('active');
                    $('.header-catalog').removeClass('open');
                    $('.header-menu').removeClass('open');
                    $('body').removeAttr('style');
                }
            });

        } else {
            $('.menu-trigger').unbind('click').click( function (e) {
                e.preventDefault();
                if(!$(this).hasClass('open')){
                    $('body').css('overflow', 'hidden');
                    $(this).addClass('open');
                    $('.header').addClass('menu-open');
                    $('.header-overlay').addClass('active');
                } else {
                    $(this).removeClass('open');
                    $('.header').removeClass('menu-open');
                    $('.header-overlay').removeClass('active');
                    $('body').removeAttr('style');
                    $('.header-menu__item--list').removeClass('open');
                }
            });
            $(document).on('click', '.header-menu__item--title', function () {
                $(this).next('.header-menu__item--list').addClass('open');
            });

            $(document).on('click', '.mob-menu-back', function () {
                $(this).closest('.header-menu__item--list').removeClass('open');
            });
        }
    }

    $(window).ready(triggerSiteMenu(windowWidth)).resize(function () {
        triggerSiteMenu(window.innerWidth);
    });

    /////////////////////////////////// fixed header //////////////////////////////////////

    $(document).on('scroll', function () {
       if($(this).scrollTop() >= 103){
           $('.header').addClass('menu-scroll');
       } else {
           $('.header').removeClass('menu-scroll');
       }
    });

    /////////////////////////////////////////////////// top slider ///////////////////////////

    $('.top-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 766,
                settings: {
                    arrows: false
                }
            }
        ]
    });


    /////////////////////////////////////////////////// main news slider ///////////////////////////

    $('.main-news-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });

    //////////////////////////////////////////// masked tel input ////////////////

    $('.tel-input').mask("(9 9 9) 9 9 9 - 9 9 - 9 9", {autoclear: false});

//////////////////////// two item slider /////////////////////////////////////

    $('.four-item-slider').slick({
        dots: false,
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.two-item-slider').slick({dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    $('.one-item-slider').slick({dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.two-item-slider, .one-item-slider').hover(function () {

        if($(document).innerWidth() >= 1280) {
            $(this).addClass('slider-hover');
        }

    }, function () {
        $(this).removeClass('slider-hover');
    });


    //////////////////////////////// video slider ////////////////////////////////////////////


    $('.main-video-slider__back').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true
        // asNavFor: '.slider-nav'
    });
    // $('.slider-nav').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-for',
    //     dots: true,
    //     centerMode: true,
    //     focusOnSelect: true
    // });



});