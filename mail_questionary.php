<?php

require 'vendor/autoload.php';
   date_default_timezone_set('Europe/Belgrade');


	  if(function_exists($_GET['f'])) {
	   $_GET['f']();
		}
		else{
			echo "This function does not exists";
		}

	function questionary (){

		// Check array if exists
		if (array_key_exists('step1', $_GET)) {$step1 = json_decode($_GET['step1']);}
		else{$step1 = null;}
		if (array_key_exists('step2', $_GET)) {$step2 = json_decode($_GET['step2']);}
		else{$step2 = null;}
		if (array_key_exists('step3', $_GET)) {$step3 = json_decode($_GET['step3']);}
		else{$step3 = null;}
		if (array_key_exists('step4', $_GET)) {$step4 = json_decode($_GET['step4']);}
		else{$step4 = null;}
		if (array_key_exists('step5', $_GET)) {$step5 = json_decode($_GET['step5']);}
		else{$step5 = null;}
		if (array_key_exists('step6', $_GET)) {$step6 = json_decode($_GET['step6']);}
		else{$step6 = null;}


		$contact = json_decode($_GET['contact']);

		$content = '';
	
		$content .='
  
    <td>
	    <table cellpadding="0" cellspacing="0" width="100%">

	       <tr>
	           <td>
	             <ul>';
	       		 $content .= '<li></b>Email: '.$contact->email.'</li>';
	       		 $content .= '<li></b>Name: '.$contact->name.'</li>';
	       		 $content .= '<li></b>Phone: '.$contact->phone.'</li>';
	       		$content .= '</ul>
	           	<h3>Step 1</h3>
			    <ul>';
			    if($step1 != null){
				    foreach($step1 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>

			    <h3>Step 2</h3>
			    <ul>';
			       if($step2 != null){
				    foreach($step2 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>
			   <h3>Step 3</h3>
			    <ul>';
			     if($step3 != null){
				    foreach($step3 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>
			   <h3>Step 4</h3>
			    <ul>';
			      if($step4 != null){
				    foreach($step4 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>
			   <h3>Step 5</h3>
			    <ul>';
			     if($step5 != null){
				    foreach($step5 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>
			    <h3>Step 6</h3>
			    <ul>';
			      if($step6 != null){
				    foreach($step6 as $key){
			        $content .= '<li>'.$key.'</li>';
			    	}
		    	}
			   $content .= '</ul>
	           </td>
	          
	       </tr>
	   </table>
	</td>';

	sendMail($content, $contact->email, $contact->name);
	}


	
	function sendMail($body, $email, $name){
		$transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
	  		->setUsername('sacha@emiratesgraphic.com')  
	  		->setPassword('Sacha@1122');

		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		// Create a message
		$message = Swift_Message::newInstance("Questionnaire email by ". $name)
		  ->setFrom(array($email => 'emiratesgraphic.com'))
		  ->setTo(array('sacha@emiratesgraphic.com' => ''))
		  ->setBody($body, 'text/html');

		// Send the message
		$result = $mailer->send($message);

		echo "Questionnaire mail sent successfully";
	}
?>