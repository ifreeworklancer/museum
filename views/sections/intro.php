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
        <a href="#services" class="scroll-down scroll-link">
            <div class="scroll-down__text">
                скролл вниз
            </div>
            <div class="scroll-down__icon"></div>
        </a>
    </div>
</section>