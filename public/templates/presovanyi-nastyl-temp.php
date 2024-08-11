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

    <!-- Presovanyi nastyl Section -->
    <section id="<?= $page['current']; ?>" class="<?= $page['current']; ?> project-details">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-between gy-4 mb-20">

                <div class="position-relative h-100 col-md-6">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= PATH_ASSETS; ?>img/pressed-grating.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="col-md-6">
                    <div class="portfolio-description">
                        <h1>Пресований решітчастий настил</h1>
                        <div class="testimonial-item mb-0">
                            <p style="padding-bottom: 35px;">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>

                        <h2 class="card-title pricing-card-title mb-0">Ціна: від 1320 грн<small class="text-body-secondary fw-light">/м²</small></h2>

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
                        Комірчасті Решітки пресованого типу виготовляються шляхом запресування поперечних смуг меншого перерізу в несучу смугу. 
                        Цей вид грат не поступається зварним решіткам за міцністю, але має свою перевагу у випадках, коли важливі естетичні характеристики конструкції. 
                        Грати можуть постачатися як з антикорозійним покриттям, так і без нього. У нас ви можете придбати недорогу сталеву підлогу.
                    </p>
                </div>
            </div>

        </div>

    </section>
    <!-- End Presovanyi nastyl Section -->

</main>
<!-- End #main -->