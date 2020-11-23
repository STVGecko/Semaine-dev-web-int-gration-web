<?php get_header(); ?>


  <section class="wrap_realization">
    <?php foreach ($projet as $projet): ?>
      <div class="title"><?php echo($projet['title_project']); ?></div>
      <div class="underline_realization"></div>
      <div class="image_set_realization">
        <div class="image_set1">
          <img src="<?php echo($projet['picture_project_realization1']['url']); ?>" alt="">
          <img src="<?php echo($projet['picture_project_realization2']['url']); ?>" alt="">
          <img src="<?php echo($projet['picture_project_realization3']['url']); ?>" alt="">
        </div>
        <div class="image_set2">
          <img src="<?php echo($projet['picture_project_realization4']['url']); ?>" alt="">
          <img src="<?php echo($projet['picture_project_realization5']['url']); ?>" alt="">
          <img src="<?php echo($projet['picture_project_realization6']['url']); ?>" alt="">
        </div>
      </div>
     <?php endforeach; ?>
  </section>
</body>

<?php get_footer(); ?>
