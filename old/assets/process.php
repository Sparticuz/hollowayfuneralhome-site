<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
$me = $_SERVER['PHP_SELF'];

session_register("SESSION");

//Test to see if the form was actually posted from our form
if (!session_is_registered("SESSION")){
	echo "<p>Invalid referer.\nPlease contact Holloway Funeral Homes directly at 813-855-2439</p>\n";
}	
	
} else {
			
	error_reporting(0);
	$recipient = 'info@hollowayfuneralhomefl.com';
	$subject = 'HFH - The Administrator Request Form';
	$from = addslashes($_REQUEST['name']);
	$address = addslashes($_REQUEST['street_address']);
	$city = addslashes($_REQUEST['city']);
	$state = addslashes($_REQUEST['state']);
	$zip = addslashes($_POST['zip']);
	$headers = "Reply-To: info@hollowayfuneralhomefl.com\r\n";
	$msg = "Please send 'The Administrator' CD to:\n\n$from\n$address\n$city, $state  $zip\n\n";
	$msg .= "Thank You.\n\n\n";
		
	if (mail($recipient, $subject, $msg, $headers)){
		echo nl2br("Message Sent Successfully!\n\n$msg\nYou will be returned in three seconds... <script type='text/javascript'>var t=setTimeout(\"window.location = 'http://www.hollowayfuneralhomefl.com'\", 3000);</script>");
		
			
	}
	else
		echo "Your message failed to send. Please contact Holloway Funeral Homes dircectly at 813-855-2439";
}
?>