<?php
	$to = "cleebp@gmail.com";
	$subject = "[AsUBus.com] Mail from contact form!";
	$name = $_POST['Name'];
	$mail = $_POST['Mail'];
	$message = $_POST['Message'];
	
	$content = $name . " @ " . $mail . " wrote the following: " . "\n\n" . $message;
	mail($to, $subject, $content);
	echo "Mail sent. Thank you " . $name . ", we will contact you shortly.";
	
	$url = "http://asubus.com/index.html";
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  
?>