<?php

require_once('../store.php');

require_once('../header-secondary.php');

?>

    <!-- Catalog News -->
    <section id="catalog-news" class="secondary-page">
        <div class="secondary-intro" style="background-image:url('<?= $catalog_news['intro_bg_img']; ?>');">
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
                                <?= $catalog_news['main_title']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-content">
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach ($catalog_news['item'] as $item): ?>
                        <div class="col-lg-4">
                            <article class="article-item">
                                <div class="article-item-header">
                                    <div class="article-item-header__img"
                                         style="background-image: url('<?= $item['image']; ?>');"></div>
                                </div>
                                <div class="article-item-body">
                                    <div class="data-in-article"><?= $item['data']; ?></div>
                                    <h4><?= $item['title']; ?></h4>
                                    <p><?= $item['description']; ?></p>
                                    <a href="#" class="link-more link-more--dark">Читати повністю</a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-auto">
                        <a href="#" class="btn btn-secondary">
                            Більше новин
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require_once('../footer.php');