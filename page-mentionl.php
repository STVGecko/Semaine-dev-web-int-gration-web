<?php
/*
Template Name: Mentions légales
*/
?>

<?php get_header(); ?>

  <section class="wrap_realization">

    <h1 class="h1_flex">Mentions légales</h1>
    <p class="title_mentionl">Intégrateurs web</p>
    <p class="info_mentionl">Steeven Lombardi, Clément Desouches Lucas Reymonet, Diego Prieto-Rodriguez</p>
    <p class="title_mentionl">Graphistes</p>
    <p class="info_mentionl">Loriane Kah, Anthony Nehlig, Côme Fisset</p>
    <p class="info_mentionl">Agence Kanzaï ©2020-2021</p>

    <?php $mentions_legales = get_field('mentions_legales'); ?>
    <?php foreach ($mentions_legales as $mention_legale): ?>
    <p class="title_mentionl"><?php $mention_legale = get_field('titre_mentions_legales'); echo $mention_legale; ?></p>
    <p class="info_mentionl"><?php $mention_legale = get_field('infos_mentions_legales'); echo $mention_legale; ?></p>
    <?php endforeach; ?>
  </section>
</body>

<?php get_footer(); ?>
