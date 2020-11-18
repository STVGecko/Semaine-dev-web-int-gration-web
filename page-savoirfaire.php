<?php get_header(); ?>

<body>

  <h1 class="h1_flex"><?php $titre = get_field('titre_sf'); echo $titre; ?></h1>
  <div id="underline_flex"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro_sf'); echo $intro; ?></p>
  </div>
      <!-- Flickity HTML init -->
    <div class="carousel"
    data-flickity='{ "lazyLoad": true }'>
    <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="
      <?php
      $image1 = get_field('image1_sf');
      if( !empty( $image1 ) ): ?>
          <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
      <?php endif; ?>"/>
    </div>
    <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="<?php echo get_template_directory_uri();?>/images/carousel_1.png" alt="Photo2" />
    </div>
    <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="<?php echo get_template_directory_uri();?>/images/carousel_1.png" alt="Photo3" />
    </div>
    </div><!-- FIN CAROUSEL -->


  <section class="wrap">
    <div class="bati_ancien">
  <div class="carrousel_gauche">

        <!-- CAROUSEL A METTRE -->
</div>
<img class="cadre_gauche" src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg">
    <img src="<?php $image1 = get_field('image1_sf'); echo image1; ?>"  alt=""> <!--carroussel-->
    <div id="image1">
    </div>
    <div class="texte">
      <h2 class="h2_flex"><?php $titre1 = get_field('titre1_sf'); echo $titre1; ?></h2>
      <h3 class="h3_flex"><?php $stitre1 = get_field('stitre1_sf'); echo $stitre1; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
      <p class="para"><?php $texte1 = get_field('text1_sf'); echo $texte1; ?></p>
  </div>
</div>
<div class="maçonnerie">
  <div class="carrousel_droit">
    <!--<img src="<?php// $image2 = get_field('image2'); echo $image2; ?>"  alt="carroussel"> <!--carroussel-->
  </div>
  <img class="cadre_droit" src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg">
  <div id="image1">
  </div>
  <div class="texte">
    <h2 class="h2_flex"><?php $titre2 = get_field('titre2_sf'); echo $titre2; ?></h2>
    <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2_sf'); echo $stitre2; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
    <p class="para"><?php $texte2 = get_field('text2_sf'); echo $texte2; ?></p>
</div>
</div>
</section>



  </body>



<?php get_footer(); ?>
