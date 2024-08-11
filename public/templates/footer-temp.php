        <!-- Footer -->
        <footer id="footer" class="footer">

            <div class="footer-legal text-center position-relative mb-20">
                <div class="row">
                    <div class="col-lg-6">Адреса: <?= $page['site']['address']; ?></div>
                    <div class="col-lg-6">Телефон: <a href="tel:<?= $page['site']['phone']; ?>">+38 (098) 270-96-69</a></div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; <strong><span>MPK</span></strong>. Всі права захищені
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="/<?= PATH_ASSETS; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>vendor/aos/aos.js"></script>
        <script src="/<?= PATH_ASSETS; ?>vendor/glightbox/js/glightbox.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>vendor/purecounter/purecounter_vanilla.js"></script>

        <!-- Template Main JS File -->
        <script src="/<?= PATH_ASSETS; ?>js/main-1.js"></script>
        <script src="/<?= PATH_ASSETS; ?>js/jquery-3.7.1.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>js/jquery.inputmask.min.js"></script>
        <script src="/<?= PATH_ASSETS; ?>js/mail-validate.js?<?= time(); ?>"></script>
        <script src="/<?= PATH_ASSETS; ?>js/all.js?<?= time(); ?>"></script>

    </body>

</html>