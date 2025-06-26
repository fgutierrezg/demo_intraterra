<?php
/* Template Name: Página de Contacto */
get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3  mb-3 animated slideInDown">Contacto</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="<?php echo home_url('/inicio/'); ?>">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
            <?php get_template_part('template-parts/form-contact'); ?>
             <?php get_template_part('template-parts/location-map'); ?>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php get_footer(); ?>