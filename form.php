<?php

	$first = $_GET['first'];
	$last = $_GET['last'];
	$message = $_GET['message'];
	$email = 'mathias.mustonen@hotmail.fi';
	
	$mailmessage = 'You got a mail from'.$first.' '.$last.' who said the following: \r\n'.$message;
	
	$to = 'mathias.mustonen@hotmail.fi';
	$subject = 'Website contact form';
	$headers = 'From: '.$email;

	mail($to,$subject,$mailmessage,$headers);
	header('Location: index.html');
?>