<?php

require_once('../store.php');

require_once('../header-secondary.php');

?>

    <!-- Catalog Gallery -->
    <section id="catalog-gallery" class="secondary-page">
        <div class="secondary-intro" style="background-image:url('<?= $catalog_gallery['intro_bg_img']; ?>');">
            <div class="container-fluid">
                <div class="row offset-sm-1">
                    <div class="col-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Головна</a></li>
                                <li class="breadcrumb-item active">Галерея</li>
                            </ol>
                        </nav>
                        <div class="section-description section-description--start">
                            <h2 class="title text-white">
                                <?= $catalog_gallery['main_title']; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-sm-11 mt-4">
                        <div class="catalog-object-filter">
                            <form class="custom-filter">
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="title">Категорія фільтрів</div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="1">
                                            <label class="custom-control-label" for="1">Назва фільтра</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="2">
                                            <label class="custom-control-label" for="2">Назва фільтра</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="3">
                                            <label class="custom-control-label" for="3">Назва фільтра</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="4">
                                            <label class="custom-control-label" for="4">Назва фільтра</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="title">Категорія фільтрів</div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="5">
                                            <label class="custom-control-label" for="5">Назва фільтра</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="6">
                                            <label class="custom-control-label" for="6">Назва фільтра</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="7">
                                            <label class="custom-control-label" for="7">Назва фільтра</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-secondary">
                                    <svg width="20" height="20">
                                        <use xlink:href="#delete-icon"></use>
                                    </svg>
                                    Очистити фільтри
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="gallery-wrapper">
                            <?php $count = 0;
                            foreach ($catalog_gallery['item'] as $item) :
                                ?>
                                <?php $count++; ?>
                                <div class="gallery-item" data-indexImg="<?= $count; ?>">
                                    <img src="<?= $item; ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-secondary">
                            Дивитись більше
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Modal -->

    <div class="custom-modal custom-modal--gallery" id="slider-modal">
        <div class="custom-modal-wrapper">
            <div class="custom-modal-content">
                <div class="close-modal">
                    <div class="line line--left"></div>
                    <div class="line line--right"></div>
                </div>
                <div class="gallery-slider">
                    <?php
                    foreach ($catalog_gallery['slider'] as $item):
                        ?>
                        <div class="gallery-slider-item">
                            <div class="gallery-slider-item__img"
                                 style="background-image: url('<?= $item['image']; ?>')"></div>
                            <p class="gallery-slider-item__description">
                                <?= $item['description'] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev--gallery">
                        <svg width="20" height="20">
                            <use xlink:href="#slider-arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next--gallery">
                        <svg width="20" height="20">
                            <use xlink:href="#slider-arrow-next"></use>
                        </svg>
                    </div>
                </div>

                <div class="gallery-counter">
                    <div class="gallery-counter-item"><span id="sliderCounterActive">1</span> / <span class="slider-counter-all">1</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-mask"></div>

<?php

require_once('../footer.php');