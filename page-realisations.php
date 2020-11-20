<?php get_header(); ?>

<body>
  <section id="realization_page">

    <div class="zoom wrap_realization">
      <h2 id="realization_title">Projet construction piscine<? /*php $titre1 = get_field('titre1'); echo $titre1; */?></h2>
      <!--<p class="para">Description possible du projet<?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>-->
      <br>

      <div class="zoom">
        <img class="1" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_1.png" alt="Construction d'une piscine">
        <?php /*
          $image1_1 = get_field('image_r');
          if( !empty( $image1_1 ) ): */?>
          <img src="<?php echo esc_url($image1_1['url']); ?>" alt="<?php echo esc_attr($image1_1['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="zoom">
        <img class="2" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_2.png" alt="Construction d'une piscine">
        <?php /*
          $image1_2 = get_field('image_r');
          if( !empty( $image1_2 ) ): */?>
          <img src="<?php echo esc_url($image1_2['url']); ?>" alt="<?php echo esc_attr($image1_2['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="zoom">
        <img class="3" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_3.png" alt="Construction d'une piscine">
        <?php /*
          $image1_3 = get_field('image_r');
          if( !empty( $image1_3 ) ): */?>
          <img src="<?php echo esc_url($image1_3['url']); ?>" alt="<?php echo esc_attr($image1_3['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="zoom">
        <img class="4" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_4.png" alt="Construction d'une piscine">
        <?php /*
          $image1_4 = get_field('image_r');
          if( !empty( $image1_4 ) ): */?>
          <img src="<?php echo esc_url($image1_4['url']); ?>" alt="<?php echo esc_attr($image1_4['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="zoom">
        <img class="5" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_5.png" alt="Construction d'une piscine">
        <?php /*
          $image1_5 = get_field('image_r');
          if( !empty( $image1_5 ) ): */?>
          <img src="<?php echo esc_url($image1_5['url']); ?>" alt="<?php echo esc_attr($image1_5['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>
<!--
      <div class="zoom pict">
        <?php /*
          $image1_6 = get_field('image_r');
          if( !empty( $image1_6 ) ): */?>
          <img src="<?php //echo esc_url($image1_6['url']); ?>" alt="<?php //echo esc_attr($image1_6['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>-->

      <h2 id="realization_title">Mur de soutennement<? /*php $titre2 = get_field('titre1'); echo $titre2; */?></h2>
      <!--<p class="para">Description possible du projet<?php /*$texte2 = get_field('text2'); echo $texte2;*/ ?></p>-->
      <br>
      <div id="wrap_realization">

        <div class="zoom">
          <img class="1" src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_1.png" alt="Construction d'un mur de soutennement">
          <?php /*
            $image2_1 = get_field('image_r');
            if( !empty( $image2_1 ) ): */?>
            <img src="<?php echo esc_url($image2_1['url']); ?>" alt="<?php echo esc_attr($image2_1['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

        <div class="zoom">
          <img src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_2.png" alt="Construction d'un mur de soutennement">
          <?php /*
            $image2_2 = get_field('image_r');
            if( !empty( $image2_2 ) ): */?>
            <img src="<?php echo esc_url($image2_2['url']); ?>" alt="<?php echo esc_attr($image2_2['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

        <div class="zoom">
          <img src="<?php echo get_template_directory_uri();?>/images/mur_soutennement/mur_soutennement_3.png" alt="Construction d'un mur de soutennement">
          <?php /*
            $image2_3 = get_field('image_r');
            if( !empty( $image2_3 ) ): */?>
            <img src="<?php echo esc_url($image2_3['url']); ?>" alt="<?php echo esc_attr($image2_3['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

    </div>

    </div>

  </section>

</body>

  <?php get_footer(); ?>
