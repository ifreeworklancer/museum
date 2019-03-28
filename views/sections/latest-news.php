<!-- Latest news -->
<section id="latest-news">
    <div class="container">
        <div class="row justify-content-center px-3">
            <div class="section-description section-description--start d-flex justify-content-between w-100 mb-5">
                <h2 class="title">
                    <?= $latest_news['title']; ?>
                </h2>
                <a href="#" class="btn btn-secondary d-none d-sm-flex">Всі новини</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($latest_news['item'] as $item): ?>
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
        </div>
    </div>
</section>