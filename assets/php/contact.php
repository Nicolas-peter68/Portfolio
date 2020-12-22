<?php
$to = 'nicolas.peter67@yahoo.com';
$objet = $_POST['objet'];
$message = '<html><head><meta charset="UTF-8"><title>Carte</title></head><body>'.
'<p>'.$_POST['message'].'</p></body></html>';
$headers = 
    'MIME-Version: 1.0'."\r\n".
    'Content-type: text/html; charset=UTF-8'."\r\n".
    'From: '. $_POST['nom'].'<'. $_POST['email'].'>'."\r\n".
    'Reply-To: '. $_POST['email']."\r\n".
    'X-Mailer: '. 'PHP/' . phpversion()
;

mail($to,$objet,$message,$headers);

/* 
require_once '../../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('28c5919269a301')
  ->setPassword('4663568ffea50a')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Via formulaire : '.$_POST['objet']))
  ->setFrom([$_POST['email'] =>$_POST['nom']])
  ->setTo(['nicolas.peter67@yahoo.com' => 'Nicolas Peter'])
  ->setBody(htmlspecialchars($_POST['message']))
  ;

// Send the message
$result = $mailer->send($message);
*/