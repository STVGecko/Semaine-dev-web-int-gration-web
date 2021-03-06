<?php
/*
Template Name: Mentions légales
*/
?>

<?php get_header(); ?>

  <section class="wrap_realization">

    <h1 class="h1_flex">Mentions légales</h1>
    <div class="underline_realization"></div>

    <?php $mentions_legales = get_field('mentions_legales');?>
    <?php //var_dump($mentions_legales);?>
    <?php foreach ($mentions_legales as $mention_legale): ?>
    <p class="title_mentionl"><?php echo($mention_legale["titre_mentions_legales"]); ?></p>
    <p class="info_mentionl"><?php echo($mention_legale["infos_mentions_legales"]) ?></p>
    <?php endforeach; ?>

    <div class="underline_mentionl"></div>

    <p class="title_mentionl">Intégrateurs site-web :</p>
    <p class="info_mentionl">Steeven Lombardi, Clément Desouches Lucas Reymonet, Diego Prieto-Rodriguez</p>
    <p class="title_mentionl">Graphistes :</p>
    <p class="info_mentionl">Loriane Kah, Anthony Nehlig, Côme Fisset</p>
    <p class="kanzai">Agence Kanzaï ©2020-2021</p>

    <div class="underline_mentionl"></div>

    <p class="info_mentionl"><a class="mentionl" href="https://www.univ-smb.fr/" target="_blank">Université Savoie Mont Blanc, Technolac</a></p>
    <p class="info_mentionl"><a class="mentionl" href="https://www.iut-chy.univ-smb.fr/" target="_blank">Institut Universitaire de Technologie, Technolac</a></p>
    <p class="info_mentionl"><a class="mentionl" href="https://mmi.univ-smb.fr/site/" target="_blank">Pôle MMI, Métiers du Multimédia et de l'Internet, Technolac</a></p>
  </section>
</body>

<?php get_footer(); ?>
