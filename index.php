<?php get_header(); ?>

<div class="wrap_page">

	<section id="header">

		<div id="home_picture">
				<div id="title">
					<h1><?php $titre = get_field('titre'); echo $titre; ?></h1>
			</div>

			<!-- Image de l'accueil -->
			<?php
				$image1 = get_field('photo1');
				if( !empty( $image1 ) ): ?>
			<img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
			<?php endif; ?>

				<a href="#text_savoir-faire">
					<div class="absolute"><img src="<?php echo get_template_directory_uri();?>/images/defile.svg" alt="Faire défiler" class="scroll"></div>
				</a>
		</div>
	</section>

		<div id="text_savoir-faire">
			<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
				<div id="border1"> <h2> Notre savoir-faire </h2> </div>
			</a>
			<div id="paragraph1">
				<p> <?php $sf = get_field('sf_texte'); echo $sf; ?> </p>
			</div>
		</div>

		<div id="logo_savoir-faire">
				<h3>Bâti ancien</h3>
				<div id="wrap1">
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Restauration"><div class="picture1">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_restauration.svg" alt="Icône restauration"></div>
							<div class="icon_name">Restauration</div>
						</div>
					</a>
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Maçonnerie"><div class="picture2">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_maconnerie.svg" alt="Icône terrassement"></div>
							<div class="icon_name">Maçonnerie</div>
						</div>
					</a>
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Reprise en sous oeuvre"><div class="picture3">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_reprise.svg" alt="Icône reprise en sous-oeuvre"></div>
							<div class="icon_name">Reprise en sous oeuvre</div>
						</div>
					</a>
				</div>
				<h3>Maçonnerie traditionnelle</h3>
				<div id="wrap2">
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Agrandissement"><div class="picture4">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_agrandissement.svg" alt="Icône agrandissement"></div>
							<div class="icon_name">Agrandissement</div>
						</div>
					</a>
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Maçonnerie paysagère"><div class="picture5">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_paysagere.svg" alt="Icône maçonnerie paysagère"></div>
							<div class="icon_name">Maçonnerie paysagère</div>
						</div>
					</a>
					<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
						<div class="icon" name="Enduit"><div class="picture6">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_enduit.svg" alt="Icône enduit"></div>
							<div class="icon_name">Enduit</div>
						</div>
					</a>
				</div>

			</div>

		<div id="a-propos">

			<div id="a-propos_image">

				<?php
					$image2 = get_field('photo2');
					if( !empty( $image2 ) ): ?>
				<img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
				<?php endif; ?>

				<div class="absolute">	<img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg"> </div>
			</div>

			<div id="a-propos_text">
					<a href="<?php $propos = get_field('lpropos'); echo $propos; ?>">
						<div id="border2">	<h2> À propos </h2> </div>
					</a>

						<div id="paragraph2">
								<p> <?php $ap = get_field('ap_texte'); echo $ap; ?> </p>
						</div>

						<a href="<?php $propos = get_field('lpropos'); echo $propos; ?>"><p id="more">En savoir plus</p></a>

						<div class="absolute"><img src="<?php echo get_template_directory_uri();?>/images/arrow.svg" alt="Aller voir"></div>

			</div>
		</div>


		<div id="contact">

			<h3> Besoin de nos services ?
				<br/> Contactez-nous ! </h3>

		<a href="<?php $contact = get_field('lcontact'); echo $contact; ?>">
			<div id="estimation">	<p> Demande de devis <p> </div>
		</a>

		</div>

</div>

<script type="text/javascript">
jQuery(document).ready(function(){
$(".scroll").click(function() {
    $('html,body').animate({
        scrollTop: $(".text_savoir-faire").offset().top},
        'slow');
})});
</script>

<?php get_footer(); ?>
