<?php
// Traitement du formulaire
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $destinataire = "assakoprecieux@gmail.com";
    $sujet = $_POST['subject'];
    $message = $_POST['message'];

    
// Fonction pour envoyer un email
function envoyer_email($destinataire, $sujet, $message) {
    // Configuration du serveur SMTP
    $smtp = 'smtp.gmail.com';
    $port = 587;
    $email = 'contact@csi.cg';
    $motDePasse = '';

    // Création de la session SMTP
    $session = curl_init();
    curl_setopt($session, CURLOPT_URL, "smtp://$smtp");
    curl_setopt($session, CURLOPT_MAIL_FROM, $email);
    curl_setopt($session, CURLOPT_MAIL_RCPT, $destinataire);
    curl_setopt($session, CURLOPT_MAIL_DATA, $message);
    curl_setopt($session, CURLOPT_MAIL_AUTH, $email, $motDePasse);
    curl_setopt($session, CURLOPT_MAIL_ENCRYPTION, 'tls');
    curl_setopt($session, CURLOPT_MAIL_FROM_NAME, 'CSI');
    curl_setopt($session, CURLOPT_MAIL_SUBJECT, $sujet);

    // Envoi de l'email
    $result = curl_exec($session);
    curl_close($session);

    // Vérification de l'envoi
    if ($result) {
        return true;
    } else {
        return false;
    }
}

    $expediteur =  $_POST["email"];
    $nom = $_POST["name"];
    // Correction de l'envoi de l'email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $nom . " <" . $expediteur . ">\r\n";
    $headers .= "Reply-To: <" . $expediteur . ">\r\n";

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo 'Email envoyée avec succès.';
    } else {
        echo 'Échec de l\'envoi de l\'email.';
    }
}
