import jquery from 'jquery';
import Flickity from 'flickity';
import 'flickity-as-nav-for';
import ScrollReveal from 'scrollreveal';
import Masonry from 'masonry-layout';

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
    var galleryModal = $('.custom-modal--gallery');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-connect').on('click', function (e) {
        e.preventDefault();
        $(galleryModal).addClass('active');
        $(modalMask).addClass('active');
    });


    $(closeModal).on('click', function () {
        $(galleryModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(galleryModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Masonry
     */
    if (document.querySelector('.gallery-item')) {
        var elem_masonry1 = document.querySelector('.gallery-wrapper');

        new Masonry(elem_masonry1, {
            itemSelector: '.gallery-item'
        });
    }


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

    var elem2 = document.querySelector('.article-slider');

    if (elem2) {
        var flkty2 = new Flickity(elem2, {
            prevNextButtons: false,
            cellAlign: 'left',
            contain: true,
            draggable: true,
            pageDots: false,
            wrapAround: true,
        });

        var prevArrowArticle = document.querySelector('.slider-arrow-item--prev--article');

        prevArrowArticle.addEventListener('click', function () {
            flkty2.previous(true, false);
        });

        var nextArrowArticle = document.querySelector('.slider-arrow-item--next--article');

        nextArrowArticle.addEventListener('click', function () {
            flkty2.next(true, false);
        });
    }

    if (document.querySelector('.gallery-slider')) {
        let flkty3 = new Flickity('.gallery-slider', {
            wrapAround: true,
            prevNextButtons: false,
            cellAlign: 'center',
            draggable: true,
            pageDots: false,
            contain: true,
            initialIndex: 0,
            on: {
                change: function( index ) {
                    document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
                }
            }
        });

        $('[data-indexImg]').on('click', function () {
            $(galleryModal).addClass('active');
            $(modalMask).addClass('active');
            flkty3.select($(this).data('indeximg') - 1);
        });

        let prevArrowReviews = document.querySelector('.slider-arrow-item--prev--gallery');

        prevArrowReviews.addEventListener('click', function () {
            flkty3.previous(true, false);
        });

        let nextArrowReviews = document.querySelector('.slider-arrow-item--next--gallery');

        nextArrowReviews.addEventListener('click', function () {
            flkty3.next(true, false);
        });

        if (document.querySelector('.gallery-slider-item')) {
            let mainSliderContAll = $(".gallery-slider-item").length;
            $('.slider-counter-all').text(mainSliderContAll);
        }
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

    //Map
    if ($('#object-maps').length > 0) {
        var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

        mapboxgl.accessToken = 'pk.eyJ1IjoibWFwYm94dXNlcm11c2V1bSIsImEiOiJjanRya2FoZXQwcjVlNDVtdTNlOWNoMzUyIn0.oMm4w0lY15eiIFOcl-gkIA';
        var map = new mapboxgl.Map({
            container: 'object-maps',
            style: 'mapbox://styles/mapboxusermuseum/cjtrlhqn51yon1fn0akbdjjf2',
            center: [-71.020000, 42.362400],
            zoom: 10.0,
            scrollZoom: false
        });
    }


})(jQuery)