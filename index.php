<?php get_header(); ?>

	<section class="begin">
		<div class="home_picture">
			<div class="main_image">
				<div class="title">
					<h1><?php $titre = get_field('titre'); echo $titre; ?></h1>
				</div>
				<?php
					$image1 = get_field('background');
					if( !empty( $image1 ) ): ?>
				<img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
				<?php endif; ?>
			</div>
				<a href="#text_know-how">
					<div class="absolute"><img src="<?php echo get_template_directory_uri();?>/images/low_arrow.svg" alt="Faire défiler" class="scroll"></div>
				</a>
		</div>
	</section>
<div class="wrap_page">
	<div class="text_know-how">
		<a href="<?php $savoir = get_field('lsavoir'); echo $savoir; ?>">
			<div class="border1"> <h2> Notre savoir-faire </h2> </div>
		</a>
		<div class="paragraph1">
			<p> <?php $sf = get_field('sf_texte'); echo $sf; ?> </p>
		</div>
	</div>
	<div class="logo_know-how">
			<h3>Bâti ancien</h3>
			<div class="section_index">
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
			<div class="section_index">
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
		<div class="about_index">
			<div class="about_index_image">
				<?php
					$image2 = get_field('photo2');
					if( !empty( $image2 ) ): ?>
				<img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
				<?php endif; ?>
				<div class="absolute">	<img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg"> </div>
			</div>
			<div class="about_index_text">
					<a href="<?php $propos = get_field('lpropos'); echo $propos; ?>">
						<div class="border2">	<h2 class="about"> À propos </h2> </div>
					</a>
						<div class="paragraph2">
								<p> <?php $ap = get_field('ap_texte'); echo $ap; ?> </p>
						</div>
						<a href="<?php $propos = get_field('lpropos'); echo $propos; ?>"><p class="more">En savoir plus</p><img src="<?php echo get_template_directory_uri();?>/images/arrow.svg" alt="Aller voir"></a>
			</div>
		</div>
		<div class="contact">
			<h3> Besoin de nos services ?
				<br/> Contactez-nous ! </h3>

		<a href="<?php $contact = get_field('lcontact'); echo $contact; ?>">
			<div class="estimation_index">	<p> Demande de devis <p> </div>
		</a>

		</div>

</div>



<?php get_footer(); ?>
