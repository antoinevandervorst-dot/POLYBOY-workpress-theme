<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>
  


<section class="hero" style="background-image: url('<?php echo esc_url( get_template_directory_uri(). '/assets/image/Pac.png' ); ?>');">


  <div class="hero-left">
    <h1>POLYBOY GAMES</h1>

    <p>
      Re découvrez les jeux rétro qui ont marqué une génération<br>
      Graphismes pixelisés, sons 8-bit et ambiance d’arcade légendaire<br>
      Nostalgie garantie !
    </p>

    <a href="#" class="btn">Découvrir</a>
  </div>

</section>


<section class="console-section">

  <div class="console-container">

  
    <div class="console-image">
       <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/console.png' ); ?>" alt="Logo"></img>
    </div>

    <div class="console-content">
      <h2>Découvrer la toute<br>nouvelle console avec<br>ses différents style</h2>

      <h3>Console POLYBOY</h3>

      <p>
        Re-découvrir vos souvenir d’enfance grace a ce<br>
        tout nouveaux genre de console
      </p>

      <a href="#" class="info-btn">Plus d’infos</a>
    </div>

  </div>


  <div class="preorder">
    <a>Precommander maintenant</a>
  </div>

</section>



   
</section>



<?php get_footer(); // Load footer.php logic in our file ?>