<?php get_header(); ?>
<?php
/*$msg = "";*/
if(isset($_POST['Envoyer'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['message']) AND !empty($_POST['telephone'])) {
      $headers=array('Content-Type: text/html; charset=UTF-8',
                    'From:"'.$_POST['prenom'].' '.$_POST['nom'].'" <'.$_POST['mail'].'>');
      $message='
      <html>
         <body>
            <div align="left">
               <br />
               <u>Nom et prénom de l\'expéditeur :</u>'.$_POST['nom'].' '.$_POST['prenom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <u>Téléphone de l\'expéditeur :</u>'.$_POST['telephone'].'<br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
            </div>
         </body>
      </html>
      ';
      /*$expediteur = get_option( 'admin_email' );*/
      wp_mail("lucas.reymonet@gmail.com", "Formulaire du devis", $message, $headers);/*remplacer expediteur par notre mail si jamais*/
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}



?>

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
    <div class="icon_contact" name="Telephone" onclick="location.href='tel:+`<?php $tel = get_field('telephone', get_option('page_on_front')); echo $tel; ?>`'">
      <img src="<?php echo get_template_directory_uri();?>/images/phone.svg" alt="Icône téléphone">
      <div class="text_contact" name="Telephone">
        <p><?php $tel = get_field('telephone', get_option('page_on_front')); echo $tel; ?></p><!-- rajouter mailto-->
      </div>
    </div>
    <div class="icon_contact" name="Mail" onclick="location.href='mailto:`<?php $mail = get_field('mail', get_option('page_on_front'));echo $mail; ?>`';">
      <img src="<?php echo get_template_directory_uri();?>/images/mail.svg" alt="Icône mail">
      <div class="text_contact" name="Mail">
        <p><?php $mail = get_field('mail', get_option('page_on_front')); echo $mail; ?></p>
      </div>
    </div>
    <div class="icon_contact" name="Position" onclick="location.href='https://goo.gl/maps/FnvdsEjyCX638MbH7';">
      <img src="<?php echo get_template_directory_uri();?>/images/position.svg" alt="Icône position">
      <div class="text_contact" name="Position">
        <p><?php $add = get_field('adresse', get_option('page_on_front')); echo $add; ?><br>
          <?php $ville = get_field('ville', get_option('page_on_front')); echo $ville; ?></p>
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
    <p style="display: flex; justify-content: center; color: grey; font-size: 18px; font-family: 'Mukta Mahee', sans-serif; width: 50%; text-align: center; margin: 0 auto; padding-top: 10px;">
      <?php if(isset($msg)) {
           echo $msg;
        }
        ?>
    </p>
    <form class="form" action="<?php the_permalink() ?>" method="POST"><!-- DEBUT FORMULAIRE-->
      <div id="englobe_all">
        <div id="contact_gauche">
          <p class="contact_names" type="Prénom"><input class="contact_input" placeholder="Ecrivez votre prénom ici..." name="prenom" type="text"></p>
          <p class="contact_names" type="Mail"><input class="contact_input" placeholder="Ecrivez votre mail ici..." name="mail" type="email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"></p>
        </div><!-- FIN CONTACT GAUCHE-->

        <div id="contact_droite">
          <p class="contact_names" type="Nom"> <input class="contact_input" placeholder="Ecrivez votre nom ici..." name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" ></input></p>
          <p class="contact_names" type="Téléphone"> <input class="contact_input" placeholder="Ecrivez votre téléphone ici..." name="telephone"></input></p>
        </div><!-- FIN CONTACT DROITE-->
        <div class="contact_message"><p class="contact_names" type="Message"><input type="textarea" class="contact_input" placeholder="Ecrivez votre message ici" name="message" value="<?php if(isset($_POST['message'])) { echo $_POST['message']; } ?>"></p><p class="en_savoir_plus">En envoyant ce message, vous consentez à la collecte et au traitement des données renseignées ci-dessus pour l’usage exclusif de
M2A Maçonnerie.</p><a href="https://fr.eni.com/particuliers/cookies" class="lien_en_savoir_plus"> En savoir plus ></a></div>
        <div id="contact_button">
          <input class="contact_button" type="submit" value="Envoyer" name="Envoyer"></input>
        </div>
      </div>
    </form>

    <!-- FIN FORMULAIRE -->
  </div>
</section>

</body>













<?php get_footer(); ?>
