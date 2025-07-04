<?php
// 1. Agregar el metabox en la página de inicio
add_action('add_meta_boxes', function () {
    $home_id = get_option('page_on_front');
    add_meta_box(
        'home_carousel_videos',
        'Carrusel de Videos (Inicio)',
        'render_home_carousel_metabox',
        'page',
        'normal',
        'high'
    );
});

// 2. Renderizar el metabox
function render_home_carousel_metabox($post) {
    if ((int) $post->ID !== (int) get_option('page_on_front')) return;

    $items = get_post_meta($post->ID, '_home_carousel_videos', true) ?: [];

    echo '<style>
        .carousel-entry { margin-bottom: 20px; border: 1px solid #ddd; padding: 10px; background: #f9f9f9; }
        .carousel-entry input[type="text"] { width: 100%; margin-bottom: 8px; }
        .carousel-entry .media-preview { margin-bottom: 8px; }
        .carousel-entry button.remove-item { background: #c00; color: white; padding: 4px 8px; border: none; cursor: pointer; }
    </style>';

    echo '<div id="carousel-items">';
    foreach ($items as $i => $item) {
        $video_url = wp_get_attachment_url($item['video']) ?: '';
        $dot_url = wp_get_attachment_image_url($item['dot'], 'thumbnail') ?: '';

        $value_title = isset($item['title']) ? esc_attr($item['title']) : '';
        $value_button = isset($item['button']) ? esc_attr($item['button']) : '';
        $value_link = isset($item['link']) ? esc_attr($item['link']) : '';

        echo '<div class="carousel-entry">';

        echo '<div class="media-preview video-preview"><strong>Video (máx. 3 MB):</strong><br>';
        echo $video_url ? '<video src="' . esc_url($video_url) . '" style="max-width:100%; max-height:200px;" muted></video>' : '';
        echo '</div>';
        echo '<input type="hidden" name="carousel_items['.$i.'][video]" class="video-id" value="'.esc_attr($item['video']).'">';
        echo '<button type="button" class="button select-video">Seleccionar video</button>';
        echo '<input type="text" name="carousel_items['.$i.'][title]" placeholder="Título" value="'. $value_title .'">';
        echo '<div class="media-preview dot-preview"><strong>Miniatura (máx. 50 KB):</strong><br>';
        echo $dot_url ? '<img src="' . esc_url($dot_url) . '" style="max-width:48px; max-height:48px; width:auto; height:auto;">' : '';
        echo '</div>';
        echo '<input type="hidden" name="carousel_items['.$i.'][dot]" class="dot-id" value="'.esc_attr($item['dot']).'">';
        echo '<button type="button" class="button select-dot">Seleccionar imagen</button>';
        echo '<div class="media-preview"><strong>Botón:</strong><br>';
        echo '<input type="text" name="carousel_items['.$i.'][button]" value="Saber más" placeholder="Texto del botón" value="'. $value_button .'">';
        echo '<input type="text" name="carousel_items['.$i.'][link]" placeholder="URL relativa del botón (ej: /contacto/)" value="'. $value_link .'">';

        echo '<button type="button" class="remove-item">Eliminar Elemento</button>';
        echo '</div>';
    }
    echo '</div>';

    echo '<button type="button" id="add-carousel-item" class="button">Agregar nuevo elemento</button>';

    echo "<script>
    jQuery(document).ready(function($){
       let index = " . count($items) . ";

        function openMediaFrame(button, type, callback) {
            let frame = wp.media({
                title: 'Seleccionar archivo',
                button: { text: 'Usar este archivo' },
                multiple: false,
                library: { type: [type] }
            });

            frame.on('select', function(){
                let attachment = frame.state().get('selection').first().toJSON();
                callback(attachment, button);
            });

            frame.open();
        }

        $(document).on('click', '.select-video', function(e){
            e.preventDefault();
            let btn = $(this);
            openMediaFrame(btn, 'video', function(attachment, button){

                if ((attachment.filesizeInBytes || attachment.filesize || 0) > 3145728) {
                    alert('El video seleccionado supera los 3 MB. Por favor, selecciona uno más liviano.');
                    return;
                }

                let container = button.closest('.carousel-entry');
                container.find('.video-id').val(attachment.id);
                container.find('.video-preview').html('<video src=\"' + attachment.url + '\" style=\"max-width:100%; max-height:200px;\" muted></video>');
            });
        });

        $(document).on('click', '.select-dot', function(e){
            e.preventDefault();
            let btn = $(this);
            openMediaFrame(btn, 'image', function(attachment, button){
                // Limitar a 50 KB (51200 bytes)
                if ((attachment.filesizeInBytes || attachment.filesize || 0) > 51200) {
                    alert('La imagen seleccionada supera el límite de 50 KB. Por favor, elige una imagen más liviana.');
                    return;
                }
                let container = button.closest('.carousel-entry');
                container.find('.dot-id').val(attachment.id);
                container.find('.dot-preview').html('<img src=\"' + (attachment.sizes?.thumbnail?.url || attachment.url) + '\" style=\"max-width:48px; max-height:48px; width:auto; height:auto;\">');
            });
        });

        $('#add-carousel-item').on('click', function(e){
            e.preventDefault();
            $('#carousel-items').append(`
                <div class=\"carousel-entry\">
                    <div class=\"media-preview video-preview\"><strong>Video (máx. 3 MB):</strong><br></div>
                    <input type=\"hidden\" name=\"carousel_items[\${index}][video]\" class=\"video-id\" value=\"\">
                    <button type=\"button\" class=\"button select-video\">Seleccionar video</button>
                    <input type=\"text\" name=\"carousel_items[\${index}][title]\" placeholder=\"Título\">
                    <div class=\"media-preview dot-preview\"><strong>Miniatura (máx. 50 KB):</strong><br></div>
                    <input type=\"hidden\" name=\"carousel_items[\${index}][dot]\" class=\"dot-id\" value=\"\">
                    <button type=\"button\" class=\"button select-dot\">Seleccionar imagen</button>

                   
                    <div class=\"media-preview\"><strong>Botón:</strong><br></div>
                    <input type=\"text\" name=\"carousel_items[\${index}][button]\" value=\"Saber más\" placeholder=\"Texto del botón\">
                    <input type=\"text\" name=\"carousel_items[\${index}][link]\" placeholder=\"URL relativa del botón (ej: /contacto/)\">
                    <button type=\"button\" class=\"remove-item\">Eliminar Elemento</button>
                </div>
            `);
            index++;
        });

        $(document).on('click', '.remove-item', function(){
            $(this).closest('.carousel-entry').remove();
        });
    });
    </script>";
}

// 3. Guardar los datos
add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if ((int) $post_id !== (int) get_option('page_on_front')) return;

    if (isset($_POST['carousel_items']) && is_array($_POST['carousel_items'])) {
        $cleaned = [];
        foreach ($_POST['carousel_items'] as $item) {
            if (!empty($item['video']) || !empty($item['dot'])) {
                $cleaned[] = [
                    'video' => (int) $item['video'],
                    'dot' => (int) $item['dot'],
                    'title' => sanitize_text_field($item['title'] ?? ''),
                    'button' => sanitize_text_field($item['button'] ?? ''),
                    'link' => sanitize_text_field($item['link'] ?? ''),
                ];
            }
        }
        update_post_meta($post_id, '_home_carousel_videos', $cleaned);
    } else {
        delete_post_meta($post_id, '_home_carousel_videos');
    }
});
