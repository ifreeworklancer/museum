<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute;top: -999999px;">
    <defs>
        <linearGradient id="bg-gradient" gradientUnits="userSpaceOnUse" x1="30.71%" y1="-9.89%" x2="69.29%"
                        y2="109.89%">
            <stop offset=".26" stop-color="#000" stop-opacity=".5"/>
            <stop offset="1.11" stop-color="#fffcfc" stop-opacity="0"/>
        </linearGradient>
    </defs>
    <defs>
        <linearGradient id="text-gradient" gradientUnits="userSpaceOnUse" x1="-9.6%" y1="32.28%" x2="109.6%"
                        y2="67.72%">
            <stop offset=".12" stop-color="#ff9244" stop-opacity=".5"/>
            <stop offset=".66" stop-color="#fff" stop-opacity="0"/>
        </linearGradient>
    </defs>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="search-icon" viewBox="0 0 31 31">
        <path d="M30.7297 29.4191L23.1962 21.8856C25.2171 19.5623 26.4406 16.531 26.4406 13.218C26.4406 5.92506 20.5086 0 13.2226 0C5.92969 0 0.00463867 5.93193 0.00463867 13.218C0.00463867 20.504 5.93657 26.4359 13.2226 26.4359C16.5357 26.4359 19.5669 25.2124 21.8902 23.1916L29.4237 30.7251C29.6024 30.9038 29.843 31 30.0767 31C30.3104 31 30.551 30.9106 30.7297 30.7251C31.0871 30.3676 31.0871 29.7765 30.7297 29.4191ZM1.85364 13.218C1.85364 6.94922 6.95386 1.85588 13.2157 1.85588C19.4845 1.85588 24.5778 6.9561 24.5778 13.218C24.5778 19.4798 19.4845 24.5869 13.2157 24.5869C6.95386 24.5869 1.85364 19.4867 1.85364 13.218Z"/>
        <defs>
            <clipPath>
                <rect width="31" height="31"/>
            </clipPath>
        </defs>
    </symbol>

    <symbol id="close-search-icon" viewBox="0 0 20 20">
        <path d="M20 2L18 0L10 8L2 0L0 2L8 10L0 18L2 20L10 12L18 20L20 18L12 10L20 2Z"/>
    </symbol>

    <symbol id="facebook-icon" viewBox="0 0 20 20">
        <path d="M2.92969 20H9.45312V12.8906H7.10938V10.5469H9.45312V7.61719C9.45312 6.00174 10.7674 4.6875 12.3828 4.6875H15.3125V7.03125H12.9688C12.3225 7.03125 11.7969 7.55692 11.7969 8.20312V10.5469H15.2068L14.8161 12.8906H11.7969V20H17.0703C18.6858 20 20 18.6858 20 17.0703V2.92969C20 1.31424 18.6858 0 17.0703 0H2.92969C1.31424 0 0 1.31424 0 2.92969V17.0703C0 18.6858 1.31424 20 2.92969 20ZM1.17188 2.92969C1.17188 1.96045 1.96045 1.17188 2.92969 1.17188H17.0703C18.0396 1.17188 18.8281 1.96045 18.8281 2.92969V17.0703C18.8281 18.0396 18.0396 18.8281 17.0703 18.8281H12.9688V14.0625H15.8089L16.5901 9.375H12.9688V8.20312H16.4844V3.51562H12.3828C10.1212 3.51562 8.28125 5.35553 8.28125 7.61719V9.375H5.9375V14.0625H8.28125V18.8281H2.92969C1.96045 18.8281 1.17188 18.0396 1.17188 17.0703V2.92969Z"/>
    </symbol>

    <symbol id="instagram-icon" viewBox="0 0 19 20">
        <path d="M2.7832 20H16.2168C17.7515 20 19 18.6858 19 17.0703V2.92969C19 1.31424 17.7515 0 16.2168 0H2.7832C1.24853 0 0 1.31424 0 2.92969V17.0703C0 18.6858 1.24853 20 2.7832 20ZM1.11328 2.92969C1.11328 1.96045 1.86243 1.17188 2.7832 1.17188H16.2168C17.1376 1.17188 17.8867 1.96045 17.8867 2.92969V17.0703C17.8867 18.0396 17.1376 18.8281 16.2168 18.8281H2.7832C1.86243 18.8281 1.11328 18.0396 1.11328 17.0703V2.92969Z"/>
        <path d="M9.5 15.2734C12.2623 15.2734 14.5098 12.9077 14.5098 10C14.5098 7.09229 12.2623 4.72656 9.5 4.72656C6.73767 4.72656 4.49023 7.09229 4.49023 10C4.49023 12.9077 6.73767 15.2734 9.5 15.2734ZM9.5 5.89844C11.6486 5.89844 13.3965 7.73834 13.3965 10C13.3965 12.2617 11.6486 14.1016 9.5 14.1016C7.35143 14.1016 5.60352 12.2617 5.60352 10C5.60352 7.73834 7.35143 5.89844 9.5 5.89844Z"/>
        <path d="M15.0664 5.89844C15.9872 5.89844 16.7363 5.10986 16.7363 4.14062C16.7363 3.17139 15.9872 2.38281 15.0664 2.38281C14.1456 2.38281 13.3965 3.17139 13.3965 4.14062C13.3965 5.10986 14.1456 5.89844 15.0664 5.89844ZM15.0664 3.55469C15.3733 3.55469 15.623 3.8176 15.623 4.14062C15.623 4.46365 15.3733 4.72656 15.0664 4.72656C14.7595 4.72656 14.5098 4.46365 14.5098 4.14062C14.5098 3.8176 14.7595 3.55469 15.0664 3.55469Z"/>
    </symbol>

    <symbol id="youtube-icon" viewBox="0 -61 512 512">
        <path d="m75 390h362c41.355469 0 75-33.644531 75-75v-240c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v240c0 41.355469 33.644531 75 75 75zm-45-315c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v240c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0"/>
        <path d="m181 94.507812v203.898438l180.5-103.621094zm30 50.984376 89.5 49.722656-89.5 51.378906zm0 0"/>
    </symbol>

    <svg id="slider-arrow-prev" viewBox="0 0 8 12" >
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.3999 10.6L5.9999 12L-9.72271e-05 6L5.9999 -1.22392e-07L7.3999 1.4L2.7999 6L7.3999 10.6Z" />
    </svg>

    <symbol id="slider-arrow-next" viewBox="0 0 8 12">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.4L1.4 0L7.4 6L1.4 12L0 10.6L4.6 6L0 1.4Z"/>
    </symbol>


