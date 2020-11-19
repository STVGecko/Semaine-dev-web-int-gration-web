<?php


$msg = "Nom:\t$prenom\n";
$msg = "Nom:\t$nom\n";
$msg .= "E-Mail:\t$mail\n";
$msg = "Nom:\t$telephone\n";
$msg .= "Message:\t$message\n\n";

$recipient = "lucas.reymonet@gmail.com";
$subject = "Formulaire";

$mailheaders = "From: Formulaire<> \n";
$mailheaders .= "Reply-To: $mail\n\n";

mail($recipient, $subject, $msg, $nom, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire validé</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>
