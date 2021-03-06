<!DOCTYPE html>
<html>
<title>M2A - Maçonnerie d'antan et d'aujourd'hui</title>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>
<body>
  <header>
		<div class="wrap_header">
			<div class="logo">
				<a  href="<?php $home = get_field('lhome', get_option('page_on_front')); echo $home; ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Logo m2a maçonnerie d'antan et d'aujoud'hui"></a>
			</div>
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="global_menu">
				<div class="info_bar">
			      <div class="phone">
			        <img src="<?php echo get_template_directory_uri();?>/images/tel_header.svg">
			        <div class="text_icon"><?php $tel=get_field('telephone', get_option('page_on_front')); echo $tel; ?></div>
			      </div>
			      <div class="mail">
			        <img src="<?php echo get_template_directory_uri();?>/images/mail_header.svg">
			        <div class="text_icon-replace"><?php $mail=get_field('mail', get_option('page_on_front')); echo(str_replace("@", "arobaze", $mail));  ?></div>
			    </div>
						<div class="estimation">
							<a href="<?php $contact = get_field('lcontact', get_option('page_on_front')); echo $contact; ?>">
							Demande de devis
							</a>
						</div>
				</div>
		    <div class="nav">
					<?php wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container' => false,
                            'depth' => 1,
                            'items_wrap' => '<ul>%3$s</ul>'
                        ));?>
		    </div>
			</div>
		</div>
  </header>
