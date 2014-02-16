<?php
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['message'];
$email_from = $name.'<'.$email.'>';

$to="m@madsn.net";
$subject="[Noptech.com contact form message]";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: ".$email_from."\r\n";
$message="

     Name:
     $name
     <br>
     Email-Id:
     $email
     <br>
     Message:
     $query

";
if(mail($to,$subject,$message,$headers))
    header("Location:index.php?msg=Thank you for contacting us, you should hear back within a day or two.#slide-3");
else
    header("Location:index.php#slide-3?msg=We're sorry, the contact form was unable to fulfil your request. Please contact us by mail instead: <a href='mailto:mail@noptech.com'>mail@noptech.com</a>.");
    //contact:-your-email@your-domain.com
?>
