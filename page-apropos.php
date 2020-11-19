<?php get_header(); ?>

<body>

  <h1 class="h1_flex"><?php $titre = get_field('titre'); echo $titre; ?></h1>
  <div id="underline_flex_about"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>

  <section class="wrap">
    <div class="bati_ancien">
      <div class="image_gauche">
        <?php
        $image1_ap = get_field('image1');
        if( !empty( $image1_ap ) ): ?>
        <img src="<?php echo esc_url($image1_ap['url']); ?>" alt="<?php echo esc_attr($image1_ap['alt']); ?>" />
        <?php endif; ?>
      </div>

      <div class="frame_assembly">
        <img class="cadre_gauche" src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg">
        <div class="text">
          <h2 class="h2_flex"><?php $titre1 = get_field('titre1'); echo $titre1; ?></h2>
          <h3 class="h3_flex"><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
          <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
        </div>
      </div>
  </div>
</div>

<div class="maconnerie">
  <div class="image_droit"> <!--order : 2-->
    <?php
    $image2_ap = get_field('image2');
    if( !empty( $image2_ap ) ): ?>
    <img src="<?php echo esc_url($image2_ap['url']); ?>" alt="<?php echo esc_attr($image2_ap['alt']); ?>" />
    <?php endif; ?>
  </div>
<div class="frame_assembly_2"><!--order : 1-->
  <img class="cadre_droit" src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg">
  <div class="texte2" >
    <h2 class="h2_flex"><?php $titre2 = get_field('titre2'); echo $titre2; ?></h2>
    <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h3>
    <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
  </div>
</div>
</div>
</section>

  </body>

<?php get_footer(); ?>
