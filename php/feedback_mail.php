<?php
//get data from form
$name =$_POST['name'];
$email =$_POST['email'];
$country =$_POST['country'];
$experience =$_POST['experience'];

$to = "dsupriyo52@gmail.com";

$subject = "Feedback Mail From Js Paint";
$txt = "Name =" . $name . "\r\nEmail = " . $email . "\r\nCountry = " . $country . "\r\nExperience = " . $experience;
$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";

if ($email!=NULL) {
    # code...
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:aboutus.html");
?>
