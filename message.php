<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'vinaychandil17@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Vinay chandil:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;

//auto-reply
$content='Thanks for writing to us. You will hear from us shortly. This is an auto generated email. Please do not reply to this mail. For any queries or suggestions, write to vinaychandil17@gmail.com';
wordwrap($content,70);
mail($email_address,'auto-reply: Green Earth Mission',$content);			
?>
