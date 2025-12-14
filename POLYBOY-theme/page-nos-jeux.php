<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>

<div class="MortalKombat">

    <!-- Radios -->
    <input type="radio" name="mk-slider" id="mk1" checked>
    <input type="radio" name="mk-slider" id="mk2">
    <input type="radio" name="mk-slider" id="mk3">

    <!-- Contenu -->
    <div class="mk-slides">

        <!-- SLIDE 1 -->
        <div class="mk-slide">
            <div class="mk-left">
                <h1>Mortal Kombat</h1>
                <p>
                   Le premier Mortal Kombat, sorti en 1992 par Midway Games, est un jeu de combat emblématique qui a révolutionné le genre. Il se distingue par son style réaliste (grâce à la capture d’acteurs réels), sa violence graphique inédite à l’époque, et surtout ses Fatalities — des coups de grâce spectaculaires et sanglants.

                </p>
                <span class="mk-year">1992</span>
            </div>

            <div class="mk-right">
               <a href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Mortal.png' ); ?>" alt="Mortal"></a>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="mk-slide">
            <div class="mk-left">
                <h1>Tetris</h1>
                <p>
Le premier Tetris, créé en 1984 par le programmeur russe Alexey Pajitnov, est un jeu de puzzle simple mais addictif. Le principe consiste à empiler des blocs de formes géométriques (appelés tétrominos) qui tombent du haut de l’écran, afin de former des lignes complètes qui disparaissent. 
                </p>
                <span class="mk-year">1984</span>
            </div>

            <div class="mk-right">
               <a href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Tetris.png' ); ?>" alt="Tetris"></a>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="mk-slide">
            <div class="mk-left">
                <h1>Street Figther</h1>
                <p>
Le premier Street Fighter, sorti en 1987 par Capcom, est un jeu de combat en arcade qui a posé les bases du genre.Le gameplay repose sur trois types d’attaques (poings et coups de pied) et introduit déjà les célèbres coups spéciaux comme le Hadouken. Bien que rudimentaire et moins fluide que ses successeurs, ce jeu est considéré comme le point de départ d’une des plus grandes franchises de combat de l’histoire.                </p>
                <span class="mk-year">1987</span>
            </div>

            <div class="mk-right">
                   <a href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Street.png' ); ?>" alt="Street"></a>
            </div>
        </div>

    </div>

    <!-- Flèches gauche -->
    <label for="mk1" class="mk-prev" id="mk-prev1"></label>
    <label for="mk2" class="mk-prev" id="mk-prev2"></label>
    <label for="mk3" class="mk-prev" id="mk-prev3"></label>

    <!-- Flèches droite -->
    <label for="mk2" class="mk-next" id="mk-next1"></label>
    <label for="mk3" class="mk-next" id="mk-next2"></label>
    <label for="mk1" class="mk-next" id="mk-next3"></label>

    <!-- Compteur -->
    <div class="mk-counter">
        <span id="mk-c1">1/3</span>
        <span id="mk-c2">2/3</span>
        <span id="mk-c3">3/3</span>
    </div>

</div>

<section class="LesJeux">

    <div class="carousel">
        <div class="card left">
           <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Space.png' ); ?>" alt="Street">
        </div>

        <div class="card left2">
           <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Doom.png' ); ?>" alt="Street">
        </div>

        <div class="card center">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Mario2.png' ); ?>" alt="Street">
        </div>

        <div class="card right2">
           <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Sonic.png' ); ?>" alt="Street">
        </div>

        <div class="card right">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Metroid.png' ); ?>" alt="Street">
        </div>
    </div>

    <button class="jeu-btn">Voir les jeux</button>

</section>

<section class="InfoJeux">
    <h2>D’où sorte ces jeux !</h2>

    <p>
       Les années 1990 représentent une ère charnière dans l’histoire du jeu vidéo — une période de mutation technologique, de bouleversements culturels et de création de mythes vidéoludiques encore présents dans l’imaginaire collectif. C’est la décennie où le jeu, jadis perçu comme un simple divertissement électronique réservé aux bornes d’arcade ou aux enfants, s’est élevé au rang de phénomène culturel mondial.
    </p>

    <p>
       Ce qui a véritablement révolutionné le monde du jeu dans les années 90, c’est la transition vers la 3D.  Les jeux quittent progressivement le plan 2D pour s’ouvrir à la profondeur spatiale et à la liberté de mouvement.
    </p>

    <p>
       Des titres comme Super Mario 64 (1996) ou Tomb Raider (1996) introduisent des mécaniques de caméra dynamique et d’exploration libre qui redéfinissent l’expérience ludique.  Le joueur n’est plus un simple spectateur d’un monde plat : il devient un acteur explorant un univers vivant.

 <div class="preorder">
    <a>Precommander maintenant</a>
  </div>

</section>


        
<?php get_footer(); // Load footer.php logic in our file ?>
           