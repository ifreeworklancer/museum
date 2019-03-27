<section id="places-nearby">
    <div class="container">
        <div class="row">
            <div class="col-auto mx-auto mb-5">
                <div class="section-description section-description--center">
                    <h2 class="title text-center">
                        <?= $places_nearby['title']; ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($places_nearby['item'] as $item): ?>
                <div class="col-sm-4 col-lg-3">
                    <a href="#" class="places-nearby-item">
                        <div class="icon" style="background-image:url(<?= $item['image'] ?>);"></div>
                        <div class="title"><?= $item['title']; ?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>