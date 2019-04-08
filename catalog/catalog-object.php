<?php

require_once('../store.php');

require_once('../header-secondary.php');

?>

    <!-- Catalog Object -->
    <section id="catalog-object" class="secondary-page">
        <div class="secondary-intro" style="background-image:url('<?= $catalog_object['intro_bg_img']; ?>');">
            <div class="container-fluid">
                <div class="row offset-sm-1">
                    <div class="col-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Головна</a></li>
                                <li class="breadcrumb-item active">Новини</li>
                            </ol>
                        </nav>
                        <div class="section-description section-description--start">
                            <h2 class="title text-white">
                                <?= $catalog_object['main_title']; ?>
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
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php $count = 0;
                    foreach ($catalog_object['item'] as $item): $count++ ?>
                        <div class="col-lg-6 p-0">
                            <div class="catalog-item <?php if ($count % 2 == 0) echo 'catalog-item--start'; elseif ($count % 2 != 0) echo 'catalog-item--end'; ?>"
                                 style="background-image:url('<?= $item['image']; ?>');">
                                <div class="filter-blur"></div>
                                <div class="catalog-item-description">
                                    <div class="catalog-item-description__icon"
                                         style="background-image:url('<?= $item['icon']; ?>');"></div>
                                    <h4 class="catalog-item-description__title">
                                        <?= $item['title']; ?>
                                    </h4>
                                    <a href="#" class="link-more">Більше інформаці</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-auto mt-5">
                        <a href="#" class="btn btn-secondary">
                            Більше об’єктів
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require_once('../footer.php');