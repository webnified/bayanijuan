<?php  
	// Send Email
	if (isset($_POST['submit'])){
		$from = $_POST["email"]; // sender
	    $subject = $_POST["subject"];
	    $message = $_POST["message"];
	    $message = wordwrap($message, 70);
	    // send mail
	    mail("rabintoy@gmail.com",$subject,$message,"From: $from\n");
	} else {
		header("location: index.php");
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