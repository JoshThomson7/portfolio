(function ($, root, undefined) {

    $(function () {
        'use strict';
    });

    $(document).ready(function () {

    /***** SLIDEOUT NAV *****/

    $('.burgerNav').click(function(){
        /*$(this).hide();*/
        $('.slideoutNav').removeClass('navClosed').addClass('navOpen');
        $('.closeBurgerNav').show();
    });

    $('.closeBurgerNav').click(function(){
        $(this).hide();
        $('.slideoutNav').removeClass('navOpen').addClass('navClosed');
        $('.burgerNav').show();
    });

    /***** SLIDE DOWN *****/
    $('.navButton').click(function () {
        $('nav').hide();
        $('.quoteContainer').removeClass('quoteClosed').addClass('quoteOpen');
        $('.closeQuoteButton').show();
    });

    $('.closeQuoteButton').click(function () {
        $(this).hide();
        $('.quoteContainer').removeClass('quoteOpen').addClass('quoteClosed');
        $('.navButton').show();
        $('nav').show();
    });

    /***** HEADER SCROLL *****/
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.mainHeader').addClass('filled');
/*
            $('.headerNav img').css('width', '70%');
*/
        } else {
            $('.mainHeader').removeClass('filled');
/*
            $('.headerNav img').css('width', '100%');
*/
        }
    });

    /***** SLIDER *****/

    $('.slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        speed: 3000,
        autoplay: true
    });

    })

})(jQuery, this);