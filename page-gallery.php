<?php
/* Template Name: Multimedia */
get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header-multimedia py-5 mb-5 d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <h1 class="display-3 mb-3 animated slideInDown">Multimedia</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Galería</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Multimedia</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <?php
$content = get_the_content();
$blocks = parse_blocks($content);
?>

<div class="container py-5"> 
  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <h6 class="text-primary">Nuestro contenido</h6>
    <h1 class="mb-4">Revisa el material de nuestros proyectos</h1>
  </div>

  <div class="row wow fadeInUp" data-wow-delay="0.3s">
    <div class="col-12 text-center">
      <ul class="list-inline mb-5" id="portfolio-flters">
        <li class="mx-2 active" data-filter="*">Todos</li>
        <li class="mx-2" data-filter=".images">Imágenes</li>
        <li class="mx-2" data-filter=".videos">Videos</li>
      </ul>
    </div>
  </div>

  <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
    <?php
    foreach ($blocks as $block) {

        // GALERÍA
        if ($block['blockName'] === 'core/gallery') {
            if (isset($block['attrs']['ids']) && is_array($block['attrs']['ids'])) {
                foreach ($block['attrs']['ids'] as $img_id) {
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                    $caption = wp_get_attachment_caption($img_id);
                    
               echo '
    <div class="col-12 col-md-6 col-lg-4 portfolio-item images">
        <div class="gallery-image-wrapper position-relative overflow-hidden rounded">
            <a href="' . esc_url($img_url) . '" data-lightbox="gallery" data-title="' . esc_attr($caption ?: $img_alt) . '">
                <img src="' . esc_url($img_url) . '" class="img-fluid rounded w-100" alt="' . esc_attr($img_alt) . '">';
                if ($caption) {
                    echo '<div class="img-caption-overlay d-flex align-items-center justify-content-center text-white text-center">
                            <div class="p-2">' . esc_html($caption) . '</div>
                          </div>';
                }
echo '    </a>
        </div>
    </div>';

                }
            }
            elseif (isset($block['innerBlocks'])) {
                foreach ($block['innerBlocks'] as $inner) {
                    if ($inner['blockName'] === 'core/image' && isset($inner['attrs']['id'])) {
                        $img_id = $inner['attrs']['id'];
                        $img_url = wp_get_attachment_image_url($img_id, 'large');
                        $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                        $caption = wp_get_attachment_caption($img_id);

                    echo '
    <div class="col-12 col-md-6 col-lg-4 portfolio-item images">
        <div class="gallery-image-wrapper position-relative overflow-hidden rounded">
            <a href="' . esc_url($img_url) . '" data-lightbox="gallery" data-title="' . esc_attr($caption ?: $img_alt) . '">
                <img src="' . esc_url($img_url) . '" class="img-fluid rounded w-100" alt="' . esc_attr($img_alt) . '">';
                if ($caption) {
                    echo '<div class="img-caption-overlay d-flex align-items-center justify-content-center text-white text-center">
                            <div class="p-2">' . esc_html($caption) . '</div>
                          </div>';
                }
echo '    </a>
        </div>
    </div>';

                        }
                }
            }
        }

        // Bloques de imagen individual (no dentro de una galería)
if ($block['blockName'] === 'core/image' && isset($block['attrs']['id'])) {
    $img_id = $block['attrs']['id'];
    $img_url = wp_get_attachment_image_url($img_id, 'large');
    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
    $caption = wp_get_attachment_caption($img_id);

    echo '
    <div class="col-12 col-md-6 col-lg-4 portfolio-item images">
        <div class="gallery-image-wrapper position-relative overflow-hidden rounded">
            <a href="' . esc_url($img_url) . '" data-lightbox="gallery" data-title="' . esc_attr($caption ?: $img_alt) . '">
                <img src="' . esc_url($img_url) . '" class="img-fluid rounded w-100" alt="' . esc_attr($img_alt) . '">';
                if ($caption) {
                    echo '<div class="img-caption-overlay d-flex align-items-center justify-content-center text-white text-center">
                            <div class="p-2">' . esc_html($caption) . '</div>
                          </div>';
                }
    echo '    </a>
        </div>
    </div>';
}

        // VIDEO
        if ($block['blockName'] === 'core/embed' && isset($block['attrs']['url']) && strpos($block['attrs']['url'], 'youtube.com') !== false) {
            preg_match('/v=([^\&]+)/', $block['attrs']['url'], $matches);
            $video_id = $matches[1] ?? null;

            if ($video_id) {
                $embed_url = 'https://www.youtube.com/embed/' . $video_id. '?controls=1&autoplay=1&mute=1';

                echo '
                <div class="col-12 col-md-6 col-lg-4 portfolio-item videos">
                    <div class="rounded overflow-hidden ratio ratio-16x9">
                        <iframe 
                            src="' . esc_url($embed_url) . '" 
                            title="YouTube video player" 
                            allowfullscreen 
                            class="rounded">
                        </iframe>
                    </div>
                </div>';
            }
        }

        // Video local subido a la galería de medios (video HTML5)
        if ($block['blockName'] === 'core/video' && isset($block['attrs']['id'])) {
            $video_id = $block['attrs']['id'];
            $video_url = wp_get_attachment_url($video_id);
            $video_alt = get_post_meta($video_id, '_wp_attachment_image_alt', true);

            if ($video_url) {
                echo '
                <div class="col-12 col-md-6 col-lg-4 portfolio-item videos" onclick="toggleExpand(this)">
                    <div class="rounded overflow-hidden ratio ratio-16x9 video-wrapper">
                        <video controls class="rounded" preload="metadata" style="width: 100%; height: 100%;">
                            <source src="' . esc_url($video_url) . '" type="video/mp4">
                            Tu navegador no soporta la etiqueta video.
                        </video>
                    </div>
                </div>';
            }
        }
    }
    ?>
  </div>
</div>

 
<?php get_footer(); ?>