    <!-- Projects Start -->
  

        <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Nuestros proyectos</h6>
                <h1 class="mb-4">Nuestros proyectos más destacados</h1>
            </div>
            <div class="row g-4">
            <?php
        $args = array(
            'post_type'      => 'project',
            'posts_per_page' => -1, // Todos los proyectos
            'post_status'    => 'publish'
        );
        $projects = new WP_Query($args);

        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $title = get_the_title();
                $excerpt = get_the_excerpt(); // Puedes usar un campo personalizado si quieres más control
                $link = get_permalink();
        ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <?php if ($featured_img): ?>
                            <a href="<?php echo esc_url($link); ?>">
                                <img alt="Imagen destacada del proyecto" class="img-fluid" src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr($title); ?>">
                            </a>
                        <?php endif; ?>
                        <div class="position-relative p-4 pt-2">
                            <h4 class="mb-3 text-center"><?php echo esc_html($title); ?></h4>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hay proyectos disponibles.</p>';
        endif;
        ?>


                
        </div>
    </div>
</div>

    <!-- Projects End -->