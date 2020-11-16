<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta charset="utf-8">
</head>
<?php include('include/header.php'); ?>
<body>
  <header>
    <div class="barre_info">
      <div class="telephone">
        <img src="images/tel_header.svg">
        <span>06 74 11 63 45</span>
      </div>
      <div class="mail">
        <img src="images/mail_header.svg">
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
<?php include('include/footer.php'); ?>
