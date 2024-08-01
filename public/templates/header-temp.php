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
        </script>
        <script>
            gtag('event', 'conversion_event_page_view', {
            });
        </script>
        <script>
            function gtagSendEvent() {
                gtag('event', 'conversion_event_submit_lead_form', {
                });
                return false;
            }
            function gtagClickEvent() {
                gtag('event', 'conversion_event_outbound_click', {
                });
                return false;
            }
        </script>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?= $page['info']['title']; ?></title>
        <meta name="description" content="<?= $page['info']['description']; ?>">
        <meta name="keywords" content="решітчастий настил, зварний настил, пресований настил, сходи з настилу, металевий настил, настил для промисловості, настил для приватного використання, сталевий решітчастий настил, алюмінієвий решітчастий настил, нержавіючий решітчастий настил, настили для террас, решетчатый настил, сварной настил, прессованный настил, лестницы из настила, металлический настил, настил для промышленности, настил для частного использования, стальной решетчатый настил, алюминиевый решетчатый настил, нержавеющий решетчатый настил, настилы для террас">
        <meta content="" name="description">
        <meta content="" name="keywords">

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
                    <h1>MPK<span>.</span></h1>
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <?php foreach ($page['all'] as $page): ?>
                            <li><a href="/" class="active">Головна</a></li>
                            <li><a href="/gallery">Галерея</a></li>
                            <li><a href="/contact">Контакти</a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <!-- .navbar -->

            </div>
        </header>
        <!-- End Header -->