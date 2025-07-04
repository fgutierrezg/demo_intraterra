

    <?php get_header(); ?>

    <!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">

        <?php
            $items = get_post_meta(get_option('page_on_front'), '_home_carousel_videos', true);
            if (!empty($items)) :
                foreach ($items as $item) :
                    $video_url = wp_get_attachment_url($item['video']);
                    $dot_url = wp_get_attachment_image_url($item['dot'], 'thumbnail');
                    $title = esc_html($item['title']);
                    $button = esc_html($item['button']);
                    $link = esc_url(home_url($item['link']));
        ?>
            <div class="owl-carousel-item position-relative" data-dot="<img src='<?php echo esc_url($dot_url); ?>'>">
                <video autoplay muted loop playsinline class="w-100 h-100 object-cover">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h2 class="display-2 text-white animated slideInDown"><?php echo $title; ?></h2>
                                <a href="<?php echo $link; ?>" class="btn btn-primary rounded-pill py-3 px-5 animated"><strong><?php echo $button; ?></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
        endif;
        ?>

    </div>
</div>
<!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img alt="Imagen dinero sustentable" class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/money_green.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Sobre nosotros</h6>
                        <h1 class="mb-4">Somos una empresa con 10 años de experiencia en administración y asesorías en inversiones y patrimonios.</h1>
                        <p>Nuestra misión se enfoca en lograr el bienestar de nuestros clientes a través del estudio de alternativas de inversión minimizando los riesgos. De esta forma pretendemos concentrar una amplia cartera de alternativas a lo largo de todo el país.</p>
                        <a href="<?php echo home_url('/servicios'); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">15</h1>
                    </div>
                    <h5 class="mb-3">Clientes satisfechos</h5>
                     <span>Empresas e inversionistas que confiaron en nuestro equipo para planificar y ejecutar soluciones financieras personalizadas.</span>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">15</h1>
                    </div>
                    <h5 class="mb-3">Proyectos realizados</h5>
                <span>Iniciativas desarrolladas en distintos sectores, incluyendo energía, agroindustria y tecnologías sostenibles.</span>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">10</h1>
                    </div>
                    <h5 class="mb-3">Años de experiencia</h5>
                     <span>Trayectoria en asesoría financiera, estructuración de inversiones y evaluación de proyectos de alto impacto.</span>
                </div>
        
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Service Start -->
    <?php get_template_part('template-parts/services'); ?>
    <!-- Service End -->

    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img alt="Vista panorámica terreno" class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/superior_view_terrain.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                 <?php get_template_part('template-parts/form-contact'); ?>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial End -->
     <?php get_footer(); ?>
