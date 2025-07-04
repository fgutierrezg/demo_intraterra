<?php
/* Template Name: Página Asesoría de inversiones */
get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header-service-investement-advice py-5 mb-5 d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Asesoría de inversiones</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Servicios</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Asesoría de inversiones</li>
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
                        <h6 class="text-primary mb-4">¿Qué ofrecemos?</h6>

                            <div class="row g-4">
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">1</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Evaluación de empresas</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                   <span class="badge bg-primary rounded-pill">2</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Evaluación de proyectos</p>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">3</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Análisis y planificación financiera</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">4</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Asesoría en estructuración​</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                   <span class="badge bg-primary rounded-pill">5</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Fusiones de empresas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                   <span class="badge bg-primary rounded-pill">6</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Estrategia y operaciones de entidades financieras</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="text-primary mt-5 mb-4">¿Cómo lo conseguimos?</h6>

                        <h1 class="mb-4">Estrategía de cobertura.</h1>
                        <div class="row g-4">
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">1</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Valorización del riesgo financiero</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                   <span class="badge bg-primary rounded-pill">2</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Estrategia de cobertura</p>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">3</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Estructuración de derivados</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill">4</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Trading de futuros, derivados y opciones</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                   <span class="badge bg-primary rounded-pill">5</span>
                                    <div class="ms-4">
                                        <p class="mb-0">Administración de cartera</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                               <div class="col-12 col-sm-6 mt-2">

     <a href="<?php echo home_url('/contacto'); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Contacta con un asesor <i class="fa fa-headphones text-white"></i></a>
    </div>
                    </div>
                </div>

                <div class="col-lg-4 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img alt="Asesores financieros y trading" class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/financial-trading-advisors.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

<?php get_footer(); ?>