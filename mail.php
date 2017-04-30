<?php

//set_include_path(get_include_path() . ':' . '.');
require 'vendor/autoload.php';
   date_default_timezone_set('Europe/Belgrade');

$bodyMail = '';
$subjectEmail = 'Mail from'.' '.$_POST['email'];

        if($_POST['type'] == "special"){
         $bodyMail = '<label><b>Email: </b></label>'.$_POST['email'].'<br>'.
              '<label><b>Phone: </b></label>'.$_POST['phone'].'<br>'.
              '<label><b>Name: </b></label>'.$_POST['name'].'<br>'.
              '<label><b>Website: </b></label>'.$_POST['website'].'<br>'.
              '<label><b>Description: </b></label>'.$_POST['description'].'<br>';
            }else{
              $bodyMail = '<label><b>Email: </b></label>'.$_POST['email'].'<br>'.
              '<label><b>Budget: </b></label>'.$_POST['budget'].'<br>'.
              '<label><b>Website: </b></label>'.$_POST['website'].'<br>'.
              '<label><b>Name: </b></label>'.$_POST['name'].'<br>'.
              '<label><b>Phone: </b></label>'.$_POST['phone'].'<br>'.
              '<label><b>Description: </b></label>'.$_POST['description'].'<br>';
            }
            

$transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
  ->setUsername('sacha@emiratesgraphic.com')  
  ->setPassword('Sacha@1122');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subjectEmail)
  ->setFrom(array($_POST['email'] => 'emiratesgraphic.com'))
  ->setTo(array('blinizeka@gmail.com' => ''))
  ->setBody($bodyMail, 'text/html');

// Send the message
$result = $mailer->send($message);

echo 'Email sent successfully';

?>