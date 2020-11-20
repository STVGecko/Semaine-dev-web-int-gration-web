<?php get_header(); ?>

<body>
  <section id="realization_page">

    <div class="zoom wrap_realization">
      <h2 id="realization_title"><?php $titre_rea = get_field('titre_rea'); echo $titre_rea; ?></h2>
      <!--<p class="para">Description possible du projet<?php /*$texte1 = get_field('text1'); echo $texte1;*/ ?></p>-->
      <br>
      <div class="underline_real"></div>

      <div class="array">
        <div class="pict">
          <!--<img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_1.png" alt="Construction d'une piscine"> -->
          <?php
            $image1_rea = get_field('image1_rea');
            if( !empty( $image1_rea ) ): ?>
            <img src="<?php echo esc_url($image1_rea['url']); ?>" alt="<?php echo esc_attr($image1_rea['alt']); ?>" />
          <? php endif; ?>
        </div>

        <div class="pict">
          <!-- <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_2.png" alt="Construction d'une piscine"> -->
          <?php
            $image2_rea = get_field('image2_rea');
            if( !empty( $image2_rea ) ): ?>
            <img src="<?php echo esc_url($image2_rea['url']); ?>" alt="<?php echo esc_attr($image2_rea['alt']); ?>" />
          <? php endif; ?>
        </div>

        <div class="pict">
          <!-- <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_3.png" alt="Construction d'une piscine"> -->
          <?php
            $image3_rea = get_field('image3_rea');
            if( !empty( $image3_rea ) ): ?>
            <img src="<?php echo esc_url($image3_rea['url']); ?>" alt="<?php echo esc_attr($image3_rea['alt']); ?>" />
          <? php endif; ?>
        </div>


<!--
        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_4.png" alt="Construction d'une piscine">
          <?php /*
            $image1_4 = get_field('image_r');
            if( !empty( $image1_4 ) ): */?>
            <img src="<?php echo esc_url($image1_4['url']); ?>" alt="<?php echo esc_attr($image1_4['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

        <div class="pict">
          <img src="<?php echo get_template_directory_uri();?>/images/piscine/piscine_5.png" alt="Construction d'une piscine">
          <?php /*
            $image1_5 = get_field('image_r');
            if( !empty( $image1_5 ) ): */?>
            <img src="<?php echo esc_url($image1_5['url']); ?>" alt="<?php echo esc_attr($image1_5['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>

        <div class="pict">
          <?php /*
            $image1_6 = get_field('image_r');
            if( !empty( $image1_6 ) ): */?>
            <img src="<?php //echo esc_url($image1_6['url']); ?>" alt="<?php //echo esc_attr($image1_6['alt']); ?>" />
          <?/* php endif;*/ ?>
        </div>
-->
    </div>

    </div>

    </div>

  </section>

</body>

  <?php get_footer(); ?>
