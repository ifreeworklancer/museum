<?php

require_once('../store.php');

require_once('../header-secondary.php');

?>

    <!-- Single Article -->
    <section id="single-article" class="secondary-page">
        <div class="secondary-intro" style="background-image:url('<?= $single_article['intro_bg_img']; ?>');">
            <div class="container-fluid">
                <div class="row offset-sm-1">
                    <div class="col-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Головна</a></li>
                                <li class="breadcrumb-item"><a href="#">Новини</a></li>
                                <li class="breadcrumb-item active">Назва новини</li>
                            </ol>
                        </nav>
                        <div class="section-description section-description--start">
                            <h2 class="title text-white">
                                <?= $single_article['main_title']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <article class="secondary-content-item">
                            <header class="article-header">
                                <div class="article-slider">
                                    <?php foreach ($single_article['slider'] as $item) : ?>
                                        <div class="article-slider-item"
                                             style="background-image: url('<?= $item; ?>');"></div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="slider-arrow">
                                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev--article">
                                        <svg width="20" height="20">
                                            <use xlink:href="#slider-arrow-prev"></use>
                                        </svg>
                                    </div>
                                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next--article">
                                        <svg width="20" height="20">
                                            <use xlink:href="#slider-arrow-next"></use>
                                        </svg>
                                    </div>
                                </div>
                            </header>
                            <div class="article-content">
                                <div class="data-in-article">
                                    <?= $single_article['article_content_data']; ?>
                                </div>
                                <h3>
                                    <?= $single_article['article_content_title']; ?>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur corporis
                                    dignissimos eligendi fuga iusto maxime modi mollitia neque odio placeat quibusdam,
                                    repudiandae sed veniam veritatis, vitae voluptatem. Architecto cumque earum eveniet
                                    facilis illum minima neque provident quaerat veritatis voluptates.</p>
                                <p>A accusantium ad asperiores beatae consequuntur, cum cumque, delectus dicta dolor
                                    eius ex
                                    fugit hic ipsum laudantium maxime minus nemo odit optio perspiciatis quaerat quas
                                    quasi
                                    qui quisquam ratione saepe sed suscipit tempora, vitae voluptas voluptatem? Iure
                                    natus
                                    neque soluta!</p>
                                <p>Alias amet animi aut beatae commodi corporis earum esse eum fugit illum ipsam iure
                                    magni
                                    maiores natus necessitatibus nobis nulla odit pariatur perferendis provident, quidem
                                    quod ratione reiciendis, repellat repellendus reprehenderit repudiandae sequi sint
                                    totam
                                    ullam ut velit veniam vitae?</p>
                                <p>Fugiat magni praesentium repellendus similique temporibus. Amet commodi dolorum harum
                                    impedit nam nemo, non quas quibusdam quidem recusandae repellat suscipit tempore ut
                                    vitae, voluptas! At, dignissimos incidunt iure labore laborum officia quos
                                    temporibus
                                    ut. Architecto beatae excepturi libero necessitatibus ratione.</p>
                                <p>Alias, asperiores doloremque earum et excepturi facere id in magnam magni, neque
                                    nobis
                                    sint sit, temporibus? Animi beatae cumque error facilis, illum, incidunt ipsa itaque
                                    laborum maxime minima neque non, officia possimus quia quibusdam rerum sint
                                    voluptatum.
                                    Ab, eveniet, voluptas?</p>
                                <p>Adipisci aperiam dolores earum eligendi et fugiat fugit illum laboriosam libero
                                    molestias
                                    non, nulla obcaecati omnis quasi quos sint voluptas! Doloremque nostrum provident
                                    velit
                                    veniam voluptatibus. Animi, aperiam cumque cupiditate dignissimos dolor dolores ex
                                    exercitationem maxime mollitia natus, porro sapiente?</p>
                                <p>Asperiores dolor eaque iure minima perferendis repellendus ullam. A ab amet
                                    architecto
                                    aut blanditiis, delectus distinctio doloribus et eum excepturi explicabo illo,
                                    incidunt
                                    ipsum iste laudantium libero modi neque nostrum odit pariatur possimus quas quis sed
                                    sequi tenetur vel vero!</p>
                                <p>Ad, aliquid asperiores at dolor doloremque ea exercitationem expedita fugiat incidunt
                                    iusto mollitia nesciunt, odio quasi, quod vitae. Consequatur consequuntur corporis
                                    ex
                                    fuga incidunt molestias optio repellendus, sapiente soluta velit. Assumenda commodi
                                    consectetur, corporis molestiae necessitatibus officiis praesentium quaerat
                                    voluptas!</p>
                            </div>
                            <footer class="article-footer position-relative d-flex flex-column flex-sm-row align-items-center">
                                <div class="article-footer__title">
                                    Поділитися в соц.мережах:
                                </div>
                                <ul class="social-list social-list--gray">
                                    <li>
                                        <a href="#">
                                            <svg width="20" height="20">
                                                <use xlink:href="#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="20" height="20">
                                                <use xlink:href="#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="20" height="20">
                                                <use xlink:href="#youtube-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php


require_once('../views/sections/latest-news.php');

require_once('../footer.php');