<?php get_header(); ?>

<body>
  <section id="realization_page">

    <?php foreach($realisations as $line): ?>

    <div class="zoom wrap_realization">
      <h2 id="realization_title"><?php $titre_rea = get_field('titre_rea'); echo $titre_rea; ?></h2>
      <!--<p class="para">Description possible du projet<?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>-->
      <br>
      <div class="underline_real"></div>

      <div class="array">
        <div class="pict">
          <?php foreach($line['images_rea'] as $image): ?>
          <img src="<?php echo($image["sizes"]["large"]);?>" />
          <?php endforeach;?>
        </div>

      </div>

    </div>

  <?php endforeach; ?>

  </section>

</body>

  <?php get_footer(); ?>
