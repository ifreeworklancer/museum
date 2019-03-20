<!-- About -->
<div id="about">
    <div class="container-fluid">
        <div class="row offset-lg-1">
            <div class="col-lg-6 px-0 px-lg-2">
                <div class="about-img" style="background-image:url('<?= $about['image']; ?>');"></div>
            </div>
            <div class="col-sm-10 col-lg-4 mx-auto mx-lg-0">
                <div class="about-item">
                    <h2 class="mb-2">
                        <?= $about['title']; ?>
                    </h2>
                    <p>
                        <?= $about['description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>