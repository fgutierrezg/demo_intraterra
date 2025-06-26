<?php
function intraterra_setup() {

    /* echo var_dump(get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js');
    exit; */
  
    register_nav_menus(array(
        'main_menu' => 'Menú Principal',
    ));
    add_theme_support('title-tag');
    
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'intraterra_setup');

function intraterra_enqueue_scripts() {

    //Estilos
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    // Libraries CSS (animaciones, owlcarousel, lightbox)
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0' );
    wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0' );
    wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0' );

     // Librerías JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), '1.0', true );
    wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), '1.0', true );
    wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), '1.0', true );
    wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), '1.0', true );
    // Owl Carousel JS
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), '1.0', true );
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), '1.0', true );

    // Script principal del tema
    wp_enqueue_script( 'intraterra-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts', 'intraterra_enqueue_scripts');

// Navwalker para Bootstrap
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

//Logica para contact-from
add_action('init', 'process_contact_form');
function process_contact_form() {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cf-name'])) {
          $name    = sanitize_text_field($_POST["cf-name"]);
    $email   = sanitize_email($_POST["cf-email"]);
    $phone   = sanitize_text_field($_POST["cf-phone"]);
    $message = sanitize_textarea_field($_POST["cf-message"]);

    $to      = "francisco.gutierrez.g@live.cl";
    $subject = "Mensaje desde formulario de contacto";
    $headers = array('Content-Type: text/html; charset=UTF-8', "Reply-To: $email");
    $body    = "
        <h2>Nuevo mensaje desde el sitio web</h2>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Teléfono:</strong> $phone</p>
        <p><strong>Mensaje:</strong><br>$message</p>
    ";

    if (wp_mail($to, $subject, $body, $headers)) {
           echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            ¡Gracias! Tu mensaje ha sido enviado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
          </div>';
    } else {
       echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            Hubo un problema al enviar el mensaje. Intenta nuevamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
          </div>';
    }
    }
}
