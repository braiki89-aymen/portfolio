<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Ton adresse de réception
  $to = "aymen.braiki@esprit.tn";

  // Sujet de l'email
  $email_subject = "Nouveau message du site : $subject";

  // Contenu du message
  $email_body = "Nom : $name\n";
  $email_body .= "Email : $email\n";
  $email_body .= "Message :\n$message\n";

  // En-têtes
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envoi de l'email
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Message envoyé avec succès ✅";
  } else {
    echo "Erreur lors de l'envoi ❌";
  }
}
?>
