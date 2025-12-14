<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<section class="faq">
  <div class="faq__container">

    <div class="faq__intro">
      <h2>Nous répondrons à<br>toutes vos questions</h2>
      <p>
        Toute question sera répondue dans les moindres délais,
        si un bug survient pendant votre passage sur le site,
        signalez-le.
      </p>
    </div>

    <form class="faq__form" action="send.php" method="post">

      <div class="faq__row">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
      </div>

      <div class="faq__row">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="tel" name="telephone" placeholder="Téléphone">
      </div>

      <input
        type="text"
        name="type"
        placeholder="Type de la question (Jeux, Site, Console...)"
        required
      >

      <textarea
        name="message"
        placeholder="Votre question"
        required
      ></textarea>

      <button type="submit">Envoyer</button>

    </form>

  </div>
</section>


<?php get_footer(); // Load footer.php logic in our file ?>