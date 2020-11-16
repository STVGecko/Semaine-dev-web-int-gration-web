<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>
  <header>
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="logo m2a maçonnerie d'antan et d'aujoud'hui">
			</div>
			<div class="menuglobal">
				<div class="barre_info">
		      <div class="telephone">
		        <img src="<?php echo get_template_directory_uri();?>/images/tel_header.svg">
		        <div class="texte_icone">06 74 11 63 45</div>
		      </div>
		      <div class="mail">
		        <img src="<?php echo get_template_directory_uri();?>/images/mail_header.svg">
		        <divclass="texte_icone">pa.flamens.@orange.fr</div>
						<div class="devis">
			        <span>Demande de devis</span>
			      </div>
		    </div>
		    <div id="menuprincipal">
		      <?php wp_page_menu('show_home=1'); ?>
		    </div>
			</div>
  </header>
</body>
</html>
