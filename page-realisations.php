<?php get_header(); ?>

<body>

  <?php //$realisations = get_field('realisations'); ?>
  <section id="realization_page">

    <?php //oreach($realisations as $line): ?>

    <div class="zoom wrap_realization">
      <h2 id="realization_title"><?php $titre_rea = get_field('titre_rea'); echo $titre_rea; ?></h2>
      <!--<p class="para">Description possible du projet<?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>-->
      <br>
      <div class="underline_real"></div>

      <div class="array">

<!--
        <div class="pict">
          <?php //foreach($line['images_rea'] as $image): ?>
          <img src="<?php //echo($image["sizes"]["large"]);?>" />
          <?php //endforeach;?>
        </div>
-->

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_1.png" alt="Construction d'une piscine">
        </div>

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_2.png" alt="Construction d'une piscine">
        </div>

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_3.png" alt="Construction d'une piscine">
        </div>

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_4.png" alt="Construction d'une piscine">
        </div>

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_5.png" alt="Construction d'une piscine">
        </div>

        <div class="pict">
          <?php /*
            $image1_6 = get_field('image_r');
            if( !empty( $image1_6 ) ): */?>
            <img src="<?php //echo esc_url($image1_6['url']); ?>" alt="<?php //echo esc_attr($image1_6['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

      </div>

    </div>

  </section>

</body>

  <?php get_footer(); ?>

    </div>

  <?php endforeach; ?>

  </section>

</body>

  <?php get_footer(); ?>
