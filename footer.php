
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Dirección</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Manuel Montt 357, Oficina 708, Curicó</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+56 75 2 414833 / +56 9 42651531</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>intraterra@intraterra.cl</p>
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

                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Galería de Proyectos</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/gallery-6.jpg" alt="">
                        </div>
                    </div>
                </div>
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

   <?php wp_footer(); ?>
</body>

</html>