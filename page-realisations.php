<?php get_header(); ?>

<body>
  <section id="realisations_page">
    <h2 id="realisations_title">t<? /*php $titre1 = get_field('titre1'); echo $titre1; */?></h2>
    <div id="underline"></div>
    <br>
    <p class="para"><?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>
    <br>
    <div id="wrap_realisations">

      <div class="piscine">
        <img class="main-page-img-large" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_1.png" alt="Construction d'une piscine">
        <?php /*
          $image1_1 = get_field('image_r');
          if( !empty( $image1_1 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="piscine">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_2.png" alt="Construction d'une piscine">
        <?php /*
          $image1_2 = get_field('image_r');
          if( !empty( $image1_2 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="piscine">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_3.png" alt="Construction d'une piscine">
        <?php /*
          $image1_3 = get_field('image_r');
          if( !empty( $image1_3 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="piscine">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_4.png" alt="Construction d'une piscine">
        <?php /*
          $image1_4 = get_field('image_r');
          if( !empty( $image1_4 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="piscine">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_5.png" alt="Construction d'une piscine">
        <?php /*
          $image1_5 = get_field('image_r');
          if( !empty( $image1_5 ) ): */?>
        <?php endif; ?>
      </div>

    </div>

    <br><br><br><br><br><br>


    <h2 id="realisations_title">Mur de soutennement<? /*php $titre2 = get_field('titre1'); echo $titre2; */?></h2>
    <div id="underline"></div>
    <br>
    <p class="para"><? /*php $texte2 = get_field('text1'); echo $texte2;*/ ?></p>
    <br>
    <div id="wrap_realisations">

      <div class="mur1">
        <img src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_1.png" alt="Construction d'un mur de soutennement">
        <?php /*
          $image2_1 = get_field('image_r');
          if( !empty( $image2_1 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="mur2">
        <img src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_2.png" alt="Construction d'un mur de soutennement">
        <?php /*
          $image2_2 = get_field('image_r');
          if( !empty( $image2_2 ) ): */?>
        <?php endif; ?>
      </div>

      <div class="mur3">
        <img src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_3.png" alt="Construction d'un mur de soutennement">
        <?php /*
          $image2_3 = get_field('image_r');
          if( !empty( $image2_3 ) ): */?>
        <?php endif; ?>
      </div>

    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>

  </section>

</body>

  <?php get_footer(); ?>
