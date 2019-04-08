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

<?php require_once('partials/svgs.php'); ?>

<!-- App-header -->
<header id="app-header" class="header-secondary">
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