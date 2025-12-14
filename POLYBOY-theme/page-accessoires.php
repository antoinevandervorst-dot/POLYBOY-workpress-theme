<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<section class="hero-manette">
  <div class="hero-manette__content">
    <h1>Accesoires Manette</h1>
    <p>
      Perfectionnez votre équipement de gaming avec des manettes
      emblématiques de l’époque
    </p>
  </div>

  <div class="hero-manette__image">
   <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
  </div>
</section>

<section class="manette-exclu">
  <h2>Nos Manette exclusif</h2>
  <p class="subtitle">Cliquez pour plus d’information sur l’exclusivité</p>

  <!-- INPUTS CARROUSEL -->
  <input type="radio" name="slider" id="slide1" checked>
  <input type="radio" name="slider" id="slide2">
  <input type="radio" name="slider" id="slide3">
  <input type="radio" name="slider" id="slide4">
  <input type="radio" name="slider" id="slide5">
  <input type="radio" name="slider" id="slide6">

  <!-- CARROUSEL -->
  <div class="carousel">
    <div class="track">

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Space Invaders</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Pac-Man</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Tetris</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Mario Bros</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

       <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>5</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

       <article class="card">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>6</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

    </div>
  </div>

  <!-- NAV -->
  <div class="nav">
    <label for="slide1">‹</label>
    <label for="slide4">›</label>
  </div>
</section>

<section class="manette-classique">
  <h2>Nos Manette</h2>
  <p class="subtitl">Cliquez pour plus d’information</p>

  <!-- INPUTS CARROUSEL -->
  <input type="radio" name="slider" id="slide1" checked>
  <input type="radio" name="slider" id="slide2">
  <input type="radio" name="slider" id="slide3">
  <input type="radio" name="slider" id="slide4">
  <input type="radio" name="slider" id="slide5">
  <input type="radio" name="slider" id="slide6">

  <!-- CARROUSEL -->
  <div class="carousel">
    <div class="track">

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Space Invaders</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Pac-Man</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Tetris</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

      <article class="card">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>Mario Bros</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

       <article class="card">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>5</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

       <article class="card">
         <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/ManettePac.png' ); ?>" alt="Street">
        <h3>Manette<br>6</h3>
        <p>Retrouver votre jeux préféré intégrer à la manette.</p>
      </article>

    </div>
  </div>

  <!-- NAV -->
  <div class="nav">
    <label for="slide1">‹</label>
    <label for="slide4">›</label>
  </div>
</section>

<div class="preorder">
    <a>Precommander maintenant</a>
  </div>


<?php get_footer(); // Load footer.php logic in our file ?>