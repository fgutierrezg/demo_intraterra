<?php
/* Template Name: Página Gestión Patrimonial */
get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header-service-asset-managment py-5 mb-5 d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Gestión Patrimonial</h1>
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

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-8 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">¿Qué ofrecemos?</h6>
                        <h1 class="mb-4">Asesoría experta acorde a tus objetivos y perfil.</h1>
                        <p class="">Un equipo profesional y responsable de ofrecer las mejores alternativas de inversión a nivel local e internacional para nuestros clientes personas.</p>
                   
                        <h6 class="text-primary mt-5 mb-4">¿Cómo lo conseguimos?</h6>
                        <p class=""><strong>INTRATERRA Activos S.A.</strong> Administradora General de Fondos está enfocada a la administración de fondos de Inversión para clientes institucionales y profesionales, utilizando fondos tipo “Feeders Funds” y “Advisors”, ofreciendo de esta manera productos de inversión innovadores que permiten diversificar el portafolio de sus clientes, comprometiéndose a ofrecer un retorno superior en sus inversiones.</p>
                        <a href="<?php echo home_url('/contacto'); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Contacta con un asesor <i class="fa fa-headphones text-white"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img alt="Escritorio plan de inversión" class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/plan-desktop.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

<?php get_footer(); ?>