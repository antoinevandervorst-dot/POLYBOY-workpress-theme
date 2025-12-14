<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<section class="polyboy-hero">

  <!-- INPUTS CARROUSEL -->
  <input type="radio" name="slider" id="slide1" checked>
  <input type="radio" name="slider" id="slide2">
  <input type="radio" name="slider" id="slide3">

  <div class="polyboy-container">

    <!-- TEXTE -->
    <div class="polyboy-content">
      <h1>POLYBOY</h1>
      <span class="line"></span>

      <p class="tagline">Jouez à vos rêves</p>

      <div class="badge">1 TO de stockage</div>

      <p class="price">250€</p>
    </div>

    <!-- CARROUSEL -->
    <div class="polyboy-slider">
      <div class="slides">
        <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Console3.png' ); ?>" alt="Logo"></img>
         <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Console3.png' ); ?>" alt="Logo"></img>
        <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Console3.png' ); ?>" alt="Logo"></img>
      </div>
    </div>

  </div>

  <!-- DOTS -->
  <div class="dots">
    <label for="slide1"></label>
    <label for="slide2"></label>
    <label for="slide3"></label>
  </div>

</section>


<section class="polyboy-exclu"  style="background-image: url('<?php echo esc_url( get_template_directory_uri(). '/assets/image/Fond2.png' ); ?>');">
  <h2>En exclusivité</h2>

  <!-- CHECKBOXES (interaction) -->
  <input type="checkbox" id="info1">
  <input type="checkbox" id="info2">
  <input type="checkbox" id="info3">

  <div class="polyboy-exclu__wrapper">

    <!-- IMAGE -->
    <div class="polyboy-exclu__image">
        <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Console3.png' ); ?>" alt="Logo"></img>
    </div>

    <!-- BOUTONS -->
    <label for="info1" class="dot dot-1"></label>
    <label for="info2" class="dot dot-2"></label>
    <label for="info3" class="dot dot-3"></label>

    <!-- INFO BOXES -->
    <div class="info info-1">
      <h3>Edition Pac-Man</h3>
      <p>Une console produite en quantité très limitée, réservée aux passionnés.</p>
    </div>

    <div class="info info-2">
      <h3>Edition Doom</h3>
      <p>Une console produite en quantité très limitée, réservée au tueur de Demon</p>
    </div>

    <div class="info info-3">
      <h3>Edition Mario</h3>
      <p>Une console produite en quantité très limitée, seulement pour les plombiers</p>
    </div>

  </div>
</section>

<section class="polyboy-couleur">
  <h2>Les couleurs</h2>
  <div class="polyboy-couleur__container">

    <div class="polyboy-couleur__content">
      <h3>Différentes couleurs<br>pour votre aventure</h3>

      <p>
        Du Blanc, du gris, du bleu, chacune d’elle vous attends pour passer vos meilleur moment seul ou avec vos amis
      </p>
    </div>

    <div class="polyboy-couleur__image">
      <img href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/console.png' ); ?>" alt="Logo"></img>
    </div>

  </div>
</section>

<section class="formulaire-p">
  <h2>Formulaire de précommande</h2>
  <p class="formulaire-p__subtitle">
    Remplissez ce formulaire pour pouvoir<br>
    précommander la console
  </p>

  <form class="formulaire-p__form" action="precommande.php" method="post">

    <div class="formulaire-p__row">
      <input type="text" name="nom" placeholder="Nom" required>
      <input type="text" name="prenom" placeholder="Prénom" required>
    </div>

    <div class="formulaire-p__row">
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="tel" name="telephone" placeholder="Téléphone" required>
    </div>

    <select name="type_console" required>
      <option value="" disabled selected>Type de console</option>
      <option value="polyboy-blanc">POLYBOY – Blanc</option>
      <option value="polyboy-gris">POLYBOY – Gris</option>
      <option value="polyboy-bleu">POLYBOY – Bleu</option>
      <option value="polyboy-PAc">POLYBOY – Pac-Man</option>
      <option value="polyboy-Doom">POLYBOY – Doom</option>
      <option value="polyboy-Mario">POLYBOY – Mario</option>
    </select>

    <input type="text" name="banque" placeholder="Nom de la banque" required>

    <input
      type="text"
      name="carte"
      placeholder="Numéro carte bleue"
      inputmode="numeric"
      pattern="[0-9]{16}"
      required
    >

    <input
      type="password"
      name="code"
      placeholder="Code"
      maxlength="4"
      inputmode="numeric"
      required
    >

    <button type="submit">Envoyer</button>

  </form>
</section>





<?php get_footer(); // Load footer.php logic in our file ?>