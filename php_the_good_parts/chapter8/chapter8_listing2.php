<?php 
if($OK_to_SMS) {
				
	$SMSPhoneNum = str_replace('-', '',$CellNumber);
								
	$sql = <<<SQL
SELECT SMSDomain
FROM SMSProvider
WHERE SMSProviderID = '$SMSProviderID'
SQL;

	$db = new mysqli(
		"localhost",	// database server 
		$db_username, 	// username
		$db_password, 	// password
		$db_name ) 		// database name
		or die("Cannot connect to server. Error code: %s\n" . mysqli_connect_errno());	
	
	$result = $db->query($sql) or die("Could not execute SQL: $sql");
	$row = $result->fetch_assoc();
	
	$body = "Dear $Fname $Lname: \r\n \r\n"
	. "We would like to inform you that you have been selected for jury duty. "
	. "Check your email at $ContactEmail for more detailed information.";
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	
	$mail->Host = "localhost";
	$mail->From = "notification@juryduty.com";
	$mail->FromName = "Law Courts of Anytown";
	$mail->AddAddress($SMSPhoneNum . $row['SMSDomain']);
	$mail->Body = $body;
	$mail->WordWrap = 50;
		
	if(!$mail->Send()) {
		echo "Jury duty notification not sent: SMS <br/>";
		echo "Mailer Error: " . $mail->ErrorInfo . "<br/>";
	} else {
		echo "Jury duty notification sent";
	}
}
?>