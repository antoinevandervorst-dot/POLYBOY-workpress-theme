<?php
/**
 * Header template file
 * This file contains the header structure of the theme including:
 * - HTML doctype and head section
 * - Opening body tag
 * - Loading the site meta information
 * - Loading all the styles added in queue with wp_head()
 * - Add the site title and main navigation menu
 */
?>

<!DOCTYPE html>
<html <?php /* Outputs the language attributes for the HTML tag */ language_attributes(); ?>>
<head>
    <meta charset="<?php /* Outputs the site's character encoding */ bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php /* Hook for scripts, styles, and meta elements */ wp_head(); ?>
    <title><?php the_title(); ?></title>
</head>
<body <?php /* Adds classes to the body tag */ body_class(); ?>>
    <?php /* Hook for inserting content after body tag - WordPress 5.2+ */ wp_body_open(); ?>
    <header id="site-header">
    <div class="logo">
       <a href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/LOGO.png' ); ?>" alt="Logo"></a>
    
    </div>
    <nav>
      <a href="http://localhost:8888/index.php/nos-jeux/">Nos Jeux</a>
      <a href="http://localhost:8888/index.php/a-propos/">À propos</a>
      <a href="http://localhost:8888/index.php/wishlist/">Wishlist</a>
      <a href="http://localhost:8888/index.php/accessoires/">Accessoires</a>
      <a href="http://localhost:8888/index.php/faq/">FAQ</a>
    </nav>
  </div>

    </header> 