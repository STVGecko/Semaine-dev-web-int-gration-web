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
    <div class="barre_info">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="logo m2a">
			</div>
      <div class="telephone">
        <img src="<?php echo get_template_directory_uri();?>/images/tel_header.svg" alt="téléphone"">
        <span>06 74 11 63 45</span>
      </div>
      <div class="mail">
        <img src="<?php echo get_template_directory_uri();?>/images/mail_header.svg" alt="téléphone">
        <span>pa.flamens.@orange.fr</span>
      </div>
      <div class="devis">
        <span>Demande de devis</span>
      </div>
    </div>
    <span id="menuprincipal">
      <?php wp_page_menu('show_home=1'); ?>
    </span>
  </header>
</body>
</html>
