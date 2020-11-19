<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<script src="jquery-3.5.1.min.js"></script>

	<?php wp_head(); ?>
</head>
<body>
  <header>
		<div class="wrap_header">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Logo m2a maçonnerie d'antan et d'aujoud'hui">
			</div>
			<div class="global_menu">
				<div class="info_bar">
			      <div class="phone">
			        <img src="<?php echo get_template_directory_uri();?>/images/tel_header.svg">
			        <div class="text_icon">06 74 11 63 45</div>
			      </div>
			      <div class="mail">
			        <img src="<?php echo get_template_directory_uri();?>/images/mail_header.svg">
			        <div class="text_icon">pa.flamens.@orange.fr</div>
			    </div>
					<div class="estimation">
						<p>Demande de devis</p>
					</div>
				</div>
		    <div id="nav">
		      <?php wp_page_menu('show_home=1'); ?>
		    </div>
			</div>
		</div>
  </header>
