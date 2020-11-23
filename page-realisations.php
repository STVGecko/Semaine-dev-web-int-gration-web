<?php get_header(); ?>


  <section class="wrap_realization">
    <?php $projet = get_field('project'); ?>
    <?php foreach ($projet as $project): ?>
      <h1 class="title_realization"><?php echo($project['title_realization']); ?></h1>
      <div class="underline_realization"></div>
      <div class="image_set_realization">
        <div class="image_set1">
          <img src="<?php echo($project['picture_project_realization1']['url']); ?>" alt="image1">
          <img src="<?php echo($project['picture_project_realization2']['url']); ?>" alt="image2">
          <img src="<?php echo($project['picture_project_realization3']['url']); ?>" alt="image3">
        </div>
        <div class="image_set2">
          <img src="<?php echo($project['picture_project_realization4']['url']); ?>" alt="image4">
          <img src="<?php echo($project['picture_project_realization5']['url']); ?>" alt="image5">
          <img src="<?php echo($project['picture_project_realization6']['url']); ?>" alt="image6">
        </div>
      </div>
     <?php endforeach; ?>
  </section>
</body>

<?php get_footer(); ?>
