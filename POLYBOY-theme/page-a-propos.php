<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>



<section class="hero-propos" style="background-image: url('<?php echo esc_url( get_template_directory_uri(). '/assets/image/Fond.png' ); ?>');">
  <div class="overlay1">
   
    <div class="timer">
      <span class="time hours"></span> :
      <span class="time minutes"></span>  :
      <span class="time seconds"></span>
    </div>

    <p class="subtitle">Votre console bientôt en rayon</p>
  </div>
</section>

<section class="imagination">
  <div class="imagination__container">

    <div class="imagination__image">
      <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Console2.png' ); ?>" alt="Insta"></img>
    </div>

    <div class="imagination__content">
      <h2>Comment avons nous<br>imaginer la console</h2>

      <p>
        La console s’inspire des légendes du jeu vidéo : la <strong>Game Boy</strong>,
        la <strong>GameCube</strong> et l’<strong>Atari</strong>.
        <br><br>
        De la <strong>Game Boy</strong>, elle emprunte la puissance compacte et
        l’esprit convivial du jeu à plusieurs.
        <br><br>
        De la <strong>GameCube</strong>, elle reprend le design rétro et portable,
        pensé pour jouer partout, à tout moment.
        <br><br>
        Enfin, l’<strong>Atari</strong> lui insuffle son héritage vintage, celui
        des toutes premières expériences vidéoludiques.
        <br><br>
        Résultat : une console à la fois nostalgique et moderne, un pont entre
        les générations de joueurs.
      </p>
    </div>

  </div>
</section>



<section class="provenance-jeux">
  <div class="provenance-jeux__container">

    <div class="provenance-jeux__images">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Atari.png' ); ?>" alt="Street" class="provenance-jeux__img img-1">
     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/GameBoy.png' ); ?>" alt="Street" class="provenance-jeux__img img-2">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/AZE.png' ); ?>" alt="Street" class="provenance-jeux__img img-3">
    </div>

    <div class="provenance-jeux__content">
      <h2>Provenance de<br>nos jeux</h2>
      <p>
       Nos jeux provienne tous des anciennes consoles revolutionnaire du monde du jeux vidéo, nous avons adapter la console pour que chaque cartouche de jeu puisse marcher et etre a nouveau utiliser par de nouvelle generation
      </p>
    </div>

  </div>
</section>


   <div class="preorder">
    <a>Precommander maintenant</a>
  </div>







<?php get_footer(); // Load footer.php logic in our file ?>