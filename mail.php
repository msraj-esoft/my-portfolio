<?php
$page_success = "sent.html";
$page_failed = "failed.html";

$contact_name=$_POST['txtname'];
$contact_email=$_POST['txtemail'];
$contact_phone=$_POST['txtnumber'];
$contact_service=$_POST['txtservice'];
$contact_message=$_POST['txtcomment'];
$to_email = 'Qmdseraj@gmail.com';
$to_ccemail = 'esoft.msraj5795@gmail.com';
//$to_ccccemail = 'shinithet@gmail.com';
//you can give email id to whom you need to send
$html = 'New Message From Website';
$subject =  $html;


//$subject =  $email_sub;
$message = "You have received a new message from contact us page:\n\n".

"Customer Name: $contact_name\n\n".
"Customer E-mail Id: $contact_email \n\n".

"Customer Mobile Number: $contact_phone\n\n".
    "Message: $contact_service.\n\n".

$headers .= $email_sub;
$headers .= 'From: Mordecailegolas' . "\r\nReply-to: $contact_email"; //DONT GIVE SPACE IN "ABC"  //you can replace your value but no space.. if u give space you can get email in spam only..
$response = mail($to_email,$subject,$message,$headers);
mail($to_ccemail,$subject,$message,$headers);
//mail($to_ccccemail,$subject,$message,$headers);
if($response)
{
	
 
 header("Refresh: 0; url=$page_success");
}
else
{

   header("Refresh: 0; url=$page_failed");
}
?>