<?php get_header(); ?>

  <section class="wrap_realization">
    <?php $projet = get_field('project'); ?>
    <?php foreach ($projet as $project): ?>

      <h1 class="title_realization"><?php echo($project['title_realization']); ?></h1>
      <div class="underline_realization"></div>
      <div class="image_set_realization">
        <div class="image_set">
          <img src="<?php echo($project['picture_project_realization1']['url']); ?>" alt="">
          <img src="<?php echo($project['picture_project_realization2']['url']); ?>" alt="">
          <img src="<?php echo($project['picture_project_realization3']['url']); ?>" alt="">
        </div>
        <div class="image_set">
          <img src="<?php echo($project['picture_project_realization4']['url']); ?>" alt="">
          <img src="<?php echo($project['picture_project_realization5']['url']); ?>" alt="">
          <img src="<?php echo($project['picture_project_realization6']['url']); ?>" alt="">
        </div>
      </div>
    <?php endforeach; ?>
  </section>
</body>

<?php get_footer(); ?>
