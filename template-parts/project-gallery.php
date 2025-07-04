<?php
// Función recursiva para extraer imágenes
function extract_gallery_images_recursive($blocks, &$gallery_images, $limit = 6) {
    foreach ($blocks as $block) {
        if (count($gallery_images) >= $limit) return;

        if ($block['blockName'] === 'core/gallery' && isset($block['attrs']['ids'])) {
            foreach ($block['attrs']['ids'] as $img_id) {
                $gallery_images[] = wp_get_attachment_image_url($img_id, 'thumbnail');
                if (count($gallery_images) >= $limit) return;
            }
        }

        if ($block['blockName'] === 'core/image' && isset($block['attrs']['id'])) {
            $gallery_images[] = wp_get_attachment_image_url($block['attrs']['id'], 'thumbnail');
            if (count($gallery_images) >= $limit) return;
        }

        if (!empty($block['innerBlocks'])) {
            extract_gallery_images_recursive($block['innerBlocks'], $gallery_images, $limit);
        }
    }
}

// Obtener imágenes de la página "Multimedia"
$page = get_page_by_path('multimedia');
$content = $page ? $page->post_content : '';
$blocks = $content ? parse_blocks($content) : [];
$gallery_images = [];

extract_gallery_images_recursive($blocks, $gallery_images);
?>

<div class="col-lg-3 col-md-6">
    <h5 class="text-white mb-4">Galería de Proyectos</h5>
    <div class="row g-2">
        <?php foreach ($gallery_images as $img_url): ?>
            <div class="col-4">
                <a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="d-block">
                    <div class="gallery-thumb-wrapper rounded overflow-hidden" style="aspect-ratio: 1/1;">
                        <img src="<?php echo esc_url($img_url); ?>" class="w-100 h-100 object-fit-cover" alt="">
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
