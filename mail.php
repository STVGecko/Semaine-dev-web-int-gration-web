<?php

<?php

if($_POST) {
    $nom = "";
    $mail = "";
    $email_title = "Formulaire";
    $message = "";
    $email_body = "<div>";

    if(isset($_POST['nom'])) {
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$nom."</span>
                        </div>";
    }

    if(isset($_POST['mail'])) {
        $mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['mail']);
        $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$mail."</span>
                        </div>";
    }

    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }


    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                        </div>";
    }

        $recipient = "lucas.reymonet@gmail.com";

    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $mail . "\r\n";

    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $nom. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>Désolé le mail na pas été envoyé .</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}
?>


















/*
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {

      // (1) Code PHP pour traiter l'envoi de l'email

      // Récupération des variables et sécurisation des données
      $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $objet = "Formulaire";
      $mail = htmlentities($_POST['mail']);
      $message = htmlentities($_POST['message']);

      // Variables concernant l'email

      $destinataire = 'lucas.reymonet@gmail.com'; // Adresse email du webmaster (à personnaliser)
      $contenu = '<html><head><title> '.$objet.' </title></head><body>';
      $contenu .= '<p>Tu as un nouveau message !</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

      // Envoyer l'email
      mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
      header("location:page-contact.php"); // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
