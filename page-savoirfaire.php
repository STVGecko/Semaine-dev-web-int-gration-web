<?php get_header(); ?>


  <section class="wrap_flex">
  <h1 class="h1_flex"><?php $titre = get_field('titre'); echo $titre; ?></h1>
  <div class="underline_flex_know-how"></div>
  <br/>
  <div class="presentation">
    <p class="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>


    <div class="oldb">
  <div class="carrousel_sf_h">
      <!-- Flickity HTML init -->
    <div class="carousel" data-flickity='{ "lazyLoad": true }'>
<?php
$images = get_field('premier_carroussel');
 ?>
     <?php foreach ($images as $image): ?>
      <div class="carousel-cell">
          <img class="carousel-cell-image" src="<?php echo($image['images_1']['url']); ?>"/>
          <p class="legend"><?php echo($image['legende_1']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="frame_assembly_h">
      <img class="cadre_l" src="<?php echo get_template_directory_uri();?>/images/cadre_gauche.svg">
      <div class="text">
        <h2 class="h2_flex"><?php $titre1 = get_field('titre1'); echo $titre1; ?></h2>
        <h3 class="h3_flex"><?php $stitre1 = get_field('stitre1'); echo $stitre1; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
      </div>
  </div>
</div>

  <div class="oldb">
      <div class="carrousel_sf_l"><!--order : 2-->
        <!-- Flickity HTML init -->
        <div class="carousel"  data-flickity='{ "lazyLoad": true }'>
          <?php
          $images = get_field('deuxieme_carroussel');
           ?>
               <?php foreach ($images as $image): ?>
                <div class="carousel-cell">
                    <img class="carousel-cell-image" src="<?php echo($image['images_2']['url']); ?>"/>
                    <p class="legend"><?php echo($image['legende_2']); ?></p>
                </div>
                <?php endforeach; ?>
        </div>
    </div>


    <div class="frame_assembly_l"><!--order : 1-->
      <img class="cadre_r" src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg">
      <div class="text2" >
      <h2 class="h2_flex"><?php $titre2 = get_field('titre2'); echo $titre2; ?></h2>
      <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h3>
      <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
      </div>
    </div>
  </div>
  </section>
</body>

<?php get_footer(); ?>
