<?php
if( isset($_POST) ){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "diamanthaxhimusa@gmail.com";
	$subject = "Offre";
	$mailheader = "From: $email \r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$emailbody = "<p>You have received a new message from the enquiries form on your website.</p>
                      <p><strong>Name: </strong> {$name} </p>
                      <p><strong>Email Address: </strong> {$email} </p>
                      <p><strong>Message: </strong> {$message} </p>
                      <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

	mail($recipient, $subject, $emailbody, $headers) or die("Error!");
	echo "Thank You!";
}
?>