</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light pl-3 pr-3 pl-lg-4 pl-lg3 w-100">
                <a class="navbar-brand" href="/">
                    <img src="../../images/icon/logo.png" alt="logo">
                </a>
                <ul class="language-list d-block ml-0 d-lg-none">
                    <li><a href="#">ru</a></li>
                    <li><a href="#">ua</a></li>
                    <li><a href="#">en</a></li>
                </ul>
                <div class="burger-menu d-flex d-lg-none flex-column justify-content-between mr-2">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
                <div class="collapse navbar-collapse justify-content-end align-items-center">
                    <div class="site-nav position-relative">
                        <ul class="navbar-nav">
                            <?php
                            $count;
                            foreach ($nav as $key => $value) {
                                echo
                                    '<li><a href="' . $key . '"' . '>' . $value . '</a></li>';
                            }
                            ?>
                        </ul>
                        <form class="form-search">
                            <div class="form-group-search">
                                <input id="control-search" type="text" placeholder="Search...">
                            </div>
                            <button id="btn-open-search" class="btn-search btn-search-open">
                                <svg width="30" height="30">
                                    <use xlink:href="#search-icon"></use>
                                </svg>
                            </button>
                            <a href="#" id="btn-close-search" class="btn-search btn-search-close">
                                <svg width="20" height="20">
                                    <use xlink:href="#close-search-icon"></use>
                                </svg>
                            </a>
                        </form>
                    </div>
                    <ul class="language-list d-none d-lg-block">
                        <li><a href="#">ru</a></li>
                        <li><a href="#">ua</a></li>
                        <li><a href="#">en</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Main -->
<main>