<?php get_header(); ?>

<body>

  <h1>À propos</h1>
  <div id="underline"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>


<section class="wrap">
    <div class="bati_ancien">
      <div class="carrousel_gauche">
        <?php $image1 = get_field('image1'); echo $image1; ?> <!--carroussel-->
        <ol class="vue_carousel">
          <li id="photo1_carousel" tabindex="0" class="carousel_photo">
            <div class="carousel_englobe">
              <a href="#photo3_carousel" class="precedent_carousel">Aller à la photo précédente</a>
              <a href="#photo2_carousel" class="suivant_carousel">Aller à la photo suivante</a>
            </div>
          </li>
          <li id="photo2_carousel" tabindex="0" class="carousel_photo">
            <div class="carousel_englobe">
              <a href="#photo1_carousel" class="precedent_carousel">Aller à la photo précédente</a>
              <a href="#photo3_carousel" class="suivant_carousel">Aller à la photo suivante</a>
            </div>
          </li>
          <li id="photo3_carousel" tabindex="0" class="carousel_photo">
            <div class="carousel_englobe">
              <a href="#photo2_carousel" class="precedent_carousel">Aller à la photo précédente</a>
              <a href="#photo1_carousel" class="suivant_carousel">Aller à la photo suivante</a>
            </div>
          </li>
        </ol>
        <aside class="navigation_carousel">
          <ol

      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg" class="absolute">
      <div id="image1">
      </div>
      <div id="text1">
        <h2><?php $titre1 = get_field('titre1'); echo $titre1; ?></h3>
        <h4><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h4> <!--sous-titre ex : gérant de la maçonnerie-->
        <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
    </div>
</div>
<div class="maçonnerie">
  <div class="carrousel_droit">
    <?php $image1 = get_field('image1'); echo $image1; ?> <!--carroussel-->
  </div>
  <img src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg" class="absolute">
  <div id="image1">
  </div>
  <div id="text1">
    <h2><?php $titre1 = get_field('titre1'); echo $titre1; ?></h3>
    <h4><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h4> <!--sous-titre ex : gérant de la maçonnerie-->
    <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
</div>
</div>
</section>



  </body>

<?php get_footer(); ?>
