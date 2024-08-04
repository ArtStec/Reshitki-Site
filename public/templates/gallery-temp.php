<main id="main">

    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= PATH_ASSETS; ?>img/hero-carousel/header-slide-1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2><?= $page['title']; ?></h2>
            <ol>
                <li><a href="/">Головна</a></li>
                <li><?= $page['title']; ?></li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Contact Section -->
    <section id="projects" class="projects">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Наші роботи</h2>
                <p>Тут ви знайдете фото з реалізованих проектів, які надихнуть вас та допоможуть зробити правильний вибір.</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <!-- Projects Filters -->
                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Усі</li>
                    <li data-filter=".filter-steps">Сходинки</li>
                    <li data-filter=".filter-pressed-grating">Пресований решітчастий настил</li>
                    <li data-filter=".filter-welded-grid-decing">Зварний решітчастий настил</li>
                </ul>
                <!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-steps">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/steps-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Сходинки 1</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/steps-1.jpg" title="Сходинки 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-pressed-grating">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Пресований решітчастий настил 1</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-1.jpg" title="Пресований решітчастий настил 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-welded-grid-decing">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Зварний решітчастий настил 1</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-1.jpg" title="Зварний решітчастий настил 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-steps">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/steps-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Сходинки 2</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/steps-2.jpg" title="Сходинки 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-pressed-grating">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Пресований решітчастий настил 2</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-2.jpg" title="Пресований решітчастий настил 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-welded-grid-decing">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Зварний решітчастий настил 2</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-2.jpg" title="Зварний решітчастий настил 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-steps">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/steps-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Сходинки 3</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/steps-3.jpg" title="Сходинки 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-pressed-grating">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Пресований решітчастий настил 3</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/pressed-grating-3.jpg" title="Пресований решітчастий настил 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-welded-grid-decing">
                        <div class="portfolio-content h-100">
                            <img src="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Зварний решітчастий настил 3</h4>
                                <a href="/<?= PATH_ASSETS; ?>img/projects/welded-grid-decing-3.jpg" title="Зварний решітчастий настил 3" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Projects Item -->

                </div>
                <!-- End Projects Container -->

            </div>

        </div>

    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->