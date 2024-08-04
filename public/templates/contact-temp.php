<main id="main">

    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= PATH_ASSETS; ?>img/hero-carousel/header-slide-1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Контакти</h2>
            <ol>
                <li><a href="/">Головна</a></li>
                <li>Контакти</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->
    <?php var_dump($page); ?>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Наша Адреса</h3>
                        <p>04594, Київська обл., с. Княжичі, вул. Слави, 19</p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:+contact@reshitki.com">contact@reshitki.com</a></p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Телефон</h3>
                        <p><a href="tel:+380982709669">+38 (098) 270-96-69</a></p>
                    </div>
                </div>
                <!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">

                <!-- Google Maps -->
                <div class="col-lg-6 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24172.16070944722!2d30.752826570696698!3d50.445097589905686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4dc7c3923e9c1%3A0x23f512a2809b7ef9!2z0YPQuy4g0KHQu9Cw0LLRiw!5e0!3m2!1sru!2sua!4v1709485940117!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Google Maps -->

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <form action="sendMail.php" method="POST" class="php-email-form">
                        <h3>Зв'язатися з нами</h3>
                        <p>Заповніть форму нижче, щоб зв'язатися із нашою командою.
                            Ми готові відповісти на всі Ваші запитання та надати необхідну інформацію про наші продукти та послуги.</p>
                        <div class="row gy-3">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Ім'я" required>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control phone-mask" name="phone" placeholder="Телефон" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Коментар"></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Надсилання</div>
                                <div class="error-message"></div>
                                <div class="sent-message"></div>

                                <button class="mt-10" type="submit">Відправити запит</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->