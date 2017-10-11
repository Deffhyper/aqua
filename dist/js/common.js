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

           if($('.product-sticky-block').length){
               $('.product-sticky-block').addClass('sticky');
               $('.header').addClass('has-sub');
           }
       } else {
           $('.header').removeClass('menu-scroll');
           $('.product-sticky-block').removeClass('sticky');
           $('.header').removeClass('has-sub');

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
                    slidesToShow: 3,
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

    $('.offer-slider').slick({
        dots: true,
        infinite: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
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

    $('.five-item-slider').slick({
        dots: true,
        infinite: false,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            // {
            //     breakpoint: 1279,
            //     settings: {
            //         slidesToShow: 4,
            //         slidesToScroll: 1
            //     }
            // },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
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

    $('.one-item-slider-small').slick({dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
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

    $('.one-item-slider-2').slick({
        dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
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


    $('.mob-three-item-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });



    $('.catalog-list-slider').slick({
        dots: true,
        infinite: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1

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
    });

    
    ////////////////////////////////////////////// left sidebar ///////////////////////////////////////
    
    $('.left-sidebar__item.has-child').on('click', 'a', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).next('.left-sidebar-second').slideToggle();
    });


    ///////////////////////////////////////// left sidebar tablet /////////////////////////////////

    $('.left-block__mob-title').find('a').on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('open');
        $(this).parent().next().slideToggle();
    });



    /////////////////////////////////////////////////////// filter /////////////////////////

    $(document).on('click', '.filter-item__limit-open', function (event) {
        event.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).prev('ul').css('height', 'auto');
        } else {
            $(this).removeClass('open');
            $(this).prev('ul').removeAttr('style');
        }
    });

    $(document).on('click', '.filter__mob-title', function (event) {
        event.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).next('.filter-wrapper').slideDown();
        } else {
            $(this).removeClass('open');
            $(this).next('.filter-wrapper').slideUp();
        }
    });

    $(document).on('click', '.catalog-ctrl__title--mob', function (event) {
        event.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).next('.catalog-ctrl-wrapper').slideDown();
        } else {
            $(this).removeClass('open');
            $(this).next('.catalog-ctrl-wrapper').slideUp();
        }
    });

    $(document).on('click', '.compare-ctrl__mob', function (event) {
        event.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).next('.compare-ctrl').slideDown();
        } else {
            $(this).removeClass('open');
            $(this).next('.compare-ctrl').slideUp();
        }
    });


    ////////////////////////////////////////// range slider //////////////////////////////////////

    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 3500,
        values: [679, 2790],
        slide: function (event, ui) {
            $("#amount-max").val(ui.values[1]);
            $("#amount-min").val(ui.values[0]);
        }
    });

    $("#amount-max").val($("#slider-range").slider("values", 1));
    $("#amount-min").val($("#slider-range").slider("values", 0));

    $("#amount-max, #amount-min").on('blur', function(){
        var aMax = $('#amount-max').val();
        var aMin = $('#amount-min').val();
        var absolutMin = Number($("#slider-range").slider("option", "min"));

        if(aMin > aMax){
            $("#slider-range").slider("values", [aMin, aMin]);
            $("#amount-min").val(absolutMin);

        } else {
            $("#slider-range").slider("values", [aMin, aMax]);

        }
    });


    ////////////////////////////////////////////// compare ///////////////////////////////////////////////

    var compareItemCount = $('.compare-slider__top').children('.compare-slider__top--item').length;
    var compareTrueWidth = 0;

    function checkWidth() {
        compareTrueWidth = 0;

        $('.compare-slider__top').children('.compare-slider__top--item').each(function () {
            compareTrueWidth += parseInt($(this).innerWidth(), 10);
        });

        $('.compare-slider__top').css('width', compareTrueWidth);
        $('.compare-slider__bottom').css('width', compareTrueWidth);


    }

    checkWidth();

    $('#scroll-left').click(function (e) {
        e.preventDefault();
        $('.compare-slider').mCustomScrollbar('scrollTo','+='+compareTrueWidth/compareItemCount);
    });

    $('#scroll-right').click(function (e) {
        e.preventDefault();
        $('.compare-slider').mCustomScrollbar('scrollTo','-='+compareTrueWidth/compareItemCount);
    });


    $('.compare-slider').mCustomScrollbar({
        theme: "dark",
        horizontalScroll: true,
        autoDraggerLength: true,
        advanced: {updateOnContentResize: true, updateOnBrowserResize: true},
        scrollButtons: {
            enable: true
        }
    });



    function fixHeightsCompareRows() {

        var arrayOfHeights = [];
        var arrayOfSecondHeights = [];
        var concatArrays = [];

        $('.compare-slider__bottom > tbody').children().each(function () {
            var i = $(this).first().height();
            arrayOfHeights.push(i);
        });

        $('.compare-left-block__property > tbody').children().each(function () {
            var i = $(this).first().height();
            arrayOfSecondHeights.push(i);
        });


        for (var i = 0; i < arrayOfHeights.length; i++) {
            if (arrayOfHeights[i] > arrayOfSecondHeights[i]) {
                concatArrays.push(arrayOfHeights[i]);
            } else {
                concatArrays.push(arrayOfSecondHeights[i]);
            }
        }


        if ($('.compare').length) {
            for (var j = 0; j < concatArrays.length; j++) {
                $('.compare-slider__bottom').find('tbody').children().eq(j).first('td').css('height', concatArrays[j]);
                $('.compare-left-block__property').find('tbody').children().eq(j).first('td').css('height', concatArrays[j]);
            }
        }

    }

    fixHeightsCompareRows();

    $(window).resize(function () {
        fixHeightsCompareRows();
        checkWidth();
    });


    ////////////////////////////////////////// catalog detail /////////////////////////////////////////


    $('.product-slider__left').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        infinite: false,
        asNavFor: '.product-slider__right'
    });

    $('.product-slider__right').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.product-slider__left',
        dots: false,
        arrows: true,
        infinite: false,
        focusOnSelect: true,
        draggable: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    ///////////////////////////////////////// countdown /////////////////////////

    // Grab the current date
    var currentDate = new Date();
    // Set some date in the future. In this case, it's always Jan 1
    var futureDate  = new Date('11.11.2017 12:34:23');
    // Calculate the difference in seconds between the future and current date
    var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
    // Instantiate a coutdown FlipClock
    $('#flipcountdown').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true,
        showSeconds: true
    });

    $('#flipcountdown-2').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true,
        showSeconds: true
    });


    ///////////////////////////////////// product tab /////////////////////////////////////

    $('.product-tab').on('click', function (e) {

        var $target = $(e.target);

        if($target.closest('li').hasClass('product-tab-ctrl__item')){

            e.preventDefault();
            var itemIndex = $target.closest('li').index();


            $target.closest('li').addClass('active').siblings().removeClass('active');
            $(this).find('.product-tab-content__item').eq(itemIndex).addClass('active')
                .siblings().removeClass('active');

            $('.rateit').rateit();
        }


    });

    /////////////////////////////////  product spoiler ///////////////////////////

    $(document).on('click', '.product-spoiler-trigger', function () {

        if(!$(this).hasClass('active')) {
            $(this).addClass('active').text('скрыть');
            $(this).prev().css('height', 'auto');

        } else {
            if($(this).hasClass('left')){
                $(this).text('все отзывы');
            } else if ($(this).hasClass('right')){
                $(this).text('ещё');
            }
            
            $(this).removeClass('active');
            $(this).prev().removeAttr('style');

        }

    });


    ////////////////////////////// goods amount //////////////////////////////////////////

    $('.goods-amount').on('click', function (event) {
        var $target = $(event.target);
        var inputVal = $(this).find('.goods-amount-input').val();
        var currentVal = Number(inputVal.trim());

        if ($target.hasClass('dec') && currentVal >= 2) {
            --currentVal;
            $(this).find('.goods-amount-input').val(currentVal);
        } else if ($target.hasClass('inc')) {
            ++currentVal;
            $(this).find('.goods-amount-input').val(currentVal);
        }
    });


    ///////////////////////////// show password //////////////////////////////////////

    $(document).on('click', '.eye', function (e) {
        e.preventDefault();
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $(this).prev('input').attr('type', 'text');
        } else {
            $(this).removeClass('active');
            $(this).prev('input').attr('type', 'password');
        }


    });


    ///////////////////////////// lk order ////////////////////////////////////////////////////////////////////

    $('.lk-order__detail').on('click', function (e) {
        e.preventDefault();
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).find('a').text('скрыть');
        } else {
            $(this).removeClass('open');
            $(this).find('a').text('подробнее');
        }
        $(this).parent('.lk-order').toggleClass('open');
        $(this).parent('.lk-order').next('.lk-order-list').slideToggle();
    });








});