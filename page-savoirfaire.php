<?php get_header(); ?>

<body>

  <h1 class="h1_flex">Savoir-faire</h1>
  <div id="underline_flex"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>



<section class="wrap">
  <div class="bati_ancien">
<div class="carrousel_gauche">
  <img src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg">
      <img src="<?php $image1 = get_field('image1'); echo $image1; ?>"  alt="carroussel"> <!--carroussel-->
      <!-- Flickity HTML init -->
      <div class="carousel"
   data-flickity='{ "lazyLoad": true }'>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="tulip" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="grapes" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="raspberries" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/wolf.jpg" alt="wolf" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/shore.jpg" alt="sea" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/leaf-droplets.jpg" alt="leaf droplets" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/gulls.jpg" alt="gulls" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/touch-screen.jpg" alt="touch screen" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/van.jpg" alt="van" />
  </div>
</div>
</div>
    <div id="image1">
    </div>
    <div class="texte">
      <h2 class="h2_flex"><?php $titre1 = get_field('titre1'); echo $titre1; ?></h2>
      <h3 class="h3_flex"><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
      <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
  </div>
</div>
<div class="maçonnerie">
  <div class="carrousel_droit">
    <!--<img src="<?php// $image2 = get_field('image2'); echo $image2; ?>"  alt="carroussel"> <!--carroussel-->
  </div>
  <img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg">
  <div id="image1">
  </div>
  <div class="texte">
    <h2 class="h2_flex"><?php $titre2 = get_field('titre2'); echo $titre2; ?></h2>
    <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
    <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
</div>
</div>
</section>



  </body>

<?php get_footer(); ?>
