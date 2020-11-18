<?php get_header(); ?>

<body>

  <h1 class="h1_flex"><?php $titre = get_field('titre'); echo $titre; ?></h1>
  <div id="line"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>

  <div class="section">
    <img src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg" class="absolute">


    <div id="image1">

      <?php
$image1 = get_field('image1');
if( !empty( $image1 ) ): ?>
    <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
<?php endif; ?>

    </div>


    <div id="text1">
      <h2 class="h2_flex"><?php $titre1 = get_field('titre1'); echo $titre1; ?></h2>
      <h3 class="h3_flex"><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h3>
      <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
    </div>
  </div>
  <div class="section">
    <img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg" class="absolute">
    <div id="image2">

      <?php
$image2 = get_field('image2');
if( !empty( $image2 ) ): ?>
    <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
<?php endif; ?>

    </div>
    <div id="text2">
      <h2 class="h2_flex"><?php $titre2 = get_field('titre2'); echo $titre2; ?></h2>
      <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h3>
      <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
    </div>
  </div>

</body>

<?php get_footer(); ?>
