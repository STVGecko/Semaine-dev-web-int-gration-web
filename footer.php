<footer>
	<div class="wrap_footer">
      <div class="logo_footer">
          <a href="#"><img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo_sanstxt.svg" alt="M2A Maçonnerie" /></a>
      </div>
			<div class="all_text_footer">
	      <div class="text_logo_footer">
	          <p class="big_font">Maçonnerie</p>
	          <p class="big_font">d’antan et</p>
	          <p class="big_font">d’aujourd’hui</p>
	      </div>
				<div class="block">
					<p class="big_font">Coordonnées</p>
						<p class="fine_font"><?php $num=get_field('telephone', get_option( 'page_on_front' )); echo $num; ?></p>
						<p class="fine font"><?php $mail=get_field('mail', get_option( 'page_on_front' )); echo $mail; ?></p>
				</div>
				<div class="block">
						<p class="fine_font"><?php $adresse=get_field('adresse', get_option( 'page_on_front' )); echo $adresse; ?></p>
						<p class="fine_font"><?php $ville=get_field('ville', get_option( 'page_on_front' )); echo $ville; ?></p>
				</div>
	      <div class="block">
					<p class="big_font">Réseaux sociaux</p>
					<div class="block">
						<div class="facebook">
							<p><a href="<?php $facebook=get_field('facebook', get_option( 'page_on_front' )); echo $facebook; ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_facebook_footer.svg" alt="Logo Facebook" /></a></p>
							<p class="fine_font"><a href="<?php $facebook=get_field('facebook', get_option( 'page_on_front' )); echo $facebook; ?>">Facebook</a></p>
						</div>
					</div>
				</div>
	      <div class="block">
						<p class="fine_font"><a href="">Données personnelles</a></p>
	          <p class="fine_font"><a href="">Mentions légales</a></p>
	          <p class="fine_font">© 2020, Kanzaï️</p>
				</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
