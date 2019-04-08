<?php

require_once('../store.php');

require_once('../header-secondary.php');

?>

    <!-- Single object -->
    <section id="single-object">
        <div class="object-intro secondary-page-intro">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-lg-5 col-xl-4 order-2 order-sm-1">
                        <div class="object-intro-item"
                             style="background-image: url(<?= $single_object['intro_item_img']; ?>);">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                                    <li class="breadcrumb-item"><a href="#">Туристичні об'єкти</a></li>
                                    <li class="breadcrumb-item active">Скіфскьий стан</li>
                                </ol>
                            </nav>
                            <div class="section-description section-description--start d-flex align-items-center">
                                <div class="icon"
                                     style="background-image:url('<?= $single_object['icon_title']; ?>');"></div>
                                <h2 class="title text-white">
                                    <?= $single_object['main_title']; ?>
                                </h2>
                            </div>
                            <p>
                                <?= $single_object['main_description']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-7 col-xl-8 order-1 order-sm-2">
                        <div id="object-maps" class="mapbox-maps"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="object-content">
            <div class="container-fluid">
                <div class="row justify-content-around no-gutters">
                    <div class="col-sm-5">
                        <div class="object-slider-wrapper">
                            <div class="object-slider">
                                <?php foreach ($single_object['slider'] as $item) : ?>
                                    <div class="object-slider-item"
                                         style="background-image: url('<?= $item; ?>');"></div>
                                <?php endforeach; ?>
                                <div class="slider-arrow">
                                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev--object">
                                        <svg width="20" height="20">
                                            <use xlink:href="#slider-arrow-prev"></use>
                                        </svg>
                                    </div>
                                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next--object">
                                        <svg width="20" height="20">
                                            <use xlink:href="#slider-arrow-next"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="object-asNavFor-slider">
                                <?php foreach ($single_object['slider'] as $item) : ?>
                                    <div class="object-asNavFor-slider-item"
                                         style="background-image: url('<?= $item; ?>');"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xl-4">
                        <h2 class="title">
                            <?= $single_object['content_title']; ?>
                        </h2>
                        <p>
                            Археологічні дослідження, які проводилися на цій місцевості, починаючи з часів Якова
                            Новицького повідали, що кургани почали зводити у ІІІ тисячолітті до нашої ери, а поховання в
                            них зафіксовані – від дати створення перших курганів і до середньовіччя. Нажаль з 28
                            курганів, що височіли тут колись, збереглось усього три (загальна площа цієї курганної групи
                            – 20,83 га). У листопаді 2005р.</p>
                        <p> розпочались роботи з відновлення історичного ландшафту, а
                            саме з облаштування п’ятої курганної групи. До трьох «живих» курганів, що були очищені від
                            дерев та чагарникової порослі, додали ще вісім, серед яких один досліджений і відновлений,
                            два відновлені на місці зруйнованих, а решта – кургани-макети і святилище Арея.</p>
                        <p> Як вже
                            повідомлялось, на території п’ятої курганної групи збереглось три кургани з 28-ми. Один із
                            збережених курганів, в народі має назву “Потьомкінський”. Після ліквідації у 1775 році
                            Запорозької Січі Катерини ІІ подарувала острів Хортицю Григорію Олександровичу
                            Потьомкіну.</p>
                        <p>
                            І, з притаманним йому розмахом, фаворит цариці задумав створити на Хортиці фруктовий сад,
                            палац і розкішний парк, що не поступався паркам Петергофа. Але дуже швидко він охолов до
                            цієї витівки і передав Хортицю державній казні “за так”. У 1790 році на острові поселилися
                            німці-меноніти.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require_once('../views/sections/places-nearby.php');

require_once('../views/sections/latest-news.php');

require_once('../footer.php');