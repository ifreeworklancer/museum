<?php

require_once('store.php');

require_once('header.php');

?>

    <!-- Search -->
    <section id="search-page" class="secondary-page">
        <div class="secondary-intro"
             style="background-image:url('<?= $page_search['intro_bg_img']; ?>');"></div>
        <div class="secondary-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-description">
                            <h2 class="title text-center">
                                <?= $page_search['main_title']; ?>
                            </h2>
                        </div>
                        <div class="text-center">
                            <p>
                                Нажаль, згідно Вашого запиту, ничого не знайдено...
                            </p>
                            <a href="/" class="btn btn-secondary">На Головну</a>
                        </div>
                    </div>
                </div>
                <?php foreach ($page_search['item'] as $item): ?>
                    <div class="row search-row">
                        <div class="col-lg-6">
                            <div class="search-item-img" style="background-image: url('<?= $item['image']; ?>');"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-item">
                                <h4 class="search-item__title">
                                    <?= $item['title']; ?>
                                </h4>
                                <p class="search-item__description">
                                    <?= $item['description']; ?>
                                </p>
                                <a href="#" class="link-more">Більше інформації</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php

require_once('footer.php');