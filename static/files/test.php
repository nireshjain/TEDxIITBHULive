<?php
	$to='nicky13niresh@gmail.com';
	$subject='This is a miracle';
	$body='Email';
	$headers='From: someone@gmail.com';
	
	if (mail($to, $subject, $body, $headers)){
		echo 'The email was sent to '.$to;
		} else {
		echo 'An Error occurred';
		}
?>