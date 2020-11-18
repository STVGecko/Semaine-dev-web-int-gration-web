<?php get_header(); ?>

<body>

  <h2>A propos</h2>
  <div id="underline"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>

  <div class="section">
    <img src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg" class="absolute">
    <div id="image1">
      <?php $image1 = get_field('image1'); echo $image1; ?>
    </div>
    <div id="text1">
      <h3><?php $titre1 = get_field('titre1'); echo $titre1; ?></h3>
      <h4><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h4>
      <p class="para"><?php $texte1 = get_field('text1'); echo $texte1; ?></p>
    </div>
  </div>
  <div class="section">
    <img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg" class="absolute">
    <div id="image2">
      <?php $image2 = get_field('image2'); echo $image2; ?>
    </div>
    <div id="text2">
      <h3><?php $titre2 = get_field('titre2'); echo $titre2; ?></h3>
      <h4><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h4>
      <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
    </div>
  </div>

</body>
