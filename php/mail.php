<?php

if (isset($_POST['sender_email'])){
	$sender_name=$_POST['sender_name'];
	$sender_email=$_POST['sender_email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
        
        $to= "info@pawatele.com";
	
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "From: $sender_name <$sender_email>";
	$headers[] = "Cc: Pawa Tele Gmail <pawatele@gmail.com>";
	$headers[] = "Reply-To: Recipient Name <$sender_email>";
	//$headers[] = "Subject: {$subject}";
	$headers[] = "X-Mailer: PHP/".phpversion();

	@mail($to, $subject, $message, implode("\r\n", $headers));
}
header('location:../');

?>