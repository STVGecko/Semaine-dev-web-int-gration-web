<?php get_header(); ?>

<body>
  <!-- Présentation de la page -->
<section id="contact_page">
  <h2 id="contact_title">Pour nous contacter</h2>
  <div id="underline_contact"></div>
  <br>
  <div id="presentation">
    <p id="bold_text">Pierre-André FLAMENS, gérant de la société M2A</p>
    <p id="small_text">Si vous avez la moindre question, ou si vous souhaitez nous demander un devis, n’hésitez pas.</p>
    <div class="test"></div><!-- rajouter num avec wordpress-->
  </div>
  <!-- Partie image -->
  <div id="wrap_contact">
    <div class="icon_contact" name="Telephone" onclick="location.href='tel:+33674116345'">
      <img src="<?php echo get_template_directory_uri();?>/images/phone.png" alt="Icône téléphone">
      <div class="text_contact" name="Telephone">
        <p>06 74 11 63 45</p><!-- rajouter mailto-->
      </div>
    </div>
    <div class="icon_contact" name="Mail" onclick="location.href='mailto:pa.flamens@orange.fr';">
      <img src="<?php echo get_template_directory_uri();?>/images/mail.png" alt="Icône mail">
      <div class="text_contact" name="Mail">
        <p>pa.flamens@orange.fr</p>
      </div>
    </div>
    <div class="icon_contact" name="Position" onclick="location.href='https://goo.gl/maps/FnvdsEjyCX638MbH7';">
      <img src="<?php echo get_template_directory_uri();?>/images/position.png" alt="Icône position">
      <div class="text_contact" name="Position">
        <p>68 Rue Bobby Sands<br>73000 Chambéry</p>
        <p><span><a href="https://goo.gl/maps/FnvdsEjyCX638MbH7">Ouvrir dans Maps ></a></span></p>
      </div>
    </div>
  </div>
    <!-- Partie texte -->
  <!--<div id="text_wrap_contact">
    <div class="text_contact" name="Telephone">
      <p>06 74 11 63 45</p>
    </div>
    <div class="text_contact" name="Mail">
      <p>pa.flamens@orange.fr</p>
    </div>
    <div class="text_contact" name="Position">
      <p>68 Rue Bobby Sands<br>73000 Chambéry</p>
      <p>Ouvrir dans Maps ></p>
    </div>
  </div>-->
  <div id="devis_contact">
    <h2 id="devis_title">Demande de devis</h2>
    <form class="form"><!-- DEBUT FORMULAIRE-->
      <div id="englobe_all">
        <div id="contact_gauche">
          <p class="contact_names" type="Prénom"><input class="contact_input" placeholder="Ecrivez votre prénom ici..." name="Prénom" type="text"></p>
          <p class="contact_names" type="Mail"><input class="contact_input" placeholder="Ecrivez votre mail ici..." name="Mail" type="email"></p>
        </div><!-- FIN CONTACT GAUCHE-->

        <div id="contact_droite">
          <p class="contact_names" type="Nom"> <input class="contact_input" placeholder="Ecrivez votre nom ici..."></input></p>
          <p class="contact_names" type="Téléphone"> <input class="contact_input" placeholder="Ecrivez votre téléphone ici..."></input></p>
        </div><!-- FIN CONTACT DROITE-->
        <div class="contact_message"><p class="contact_names" type="Message"><input type="textarea" class="contact_input" placeholder="Ecrivez votre message ici"></p><p>En envoyant ce message, vous consentez à la collecte et au traitement des données renseignées ci-dessus pour l’usage exclusif de
M2A Maçonnerie.<a href="#"> En savoir plus </a>></p></div>
        <div id="contact_button">
          <button class="contact_button">Envoyer</button>
        </div>
      </div>
    </form>
    <!-- FIN FORMULAIRE -->
  </div>
</section>

</body>











<!--<form class="form">
  <div id="englobe_all">
  <div id="contact_gauche">
    <p class="contact_names" type="Prénom"> <input class="contact_input" placeholder="Ecrivez votre prénom ici..."></input></p>
    <p class="contact_names" type="Mail"> <input class="contact_input" placeholder="Ecrivez votre mail ici..."></input></p>
    <div class="contact_message"><p class="contact_names" type="Message"><input class="contact_input" placeholder="Ecrivez votre message ici"></input></p></div>
  </div>
  <div id="contact_droite">
    <p class="contact_names" type="Nom"> <input class="contact_input" placeholder="Ecrivez votre nom ici..."></input></p>
    <p class="contact_names" type="Téléphone"> <input class="contact_input" placeholder="Ecrivez votre téléphone ici..."></input></p>
  </div>
  <div id="contact_button">
    <button class="contact_button">Envoyer</button>
  </div>
</div>
</form>-->


<?php get_footer(); ?>
