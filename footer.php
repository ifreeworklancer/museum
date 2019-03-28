</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-navigate">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                    <a href="#" class="logo">
                        <img src="../../images/icon/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <ul class="footer-nav-list">
                        <?php
                        $count;
                        foreach ($nav as $key => $value) {
                            echo
                                '<li><a href="' . $key . '"' . '>' . $value . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="footer-contacts">
                        <div class="footer-contacts-item">
                            <div class="footer-contacts-item__title">
                                Контактні телефони:
                            </div>
                            <div class="footer-contacts-item-description">
                                <ul>
                                    <li><a href="tel:+380962541209">096 254 12 09</a></li>
                                    <li><a href="tel:+380962541209">096 254 12 09</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-contacts-item">
                            <div class="footer-contacts-item__title">
                                Email:
                            </div>
                            <div class="footer-contacts-item-description">
                                <ul>
                                    <li><a href="mailto:zapovidnik@ukr.net">zapovidnik@ukr.net</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyr">
        <div class="container">
            <div class="row flex-column flex-sm-row justify-content-between align-items-center px-3">
                <div class="footer-copyr-item mb-3 mb-sm-0">
                    2019 © Усі права захищені
                </div>
                <ul class="social-list social-list--white mb-3 mb-sm-0">
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
                <div class="footer-copyr-item">
                    Веб-розробка <a href="#">ImpressionBureau</a> 2019
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../../dist/app.js"></script>
</body>

</html>