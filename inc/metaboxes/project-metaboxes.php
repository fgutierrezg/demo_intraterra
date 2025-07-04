<?php
add_action('add_meta_boxes', function () {
    add_meta_box(
        'project_custom_fields',
        'Galería e Imagen de Portada',
        'render_project_custom_fields',
        'project',
        'normal',
        'default'
    );
});



function render_project_custom_fields($post) {
    $custom_cover_id = get_post_meta($post->ID, '_custom_cover_id', true);
    $custom_cover_url = $custom_cover_id ? wp_get_attachment_image_url($custom_cover_id, 'medium') : '';
    $gallery = get_post_meta($post->ID, '_custom_gallery_items', true) ?: [];

    // Estilos simples para galería en admin
    echo '<style>
        .gallery-entry {margin-bottom:10px; display:flex; align-items:center; gap:10px;}
        .gallery-entry input[type="text"] {width:40%;}
        .gallery-entry .media-preview {max-width:100px; max-height:80px; overflow:hidden;}
        .gallery-entry button.remove-media {background:#ff4c4c; color:#fff; border:none; padding:5px 10px; cursor:pointer;}
    </style>';

    // Imagen de portada
    echo '<p><strong>Imagen de Portada Personalizada</strong><br>';
    echo '<img id="custom_cover_preview" src="' . esc_url($custom_cover_url) . '" style="max-width:200px;display:block;margin-bottom:10px;">';
    echo '<input type="hidden" name="custom_cover_id" id="custom_cover_id" value="' . esc_attr($custom_cover_id) . '">';
    echo '<button type="button" class="button" id="select_custom_cover">Seleccionar imagen</button></p>';

    // Galería
    echo '<hr><strong>Galería de Imágenes y Videos</strong>';
    echo '<div id="gallery-wrapper">';
    foreach ($gallery as $index => $item) {
        $url = wp_get_attachment_url($item['id']);
        $type = $item['type'] ?? 'image';
        $desc = $item['desc'] ?? '';

       echo '<div class="gallery-entry" style="margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #ccc;">';
        echo '<div class="media-preview" style="margin-bottom: 10px;">';

        if ($type === 'image') {
            echo '<img src="' . esc_url(wp_get_attachment_image_url($item['id'], 'thumbnail')) . '" style="max-width:100%;">';
        } elseif ($type === 'video') {
            echo '<video src="' . esc_url($url) . '" style="max-width:100%;" muted></video>';
        }
        echo '</div>';

        echo '<input type="hidden" name="gallery[' . $index . '][id]" class="gallery-id" value="' . esc_attr($item['id']) . '">';
        echo '<input type="hidden" name="gallery[' . $index . '][type]" class="gallery-type" value="' . esc_attr($type) . '">';
        echo '<input type="text" name="gallery[' . $index . '][desc]" placeholder="Descripción" value="' . esc_attr($desc) . '">';
        echo '<button type="button" class="button select-media">Seleccionar archivo</button>';
        echo '<button type="button" class="remove-media">Eliminar</button>';
        echo '</div>';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="add_gallery_image">Agregar imagen/video a galería</button>';

    // JS para media uploader, añadir, eliminar, y actualizar entradas
    ?>
    <script>
    jQuery(document).ready(function($){
        let galleryIndex = <?php echo count($gallery); ?>;
        let coverFrame;
        let galleryFrame;

        // Selección de portada
        $('#select_custom_cover').on('click', function(e){
            e.preventDefault();
            if (coverFrame) { coverFrame.open(); return; }

            coverFrame = wp.media({
                title: "Selecciona una imagen de portada",
                button: { text: "Usar esta imagen" },
                multiple: false,
                library: { type: 'image' }
            });

            coverFrame.on('select', function(){
                let attachment = coverFrame.state().get('selection').first().toJSON();
                $('#custom_cover_preview').attr('src', attachment.url);
                $('#custom_cover_id').val(attachment.id);
            });

            coverFrame.open();
        });

        // Abrir media uploader para seleccionar archivos galería
        function openMediaFrame(button) {
        const frame = wp.media({
            title: "Selecciona archivo",
            button: { text: "Usar este archivo" },
            multiple: false,
            library: { type: ['image', 'video'] }
        });

        frame.on('select', function () {
            const attachment = frame.state().get('selection').first().toJSON();
            const container = button.closest('.gallery-entry');
            container.find('.gallery-id').val(attachment.id);
            container.find('.gallery-type').val(attachment.type);

            if (attachment.type === 'image') {
                const thumbUrl = attachment.sizes && attachment.sizes.thumbnail
                    ? attachment.sizes.thumbnail.url
                    : attachment.url;

                container.find('.media-preview').html('<img src="' + thumbUrl + '" style="max-width:100%;">');
            } else if (attachment.type === 'video') {
                container.find('.media-preview').html('<video src="' + attachment.url + '" style="max-width:100%;" muted></video>');
            }
        });

        frame.open();
    }

        // Botón seleccionar archivo en entradas existentes o nuevas
        $('#gallery-wrapper').on('click', '.select-media', function(e){
            e.preventDefault();
            openMediaFrame($(this));
        });

        // Añadir nueva entrada vacía
        $('#add_gallery_image').on('click', function(e){
            e.preventDefault();
            let html = `<div class="gallery-entry">
            <div class="media-preview"></div>
            
            <input type="hidden" name="gallery[${galleryIndex}][id]" class="gallery-id" value="">
            <input type="hidden" name="gallery[${galleryIndex}][type]" class="gallery-type" value="image">
            <input type="text" name="gallery[${galleryIndex}][desc]" placeholder="Descripción" value="">
            <div>
                <button type="button" class="button select-media">Seleccionar archivo</button>
                      <button type="button" class="remove-media" 
                    style="background: #ff4c4c; color: #fff; border: none; padding: 6px 12px; cursor: pointer;">Eliminar</button>
            </div>
            </div>`;


            $('#gallery-wrapper').append(html);
            galleryIndex++;
        });

        // Eliminar entrada
        $('#gallery-wrapper').on('click', '.remove-media', function(e){
            e.preventDefault();
            $(this).closest('.gallery-entry').remove();
        });

    });
    </script>
    <?php
}

// Guardar meta campos
add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['custom_cover_id'])) {
        update_post_meta($post_id, '_custom_cover_id', intval($_POST['custom_cover_id']));
    }

    if (isset($_POST['gallery']) && is_array($_POST['gallery'])) {
    $valid_gallery = [];

    foreach ($_POST['gallery'] as $item) {
        $id = isset($item['id']) ? intval($item['id']) : 0;
        $type = isset($item['type']) ? sanitize_text_field($item['type']) : '';
        $desc = isset($item['desc']) ? sanitize_text_field($item['desc']) : '';

        // Solo guardar si tiene archivo seleccionado y tipo válido
        if ($id > 0 && in_array($type, ['image', 'video'])) {
            $valid_gallery[] = [
                'id' => $id,
                'type' => $type,
                'desc' => $desc
            ];
        }
    }

    if (!empty($valid_gallery)) {
        update_post_meta($post_id, '_custom_gallery_items', $valid_gallery);
    } else {
        delete_post_meta($post_id, '_custom_gallery_items');
    }
    } else {
        delete_post_meta($post_id, '_custom_gallery_items');
    }

});