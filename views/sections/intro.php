<!-- Intro -->
<section id="intro" style="background-image: url('<?= $intro['bg_image']; ?>');">
    <div class="container h-100 position-relative">
        <div class="row h-100 align-items-center">
            <div class="col-sm-9 col-lg-6 px-lg-0">
                <div class="section-description section-description--start">
                    <h3 class="title text-primary">
                        <?= $intro['subtitle']; ?>
                    </h3>
                </div>
                <div class="intro-item text-white">
                    <h1 class="intro-item-title text-white">
                        <?= $intro['title']; ?>
                    </h1>
                    <p class="intro-item-description">
                        <?= $intro['description']; ?>
                    </p>
                    <a href="#" class="link-more">Детальніше</a>
                </div>
            </div>
        </div>
        <a href="#catalog" class="scroll-down scroll-link">
            <div class="scroll-down__text">
                скролл вниз
            </div>
            <div class="scroll-down__icon"></div>
        </a>
    </div>
    <svg class="decor-symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 80" preserveAspectRatio="xMidYMid slice">
        <defs>
            <mask id="mask" x="0" y="0" width="100%" height="100%" >
                <rect x="0" y="0" width="100%" height="100%" fill="#fff"/>
                <text id="text" x="130" y="90">X</text>
            </mask>
        </defs>
        <rect id="overlay" x="0" y="0" width="100%" height="100%" fill="url(#bg-gradient)"/>
    </svg>
</section>