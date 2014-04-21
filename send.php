<?php  
	// Send Email
	if (isset($_POST['submit'])){
		$from = $_POST["email"]; // sender
	    $subject = $_POST["subject"];
	    $message = "This message is from: " . $_POST['name'] . "\n\n" . $_POST["message"];
	    $message = wordwrap($message, 70);
	    // send mail
	    mail("rabintoy@gmail.com",$subject,$message,"From: " . $from);
	} else {
		header("location: /");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Sent</title>
</head>
<body>
	<h2>Your Message Has Been Sent Successfully!</h2>
</body>
</html>