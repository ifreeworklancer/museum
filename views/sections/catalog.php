<!-- Catalog -->
<section id="catalog">
    <div class="container-fluid">
        <div class="row ">
            <div class="section-description section-description--center mx-auto">
                <h2 class="section-description__title">
                    <?= $catalog['title']; ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php
            $count = 0;
            foreach ($catalog['item'] as $item) : $count++ ?>
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
        </div>
    </div>
</section>