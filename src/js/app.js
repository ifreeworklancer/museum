import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.collapse');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
        }
    });

    $('.menu-mask').on('click', function () {
        $('.burger-menu').removeClass('active');
        $('.burger-menu-text').text("Меню");
        $('.menu').removeClass('active');
        $('.menu-mask').removeClass('active');
    })

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.burger-menu-text').text("Меню");
            $('.menu').removeClass('active');
            $('.menu-mask').removeClass('active');
        }
    });

    $(window).on('scroll', function () {
        $('.burger-menu').removeClass('active');
        $('.menu').slideUp('active');
        $('.form-search').removeClass('is-active');
        if ($(this).scrollTop() > 20) {
            $('#app-header').addClass('is-fixed');
        } else {
            $('#app-header').removeClass('is-fixed');
        }
    });

    /**
     *  Lang
     */
    $('.language-list').on('click', function () {
        $(this).toggleClass('is-active');
    });


    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    $('#btn-open-search').on('click', function (event) {
        if ($(this).parents('.form-search').hasClass('is-active')) {
            event.stopPropagation();
            $(this).parents('.form-search').removeClass('is-active');
        } else {
            event.preventDefault();
            $(this).parents('.form-search').addClass('is-active');
            $('#control-search').focus();
        }
    });

    $('#btn-close-search').on('click', function (event) {
        event.preventDefault();
        $(this).parents('.form-search').removeClass('is-active');
    });


    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $(categoryCarModal).removeClass('active');
            $(connectModal).removeClass('active');
            $(orderModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Modal
     */
    // var categoryCarModal = $('.custom-modal--category-car');
    // var connectModal = $('.custom-modal--connect');
    // var orderModal = $('.custom-modal--order');
    // var closeModal = $('.close-modal');
    // var modalMask = $('.modal-mask');
    //
    // $('.open-connect').on('click', function (e) {
    //     e.preventDefault();
    //     $(connectModal).addClass('active');
    //     $(modalMask).addClass('active');
    // });
    //
    // $('.open-order').on('click', function (e) {
    //     e.preventDefault();
    //     $(orderModal).addClass('active');
    //     $(modalMask).addClass('active');
    //     $("[name='car_title']").val($(this).data('cartitle'));
    // });
    //
    // if($(window).width() > 1024) {
    //     $('[data-indexCar]').on('click', function () {
    //         $(categoryCarModal).addClass('active');
    //         $(modalMask).addClass('active');
    //     });
    // }
    //
    // $(closeModal).on('click', function () {
    //     $(categoryCarModal).removeClass('active');
    //     $(connectModal).removeClass('active');
    //     $(orderModal).removeClass('active');
    //     $(modalMask).removeClass('active');
    // });
    //
    // $(modalMask).on('click', function () {
    //     $(categoryCarModal).removeClass('active');
    //     $(connectModal).removeClass('active');
    //     $(orderModal).removeClass('active');
    //     $(modalMask).removeClass('active');
    // });


    /**
     * Sliders
     */

    if ($('.reviews-slider')) {

        let elem2 = document.querySelector('.reviews-slider');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: false,
                wrapAround: true,
                adaptiveHeight: true
            });

            var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');
            prevArrowReviews.addEventListener('click', function () {
                flkty2.previous(false, false);
            });

            var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');
            nextArrowReviews.addEventListener('click', function () {
                flkty2.next(false, false);
            });
        }
    }


    /**
     * Animate scroll
     */
    // ScrollReveal().reveal('.intro-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.intro-order', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-beforeAfter', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.response-item', {
    //     origin: 'bottom',
    //     delay: 400,
    //     distance: '200px',
    // });


})(jQuery)