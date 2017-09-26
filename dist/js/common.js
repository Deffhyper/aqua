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

    $('.header-catalog__left').find('li').find('a').hover(function () {

        var index = $(this).parent('li').index();

        if($(document).innerWidth() >= 1280) {
            $('.header-catalog__right').find('.header-catalog__right--tab').addClass('active').eq(index).siblings().removeClass('active');
        }

    }, function () {
        // if($(document).innerWidth() >= 1280) {
        //     $('.header-catalog__right').find('.header-catalog__right--tab').removeClass('active');
        // }
    });

    /////////////////////////////////// fixed header //////////////////////////////////////

    $(document).on('scroll', function () {
       if($(this).scrollTop() >= 103){

           if($('.header-tel-block').find('.dropdown').hasClass('show')) {

               $('.header-tel-block').find('.dropdown').find('.dropdown-toggle').trigger('click');
           }

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

//////////////////////// nth item slider /////////////////////////////////////

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

    $('.four-image-slider').slick({

        infinite: true,
        arrows: false,
        dots: true,
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
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.related-product__slider').slick({

        infinite: true,
        arrows: false,
        dots: true,
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
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 500,
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

    $('.two-item-slider .goods-combo, .one-item-slider .goods-combo-small, .one-item-slider .goods-combo, .related-product__slider .goods-combo').hover(function () {

        if($(document).innerWidth() >= 1280) {
            $(this).closest('.slick-slider').addClass('slider-hover');
        }

    }, function () {
        $(this).closest('.slick-slider').removeClass('slider-hover');
    });


    //////////////////////////////// video slider ////////////////////////////////////////////


    // $('.main-video-slider__back').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     fade: true,
    //     asNavFor: '.main-video-slider__front'
    // });

    $('.main-video-slider__front').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // asNavFor: '.main-video-slider__back',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
        responsive: [

            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    centerMode: true
                }
            }
        ]
    });


    ///////////////////////////// scroll to top button /////////////////////

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
    ////////////////////////////////// video slider //////////////////////////////

    $("#video-modal").on("hidden.bs.modal",function(){
        $("#iframeYoutube").attr("src","");
    });

    $('.video-modal-launcher').on('click', function () {
        var videoAddress = $(this).data('address');
        $("#iframeYoutube").attr("src","https://www.youtube.com/embed/"+videoAddress);
    })

    
    ////////////////////////////////////////////// left sidebar ///////////////////////////////////////
    
    $('.left-sidebar__item.has-child').on('click', 'a', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).next('.left-sidebar-second').slideToggle();
    })


    ///////////////////////////////////////// left sidebar tablet /////////////////////////////////

    $('.left-block__mob-title').find('a').on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('open');
        $(this).parent().next().slideToggle();
    });

});