<main id="main">

    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= PATH_ASSETS; ?>img/hero-carousel/header-slide-1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2><?= $page['info']['title']; ?></h2>
            <ol>
                <li><a href="/">Головна</a></li>
                <li><?= $page['info']['title']; ?></li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->
    <?php // var_dump($page); ?>

    <!-- Zvarnyi nastyl Section -->
    <section id="<?= $page['current']; ?>" class="<?= $page['current']; ?> project-details">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-between gy-4 mb-20">

                <div class="position-relative h-100 col-md-6">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= PATH_ASSETS; ?>img/welded-grid-decing.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?= PATH_ASSETS; ?>img/welded-grid-decing-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="col-md-6">
                    <div class="portfolio-description">
                        <span style="font-family: var(--font-primary);font-size: 2.5rem;margin-top: 0;margin-bottom: .5rem;font-weight: 500;line-height: 1.2;">Зварний решітчастий </span><h1 style="display: contents;">настил</h1>
                        <ul>
                            <li><i class="bi bi-1-square-fill"></i> Обрамляюча смуга</li>
                            <li><i class="bi bi-2-square-fill"></i> Несуча смуга</li>
                            <li><i class="bi bi-3-square-fill"></i> Сполучна смуга</li>
                        </ul>
                        <div class="testimonial-item mb-0">
                            <p style="padding-bottom: 35px;">
                                <i class="bi bi-info-circle quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            </p>
                        </div>

                        <h2 class="card-title pricing-card-title mb-0">Ціна: 1199 грн<small class="text-body-secondary fw-light">/м²</small></h2>

                        <ul class="d-inline-flex" style="width: -moz-available;">
                            <li class="col-6"><i class="bi bi-check-circle"></i> З антикорозійним покриттям</li>
                            <li class="col-6"><i class="bi bi-check-circle"></i> Без антикорозійного покриття</li>
                        </ul>
                        
                        <button id="orderBtn" class="button-learn-more orderBtn" style="width: -moz-available;">Замовити</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Опис</h2>
                    <p>
                        Зварні комірчасті решітки виготовляються з несучої смуги, до якої спочатку пресуються і потім зварюються покривні прутки. 
                        Цей процес забезпечує міцність та стійкість конструкції, спрощує монтаж та обрізання надлишків. Виробляються ці решітки на німецькому обладнанні 
                        з антикорозійним покриттям у вигляді гарячого цинкування. У нашому асортименті представлені високоякісні решітки за найкращими цінами на українському ринку.
                    </p>
                </div>
            </div>
            
            <div class="text-center my-3">
                <h1>Інші товари</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= PATH_ASSETS; ?>img/pressed-grating.jpg" class="card-img-top img-fluid" alt="<?= $page['all']['presovanyi-nastyl']['title']; ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $page['all']['presovanyi-nastyl']['title']; ?></h5>
                                <div class="text-right">
                                    <a href="/presovanyi-nastyl" class="btn btn-primary button-learn-more">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= PATH_ASSETS; ?>img/step.jpg" class="card-img-top img-fluid" alt="<?= $page['all']['skhodynky']['title']; ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $page['all']['skhodynky']['title']; ?></h5>
                                <div class="text-right">
                                    <a href="/skhodynky" class="btn btn-primary button-learn-more">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Skhodynky Section -->

</main>
<!-- End #main -->