<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZD57HNSTBT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            
            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-ZD57HNSTBT');

            function sendGtagEvent(eventName) {
                gtag('event', eventName);
                return false;
            }

            function gtagSendEvent() {
                return sendGtagEvent('event_submit_lead_form');
            }

            function gtagClickEvent() {
                return sendGtagEvent('event_event_outbound_click');
            }

            sendGtagEvent('event_page_view');
        </script>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?= $page['info']['title'] . ' | MPK'; ?></title>
        <meta name="description" content="<?= $page['info']['description']; ?>">
        <meta name="keywords" content="настил, решітчастий настил, зварни йрешітчастий настил, пресований настил, сходи з настилу, металевий настил, 
            настил для промисловості, настил для приватного використання, сталевий решітчастий настил, алюмінієвий решітчастий настил, 
            нержавіючий решітчастий настил, настили для террас, решетчатый настил, сварной настил, прессованный настил, 
            лестницы из настила, металлический настил, настил для промышленности, настил для частного использования, стальной решетчатый настил, 
            алюминиевый решетчатый настил, нержавеющий решетчатый настил, настилы для террас, купити настил, замовити настил, купить настил, заказать настил, 
            решетки на заказ, решітки на замовлення, настил на замовлення, настил на заказ">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/<?= PATH_ASSETS; ?>img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/<?= PATH_ASSETS; ?>img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/<?= PATH_ASSETS; ?>img/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/modal/">
        <link href="/<?= PATH_ASSETS; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/<?= PATH_ASSETS; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/<?= PATH_ASSETS; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="/<?= PATH_ASSETS; ?>vendor/aos/aos.css" rel="stylesheet">
        <link href="/<?= PATH_ASSETS; ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/<?= PATH_ASSETS; ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/<?= PATH_ASSETS; ?>css/main.css?<?= time(); ?>" rel="stylesheet">
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <div style="font-size: 24px;font-weight: 700;color: #fff;margin-bottom: 0;font-family: var(--font-primary);">MPK<span style="color: var(--color-primary);">.</span></div>
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <?php // print_r($page['current']); ?>
                        <?php foreach ($page['all'] as $key => $data): ?>
                            <?php if ($data['public']): ?>
                                <li><a href="/<?= $key;?>" class="<?= ($key === $page['current']) ? 'active' : ''; ?>"><?= ($key === 'index') ? 'Головна' : $data['title']; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <!-- .navbar -->

            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Order Modal ======= -->
        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalTitle">Форма швидкого зв'язку</h5>
                        <a id="closeModal" type="button"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="modal-body">
                        <form action="/<?= PATH_APP; ?>main.php" method="POST" class="php-email-form">
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