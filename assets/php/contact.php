<?php
require_once '../../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('28c5919269a301')
  ->setPassword('4663568ffea50a')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Une peronne vous a contacté depuis votre formulaire'))
  ->setFrom([$_POST['email'] => $_POST['prenom'].' '.$_POST['nom']])
  ->setTo(['nicolas.peter67@yahoo.com' => 'Nicolas Peter'])
  ->setBody(htmlspecialchars($_POST['message']))
  ;

// Send the message
$result = $mailer->send($message);