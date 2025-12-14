<?php 
/**
 * Footer template file
 * This file contains the footer structure of the theme including:
 * - Footer content
 * - Closing body and HTML tags
 * - WordPress footer scripts that run all the necessary scripts called with some hooks.
 */
?>
<footer>

    <!-- Partie gauche : logo + image décorative -->
    <div class="Logo">
       <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/LOGO footer.png' ); ?>" alt="Logo"></img>
    </div>

    <!-- Partie droite -->
    <div class="footer-right">

        <div class="footer-links">

            <div class="footer-column">
                <h3>Assistance</h3>
                <a href="#">Contacter nous</a>
            </div>

            <div class="footer-column">
                <a>Mention Legal</a>
            </div>

            <div class="footer-icons">
                  <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Instagram.png' ); ?>" alt="Insta"></img>
                 <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Youtube.png' ); ?>" alt="YT"></img>
            </div>

        </div>

        <div class="footer-line"></div>

        <p class="footer-copy">
            © 2025 POLYBOY, Inc. POLYBOY and the POLYBOY logo are registered trademarks owned by 
            POLYBOY Interactive, Inc. All rights reserved.
        </p>

    </div>



    <?php /* Hook for scripts - Required for WordPress to load footer scripts add in functions.php */
    wp_footer(); 
    ?>

</footer>