<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>


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
</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <a class="navbar-brand ml-5" href="/">
                    <img src="../../images/icon/logo.png" alt="logo">
                </a>
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
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
                                <input type="text" placeholder="Search...">
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
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>