<?php  
	require 'PHPMailerAutoload.php';
	// Send Emailt
	if (isset($_POST['submit'])){
	    $mail = new PHPMailer;
	    $mail->isSMTP();
	    $mail->Host = getenv('POSTMARK_SMTP_SERVER');
	    $mail->SMTPAuth = true;
	    $mail->Username = getenv('POSTMARK_API_KEY');
	    $mail->Password = getenv('POSTMARK_API_KEY'); 
	    $mail->SMTPSecure = 'tls';

	    $mail->From = $_POST["email"];
		$mail->FromName = $_POST["name"];
		$mail->addAddress('rabintoy@gmail.com', 'Raven Duran');

		$mail->WordWrap = 70;
		$mail->Subject = $_POST["subject"];
		$mail->Body    = "This message is from: " . $_POST['name'] . "\n\n" . $_POST["message"];

		if(!$mail->send()) {
		   echo '<h2>The message could not be sent. Please Try Again</h2>';
		   exit;
		}

		echo "<h2>Message has been successfully sent! We'll get to you the soonest.</h2>";
	} else {
		header("location: /");
	}
?>