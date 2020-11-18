<?php get_header(); ?>

<body>

  <h1 class="h1_flex"><?php $titre = get_field('titre_sf'); echo $titre; ?></h1>
  <div id="underline_flex"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro_sf'); echo $intro; ?></p>
  </div>

  <section class="wrap">
    <div class="bati_ancien">
  <div class="carrousel_gauche">
      <!-- Flickity HTML init -->
    <div class="carousel"
    data-flickity='{ "lazyLoad": true }'>
    <div class="carousel-cell">

    <?php
    $image1 = get_field('image1_sf');
    if( !empty( $image1 ) ): ?>
    <img class="carousel-cell-image" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
    <?php endif; ?>

    </div>
    <div class="carousel-cell">
      <?php
      $image1 = get_field('image1_sf');
      if( !empty( $image1 ) ): ?>
      <img class="carousel-cell-image" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
      <?php endif; ?>

    </div>
    <div class="carousel-cell">
      <?php
      $image1 = get_field('image1_sf');
      if( !empty( $image1 ) ): ?>
      <img class="carousel-cell-image" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
      <?php endif; ?>
    </div>
    </div><!-- FIN CAROUSEL -->




        <!-- CAROUSEL A METTRE -->
</div>
<img class="cadre_gauche" src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg">

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

  <div class="texte">
    <h2 class="h2_flex"><?php $titre2 = get_field('titre2_sf'); echo $titre2; ?></h2>
    <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2_sf'); echo $stitre2; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
    <p class="para"><?php $texte2 = get_field('text2_sf'); echo $texte2; ?></p>
</div>
</div>
</section>



  </body>



<?php get_footer(); ?>
