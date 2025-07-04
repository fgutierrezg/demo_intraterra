<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Banco de Inversiones en Curicó: Loteos, Venta de Terrenos, Subdivisión, Asesoría de Inversión" name="description">
    <meta name="keywords" content="curico, proyectos, inversión, inversiones, loteo, venta, terrenos, venta de terrenos, subdivisión, banco de inversiones">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/icon_big.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="text-light">Manuel Montt 357, Oficina 708, Curicó</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="text-light">Lunes - Viernes : 09.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small class="text-light">+56 75 2 414833 / +56 9 42651531</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/intra.terra.1"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.x.com/"><i class="fas fa-times"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.linkedin.com/in/marcelo-morales-olivares-1743736b/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-1">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">

        <!-- Logo + Texto -->
        <a href="<?php echo home_url('/'); ?>" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid" alt="Intraterra Logo" style="max-height: 60px; width: auto;" src="<?php echo get_template_directory_uri(); ?>/img/icon_big.png">
            <span class="d-none d-sm-inline h4 mb-0 text-primary">Banco de Inversiones</span>
        </a>

        <!-- Botón hamburguesa -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
              <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => false,
                'menu_class' => 'navbar-nav ms-auto p-4 p-lg-0',
                'fallback_cb' => false,
                'depth' => 2,
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
    ?>
            <a href="<?php echo home_url('/contacto/'); ?>" class="btn btn-primary rounded-1 py-2 px-lg-5 d-none d-lg-block" aria-label="Contáctanos por WhatsApp" 
    data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top"  data-bs-container="body" data-bs-content="Contáctanos por WhatsApp"><i class="bi bi-whatsapp fs-2"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
