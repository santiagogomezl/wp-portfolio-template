<?php
include("constans.php");
include("phpmailer/class.phpmailer.php");
include("phpmailer/class.smtp.php");
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_POST['send']))): 	

	if(isset($_POST['myname'])){$myname=$_POST['myname'];}
	if(isset($_POST['myemail'])){$myemail=$_POST['myemail'];}
	if(isset($_POST['mymessage'])){$mycomment=$_POST['mymessage'];}
	
	$formerros=false;
	
	if($myname ===''):
	$status_message.='Anonymous, eh? ';
	$formerros=true;
	endif;
	
	if($myemail ===''):
	$status_message.='Email is needed in order to contact you back.';
	$formerros=true;
	endif;
	
	
	if(!($formerros)){
		
	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->Host = SMTP_SERVER; // specify main and backup server
	//$mail->SMTPSecure = 'ssl';
	$mail->Port = SMTP_PORT; // set the port to use
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = SMTP_USERNAME; // your SMTP username or your gmail username
	$mail->Password = SMTP_PASSWORD; // your SMTP password or your gmail password
	$from =$myemail; // Reply to this email
	$to=SMTP_USERNAME; // Recipients email ID
	$name="santiagogomezl.com"; // Recipient's name
	$mail->From = $from;
	$mail->FromName = "santiagogomezl.com"; // Name to indicate where the email came from when the recepient received
	$mail->AddAddress($to,$name);
	$mail->AddReplyTo($from,ucwords($myname));
	$mail->WordWrap = 50; // set word wrap
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "Contact from: ".ucwords($myname);
	$mail->Body = nl2br("Name: ".ucwords($myname)." \n E-Mail: {$myemail}\n Comment: ".ucfirst($mycomment)); //HTML Body
	$mail->AltBody = nl2br("Name: ".ucwords($myname)." \nE-Mail: {$myemail}\n Comment: ".ucfirst($mycomment)); //Text Body
	$mail->Send();
	$myname='';
	$myemail='';
	$mycomment='';
	$status_message='Your message&#39;s been sent, I&#39;ll get back to you soon';	
	}

endif;
?>