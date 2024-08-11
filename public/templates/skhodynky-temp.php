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
    <?php var_dump($page); ?>

    <!-- Skhodynky Section -->
    <section id="<?= $page['current']; ?>" class="<?= $page['current']; ?>">

        

    </section>
    <!-- End Skhodynky Section -->

</main>
<!-- End #main -->