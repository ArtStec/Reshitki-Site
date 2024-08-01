<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <!-- <h2 data-aos="fade-down"><span>ООО "ГР-МЕТАЛ КОНСТРУКТ" </span>ВИРОБНИЦТВО РЕШІТЧАСТОГО НАСТИЛУ</h2> -->
                    <h1 data-aos="fade-down">РЕШІТЧАСТИЙ НАСТИЛ НА ЗАМОВЛЕННЯ</h1>
                    <p data-aos="fade-up">У нашому асортименті представлені різні види ґрат.
                        Ми пропонуємо пресовані та зварені грати з антикорозійним покриттям,
                        включаючи гаряче цинкування. По всім питанням телефонуйте за номером: <a href="tel:+380982709669">+38 (098) 270-96-69</a></p>
                    <a data-aos="fade-up" data-aos-delay="200" href="#features" class="btn-get-started">Детальніше</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url(<?= PATH_ASSETS; ?>img/hero-carousel/header-slide-1.jpg)"></div>
        <div class="carousel-item" style="background-image: url(<?= PATH_ASSETS; ?>img/hero-carousel/header-slide-3.jpg)"></div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section>
<!-- End Hero Section -->

<main id="main">

    <!-- ======= Order Modal ======= -->
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalTitle">Форма швидкого зв'язку</h5>
                    <a id="closeModal" type="button"><i class="fas fa-times"></i></a>
                </div>
                <div class="modal-body">
                    <form action="sendMail.php" method="POST" class="php-email-form">
                        <div class="row gy-3">
                            <p class="mb-0">Будь ласка, залиште ваші контактні дані, щоб ми могли вам допомогти з вашим замовленням та проконсультувати вас щодо обраного товару.</p>
                            <div class="col-md-12" id="productAlert">
                                <span class="form-control product-alert-block alert alert-success rounded-0 m-0">
                                    <i class="fa-solid fa-check"></i> <b></b>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control rounded-0 p-10" placeholder="Ім'я" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="phone" class="form-control phone-mask rounded-0 p-10" placeholder="Телефон" required>
                            </div>
                            <div class="col-md-12 d-none">
                                <input type="textarea" name="product" class="form-control rounded-0 p-10">
                            </div>
                            <div class="text-center d-none" id="customLoader">
                                <div class="lds-dual-ring"></div>
                            </div>
                            <div class="col-md-12 d-none" id="alertModal">
                                <div class="alert alert-danger mb-0 rounded-0" role="alert" style="padding: 12px;"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a id="closeModal" type="button" class="button-back-more">Назад</a>
                    <a id="submitModal" type="button" class="button-learn-more">Відправити</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= End Order Modal ======= -->

    <!-- ======= Get Started Section ======= -->
    <!-- <section id="get-started" class="get-started section-bg">
        <div class="container">

            <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <h3>Бажаєте отримати професійну консультацію чи оформити замовлення?</h3>
                        <p>Залишіть заявку прямо зараз, і наші фахівці зв'яжуться з вами у найкоротший термін!
                            Ми готові допомогти вам вибрати ідеальне рішення для Вашого проекту. Не проґавте можливість втілити в життя Ваші плани з нами!</p>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade">
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
                <!-- End Quote Form -->

            </div>

        </div>
    </section> -->
    <!-- End Get Started Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Решітчастий настил / Кріплення</h2>
                <p>Асортимент гратчастих настилів з різними типами та видами кріплення. Естетичні та функціональні рішення для промислових та приватних потреб.</p>
            </div>

            <ul class="nav nav-tabs row  g-2 d-flex">

                <li class="nav-item col-6">
                    <a class="nav-link active show text-center" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Зварний решітчастий настил</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item col-6">
                    <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Пресований решітчастий настил</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item col-6">
                    <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Стандартне кріплення "скоба"</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item col-6">
                    <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4>Кріплення "гак"</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <h3>Зварний решітчастий настил</h3>
                            <ul>
                                <li><i class="bi bi-1-square-fill"></i> Обрамляюча смуга</li>
                                <li><i class="bi bi-2-square-fill"></i> Несуча смуга</li>
                                <li><i class="bi bi-3-square-fill"></i> Сполучна смуга</li>
                            </ul>
                            <p class="fst-italic">Зварні комірчасті решітки виготовляються з несучої смуги, до якої спочатку пресуються і потім зварюються покривні прутки. 
                                Цей процес забезпечує міцність та стійкість конструкції, спрощує монтаж та обрізання надлишків. Виробляються ці решітки на німецькому обладнанні 
                                з антикорозійним покриттям у вигляді гарячого цинкування. У нашому асортименті представлені високоякісні решітки за найкращими цінами на українському ринку.
                            </p>
                            <ul class="d-inline-flex">
                                <li class="col-6"><i class="bi bi-check2-all"></i> З антикорозійним покриттям</li>
                                <li class="col-6"><i class="bi bi-check2-all"></i> Без антикорозійного покриття</li>
                            </ul>

                            <h2 class="card-title pricing-card-title mb-20">Ціна: від 1100 грн<small class="text-body-secondary fw-light">/м²</small></h2>

                            <button id="orderBtn" class="button-learn-more orderBtn">Замовити</button>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?= PATH_ASSETS; ?>img/welded-grid-decing.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End tab content item -->

                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Пресований решітчастий настил</h3>
                            <p class="fst-italic">Комірчасті Решітки пресованого типу виготовляються шляхом запресування поперечних смуг меншого перерізу в несучу смугу. 
                                Цей вид грат не поступається зварним решіткам за міцністю, але має свою перевагу у випадках, коли важливі естетичні характеристики конструкції. 
                                Грати можуть постачатися як з антикорозійним покриттям, так і без нього. У нас ви можете придбати недорогу сталеву підлогу.
                                Замовити металеві грати можна за телефоном <a href="tel:+380982709669">+38 (098) 270-96-69</a>
                            </p>
                            <ul class="d-inline-flex">
                                <li class="col-6"><i class="bi bi-check2-all"></i> З антикорозійним покриттям</li>
                                <li class="col-6"><i class="bi bi-check2-all"></i> Без антикорозійного покриття</li>
                            </ul>

                            <h2 class="card-title pricing-card-title mb-20">Ціна: від 1320 грн<small class="text-body-secondary fw-light">/м²</small></h2>

                            <button id="orderBtn" class="button-learn-more orderBtn">Замовити</button>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= PATH_ASSETS; ?>img/pressed-grating.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End tab content item -->

                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Стандартне кріплення "скоба"</h3>
                            <p class="fst-italic">Кріплення "скоба" є універсальним типом кріплення.
                                Використовується в основному до тих металоконструкцій, де є полиця (швеллер, куточок, двотавр, тавр).
                                Завдяки мінімальному виступу кріплення над поверхнею ґрат на 2 мм. це дає можливість безпечно пересуватися даною конструкцією.</p>
                            <ul class="d-inline-flex">
                                <li class="col-6"><i class="bi bi-check2-all"></i> З антикорозійним покриттям</li>
                                <li class="col-6"><i class="bi bi-check2-all"></i> Без антикорозійного покриття</li>
                            </ul>

                            <button id="orderBtn" class="button-learn-more orderBtn">Замовити</button>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= PATH_ASSETS; ?>img/mounting-bracket.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End tab content item -->

                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Кріплення "гак"</h3>
                            <p class="fst-italic">Кріплення "гак" - використовується в тих випадках, коли немає можливості використовувати кріплення "скоба", тобто де немає полиці для кріплення.</p>
                            <ul class="d-inline-flex">
                                <li class="col-6"><i class="bi bi-check2-all"></i> З антикорозійним покриттям</li>
                                <li class="col-6"><i class="bi bi-check2-all"></i> Без антикорозійного покриття</li>
                            </ul>

                            <button id="orderBtn" class="button-learn-more orderBtn">Замовити</button>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?= PATH_ASSETS; ?>img/mounting-hook.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End tab content item -->

            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Види обрамлення настилу</h2>
                <p>Підберіть обрамлення, яке відповідає Вашим потребам.</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="mb-10">
                            <img src="<?= PATH_ASSETS; ?>img/type-1.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Тип 1</h3>
                        <p>Стандартне обрамлення. Висота смуги обрамлення дорівнює висоті смуги, що несе.
                            Застосовується здебільшого при монтажі промислових майданчиків.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="mb-10">
                            <img src="<?= PATH_ASSETS; ?>img/type-2.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Тип 2</h3>
                        <p>Висота смуги обрамлення значно вища за несучу смугу.
                            Застосовується на промислових об'єктах для захисту від падіння інструментів та обмеження з'їзду з платформи.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="mb-10">
                            <img src="<?= PATH_ASSETS; ?>img/type-3.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Тип 3</h3>
                        <p>Висота смуги обрамлення нижче смуги, що несе, на 5мм.
                            Застосовується у разі монтажу настилу на опору із закругленим внутрішнім кутом.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="mb-10">
                            <img src="<?= PATH_ASSETS; ?>img/type-4.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Тип 4</h3>
                        <p>Висота смуги обрамлення значно вища за несучу смугу.
                            Застосовується для підйому настилу над опорою для прокладання комунікацій і т.п.</p>
                    </div>
                </div>
                <!-- End Service Item -->

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Сходинки</h2>
                <p>Наші фахівці допоможуть вам підібрати сходи, які відповідають им потребам і бюджету.</p>
            </div>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <h3>Сходинки з решітчастого настила</h3>
                            <p class="fst-italic">Сходинки з решітчастого настилу є дуже практичними та надійними конструкціями.
                                Дані сходи дозволяють легко монтувати прямі та гвинтові сходові марші.
                                Протиковзкі властивості дають можливість безпечно пересуватися сходами на будь-якій висоті.
                                Продумана конструкція дозволяє монтувати сходи без застосування зварювального обладнання.
                            </p>
                            <ul class="d-inline-flex">
                                <li class="col-6"><i class="bi bi-check2-all"></i> З антикорозійним покриттям</li>
                                <li class="col-6"><i class="bi bi-check2-all"></i> Без антикорозійного покриття</li>
                            </ul>

                            <h2 class="card-title pricing-card-title mb-20">Ціна: від 250 грн<small class="text-body-secondary fw-light">/м²</small></h2>

                            <button id="orderBtn" class="button-learn-more orderBtn">Замовити</button>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?= PATH_ASSETS; ?>img/step.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End tab content item -->

            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

            <div class="section-header">
                <h2>Порядок та умови покупки</h2>
            </div>

            <div class="row gy-4">

                <div class="col-md-3">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-telephone color-blue flex-shrink-0"></i>
                        <div>
                            <span>Крок 1</span>
                            <p>Залишіть запит на сайті або за телефоном <a href="tel:+380982709669">+38 (098) 270-96-69</a>.</p>
                        </div>
                    </div>
                </div>
                <!-- End Stats Item -->

                <div class="col-md-3">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-file-text color-orange flex-shrink-0"></i>
                        <div>
                            <span>Крок 2</span>
                            <p>Складаємо комерційну пропозицію та надсилаємо Вам.</p>
                        </div>
                    </div>
                </div>
                <!-- End Stats Item -->

                <div class="col-md-3">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-file-earmark-check color-green flex-shrink-0"></i>
                        <div>
                            <span>Крок 3</span>
                            <p>Оформляємо документи та проводимо угоду (10-20 днів).</p>
                        </div>
                    </div>
                </div>
                <!-- End Stats Item -->

                <div class="col-md-3">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-truck color-pink flex-shrink-0"></i>
                        <div>
                            <span>Крок 4</span>
                            <p>Доставляємо Ваше замовлення у вказане місце.</p>
                        </div>
                    </div>
                </div>
                <!-- End Stats Item -->

            </div>

        </div>
    </section>
    <!-- End Stats Counter Section -->

</main><!-- End #main -->