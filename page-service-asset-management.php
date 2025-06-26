<?php
/* Template Name: Página Gestión Patrimonial */
get_header(); ?>

 <!-- Page Header Start -->
    <div class="container-fluid page-header-service-fund-managment py-5 mb-5 d-flex align-items-center justify-content-center">
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
                        <p class=""><strong>Generamos una relación de confianza y te orientamos según tus necesidades:</strong> Nuestro equipo de gestores patrimoniales asesora a personas naturales, fundaciones, sociedades de inversión y family offices.</p>                         
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Calidad</p>
                                        <h5 class="mb-0">Garantizada</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Asesores</p>
                                        <h5 class="mb-0">Expertos</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Consulta</p>
                                        <h5 class="mb-0">Sin compromiso</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-headphones text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Soporte</p>
                                        <h5 class="mb-0">Multiplataforma</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/financial-advisors.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

<?php get_footer(); ?>