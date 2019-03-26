import jquery from 'jquery';
import Flickity from 'flickity';
import 'flickity-as-nav-for';
import ScrollReveal from 'scrollreveal';
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
     * Sliders gallery
     */

    var elem1 = document.querySelector('.object-slider');
    var galleryNavFor = document.querySelector('.object-asNavFor-slider');

    if (elem1 && galleryNavFor) {
        var flkty1 = new Flickity(elem1, {
            prevNextButtons: false,
            cellAlign: 'left',
            contain: true,
            draggable: false,
            pageDots: false,
            wrapAround: true,
            cellSelector: '.object-slider-item'
        });

        var navFor = new Flickity(galleryNavFor, {
            asNavFor: elem1,
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
            wrapAround: true,
        });

        var prevArrowObject = document.querySelector('.slider-arrow-item--prev--object');

        prevArrowObject.addEventListener('click', function () {
            flkty1.previous(true, false);
        });

        var nextArrowObject = document.querySelector('.slider-arrow-item--next--object');

        nextArrowObject.addEventListener('click', function () {
            flkty1.next(true, false);
        });
    }


    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.catalog-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    }, 300);
    ScrollReveal().reveal('#latest-news .article-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });


})(jQuery)