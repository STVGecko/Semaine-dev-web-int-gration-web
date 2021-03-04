<?php get_header(); ?>

  <section class="wrap_realization">

    <h1 class="h1_flex">Mentions légales</h1>
    <div class="title_mentionl_kanzai"></div>
    <div class="info_mentionl_kanzai"></div>

    <?php $mentions_legales = get_field('mentions_legales'); ?>
    <?php foreach ($mentions_legales as $mention_legale): ?>
    <div class="title_mentionl"><?php $propos = get_field('titre_mentions_legales'); echo $propos; ?></div>
    <div class="info_mentionl"><?php $propos = get_field('infos_mentions_legales'); echo $propos; ?></div>
    <?php endforeach; ?>
  </section>
</body>

<?php get_footer(); ?>
