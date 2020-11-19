<?php get_header(); ?>

<body>
  <section id="realization_page">

    <div class="zoom wrap_realization">
      <h2 id="realization_title">Projet construction piscine<? /*php $titre1 = get_field('titre1'); echo $titre1; */?></h2>
      <div id="underline"></div>
      <br>
      <p class="para">Description possible du projet tu connais<?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>
      <br>

      <div class="proj">
        <img class="main-page-img-large" src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_1.png" alt="Construction d'une piscine">
        <?php /*
          $image1_1 = get_field('image_r');
          if( !empty( $image1_1 ) ): */?>
          <img src="<?php echo esc_url($image1_1['url']); ?>" alt="<?php echo esc_attr($image1_1['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="proj">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_2.png" alt="Construction d'une piscine">
        <?php /*
          $image1_2 = get_field('image_r');
          if( !empty( $image1_2 ) ): */?>
          <img src="<?php echo esc_url($image1_2['url']); ?>" alt="<?php echo esc_attr($image1_2['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="proj">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_3.png" alt="Construction d'une piscine">
        <?php /*
          $image1_3 = get_field('image_r');
          if( !empty( $image1_3 ) ): */?>
          <img src="<?php echo esc_url($image1_3['url']); ?>" alt="<?php echo esc_attr($image1_3['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="proj">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_4.png" alt="Construction d'une piscine">
        <?php /*
          $image1_4 = get_field('image_r');
          if( !empty( $image1_4 ) ): */?>
          <img src="<?php echo esc_url($image1_4['url']); ?>" alt="<?php echo esc_attr($image1_4['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="proj">
        <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_5.png" alt="Construction d'une piscine">
        <?php /*
          $image1_5 = get_field('image_r');
          if( !empty( $image1_5 ) ): */?>
          <img src="<?php echo esc_url($image1_5['url']); ?>" alt="<?php echo esc_attr($image1_5['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

      <div class="proj">
        <?php /*
          $image1_6 = get_field('image_r');
          if( !empty( $image1_6 ) ): */?>
          <img src="<?php echo esc_url($image1_6['url']); ?>" alt="<?php echo esc_attr($image1_6['alt']); ?>" />
        <?/* php endif;*/ ?>
      </div>

    </div>

  </section>

</body>

  <?php get_footer(); ?>
