<!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Dirección</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Manuel Montt 357, Oficina 708, Curicó</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+56 75 2 414833 / +56 9 42651531</p>
                    <a href="mailto:intraterra@intraterra.cl" class="mb-2 d-block text-white">
                        <i class="fa fa-envelope me-3"></i>intraterra@intraterra.cl
                    </a>

                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href="https://www.x.com/"><i class="fas fa-times"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href="https://www.facebook.com/intra.terra.1"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href="https://www.linkedin.com/in/marcelo-morales-olivares-1743736b/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Enlaces rápidos</h5>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container' => false,
                            'menu_class' => 'nav flex-column',
                            'link_before' => '<span class="btn btn-link text-start">',
                            'link_after' => '</span>',
                            'fallback_cb' => false
                        ));
                        ?>
                </div>

                <?php get_template_part('template-parts/project-gallery'); ?>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Boletín</h5>
                    <p>Ingresa tu email para no perderte ninguna novedad</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Tu email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Suscribirse</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="<?php echo home_url('/'); ?>">Intraterra</a> <?php echo date('Y'); ?>, Todos los derechos reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Diseño por <a href="https://www.linkedin.com/in/fjgutierrezg/">Francisco Gutiérrez</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Botón trading -->
    <a href="#" 
    class="btn btn-lg btn-lg-square rounded-circle trading-float-btn text-white" 
    style="position: fixed; bottom: 200px; left: 5px; z-index: 9999;background-color: #0E036B;" aria-label="Trading" 
    data-bs-toggle="modal" data-bs-target="#tradingModal">
        <i class="bi bi-graph-up"></i>
    </a>

    <!-- Botón noticias -->
    <a href="<?php echo home_url('/noticias'); ?>" 
    class="btn btn-lg btn-lg-square rounded-circle text-white" 
    style="position: fixed; bottom: 140px; left: 5px; z-index: 9999;background-color:#cc0d0d;" aria-label="Noticias económicas" 
    data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top"  data-bs-container="body" data-bs-content="Noticias económicas">
        <i class="bi bi-newspaper"></i>
    </a>


    <!-- Botón subir -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" 
    style="; position: fixed; bottom: 50px; right: 20px; z-index: 9999;">
    <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Botón WhatsApp -->
  
    <a href="https://wa.me/56942651531?text=Me%20gustaria%20saber%20mas%20de%20sus%20servicios" target="_blank" rel="noopener" 
    class="btn btn-lg btn-success btn-lg-square rounded-circle whatsapp-float" 
    aria-label="Contáctanos por WhatsApp" 
    data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top"  data-bs-container="body" data-bs-content="Contáctanos por WhatsApp">
    <i class="bi bi-whatsapp"></i>
    </a>


     <?php get_template_part('template-parts/modal-footer'); ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

   <?php wp_footer(); ?>
</body>

</html>