<?php

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

function custom_wp_query()
{
  $args = array(
    'posts_per_page' => 10,
    'order' => 'DESC',
    'orderby' => 'date',
  );
  $query = new WP_Query($args);
  return $query;
}

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  $mimes['jpeg'] = 'image/jpeg';
  $mimes['jpg'] = 'image/jpeg';
  $mimes['jfif'] = 'image/jpeg';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function codaxia_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  // register_nav_menu('header-menu','header menu');
}

function codaxia_enqueue_scripts()
{
  // css in the header
  if (!is_admin()) {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-5.0.0-beta2.min.css');
    wp_register_style('LineIcons', get_template_directory_uri() . '/assets/css/LineIcons.2.0.css');
    wp_register_style('tiny-slider', get_template_directory_uri() . '/assets/css/tiny-slider.css');
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('LineIcons');
    wp_enqueue_style('tiny-slider');
    wp_enqueue_style('animate');
    wp_enqueue_style('main');

    // js in the footer
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-5.0.0-beta2.min.js', [], false, true);
    wp_enqueue_script('count-up', get_template_directory_uri() . '/assets/js/count-up.min.js', [], false, true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/assets/js/tiny-slider.js', [], false, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', [], false, true);
    wp_enqueue_script('polifill', get_template_directory_uri() . '/assets/js/polifill.js', [], false, true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', [], false, true);
    wp_enqueue_script('chroma', get_template_directory_uri() . '/assets/js/chroma.min.js', [], false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
  }
}

add_action('wp_enqueue_scripts', 'codaxia_enqueue_scripts');
add_action('after_setup_theme', 'codaxia_setup');
// disable Gutenberg
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Custom navbar and footer to automatically add the url before entry
// It also check if it's an external link and then cancel the rule

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
  // Start the element output.
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    // Check if the URL is an external link.
    if (strpos($item->url, 'http://') === 0 || strpos($item->url, 'https://') === 0) {
      // It's an external link, use the URL as is.
      $url = $item->url;
    } else {
      // It's an internal link, prepend the home URL.
      $url = home_url() . '/' . ltrim($item->url, '/');
    }

    // Append the menu item to the output.
    $output .= '<li class="nav-item">';
    $output .= '<a href="' . $url . '">' . $item->title . '</a>';
    $output .= '</li>';
  }
}

class Custom_Walker_footer_Menu extends Walker_Nav_Menu
{
  // Start the element output.
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    // Check if the URL is an external link.
    if (strpos($item->url, 'http://') === 0 || strpos($item->url, 'https://') === 0) {
      // It's an external link, use the URL as is.
      $url = $item->url;
    } else {
      // It's an internal link, prepend the home URL.
      $url = home_url() . '/' . ltrim($item->url, '/');
    }

    // Append the menu item to the output.
    $output .= '<li>';
    $output .= '<a href="' . $url . '">' . $item->title . '</a>';
    $output .= '</li>';
  }
}

function codaxia_remove_editor()
{
  // remove_post_type_support('post', 'editor');
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'codaxia_remove_editor');

function get_contact() {
  get_template_part('contact');
}

function my_custom_excerpt($excerpt) {
  $limit_words = 35; // number of words to show
  $limit_characters = 100; // Maximum number of characters to display

  // Truncate the excerpt by words
  $excerpt = wp_trim_words($excerpt, $limit_words, '[...]');

  // If the excerpt is still longer than the character limit, truncate it further
  if (strlen($excerpt) > $limit_characters) {
      $excerpt = substr($excerpt, 0, $limit_characters);
      $excerpt = substr($excerpt, 0, strrpos($excerpt, ' ')) . '[...]';
  }

  return $excerpt;
}
add_filter('the_excerpt', 'my_custom_excerpt');

// stop the mail system from contact form 7
add_filter('wpcf7_skip_mail', 'custom_skip_mail', 10, 2);
function custom_skip_mail($skip_mail, $contact_form) {
    return true;
}

function custom_button($link, $text, $font_size = '') {
  ?>
  <div class="first">
      <div class="second">
          <button class="glow-button">
              <a href="<?= $link ?>" class="fw-bold text-white <?= $font_size ?> text-nowrap"><?= $text ?></a>
          </button>
      </div>
  </div>
  <?php
}

/*add_action('wp_footer', 'add_recaptcha_contact_page');
function add_recaptcha_contact_page() {
    if ( !is_page('contact') ) { 
        echo '<style>.grecaptcha-badge {display: none !important;}</style>';
    }
}*/

// class Custom_Walker_footer_Menu extends Walker_Nav_Menu
// {
//   function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
//   {
//     $output .= '<li>';
//     $output .= '<a class="page-scroll" href="' . home_url() . "/" . $item->url . '">' . $item->title . '</a>';
//     $output .= '</li>';
//   }
// }

// add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );

// wp_enqueue_style( 'assets/css/main.css', get_stylesheet_uri() );