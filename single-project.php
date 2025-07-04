<?php
/* Template for single project */
get_header();

$custom_cover_id = get_post_meta(get_the_ID(), '_custom_cover_id', true);
$custom_cover_url = $custom_cover_id ? wp_get_attachment_image_url($custom_cover_id, 'large') : '';

$gallery = get_post_meta(get_the_ID(), '_custom_gallery_items', true);

// Obtener contenido en bloques
$content = get_the_content();
$blocks = parse_blocks($content);

$paragraph_text = '';
foreach ($blocks as $block) {
    if ($block['blockName'] === 'core/paragraph') {
        $paragraph_text = $block['innerHTML'];
        break;
    }
}
?>

<!-- Header con imagen portada personalizada -->
<?php if ($custom_cover_url): ?>
<div class="container-fluid page-header-multimedia py-5 mb-5 d-flex align-items-center justify-content-center" style="background: url('<?php echo esc_url($custom_cover_url); ?>') center center / cover no-repeat;">
    <div class="container py-5 text-white text-center">
        <h1 class="display-3 mb-3"><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url('/'); ?>">Inicio</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>
<?php endif; ?>
<!-- Page Header End -->
 
<?php if (!empty($paragraph_text)) : ?>
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-dark">
                <p class="">
                    <?php echo $paragraph_text; ?>
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container py-5">
    <div class="row g-4">
    <?php if ($gallery): ?>
        <?php foreach ($gallery as $item): 
            $url = wp_get_attachment_url($item['id']);
            $desc = esc_html($item['desc']);
            $type = $item['type'] ?? 'image';
        ?>
            <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                <div class="gallery-image-wrapper position-relative overflow-hidden rounded">
                <?php if ($type === 'image'): ?>
                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo $desc; ?>" class="img-fluid rounded w-100" />
                <?php elseif ($type === 'video'): ?>
                    <video controls muted class="rounded w-100" preload="metadata" style="max-height:300px;">
                        <source src="<?php echo esc_url($url); ?>" type="video/mp4" />
                        Tu navegador no soporta el video.
                    </video>
                <?php endif; ?>
                <?php if ($desc && $type === 'image'): ?>
                    <div class="img-caption-overlay d-flex align-items-center justify-content-center text-white text-center" style="background: rgba(0,0,0,0.5); position: absolute; bottom: 0; width: 100%; padding: 10px;">
                        <div class="p-2"><?php echo $desc; ?></div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay elementos en la galería.</p>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>