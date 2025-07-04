<?php
/* Template Name: Página Proyectos */
get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-proyects py-5 mb-5 d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Nuestros proyectos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Servicios</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Gestión Patrimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <?php get_template_part('template-parts/projects'); ?>

<?php get_footer(); ?>