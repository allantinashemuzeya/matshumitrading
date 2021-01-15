<?php

if(isset($_POST['submit'])){
$to = 'mailto:mathew@matshumitrading.co.za';
$subject = $_POST['subject'];
$firstname = $_POST['name'];
$email =$_POST['email'];
$website_url	= 	$_POST['website-url'];
$phone = $_POST['phone'];
$enquiry = $_POST['message'];
$header = 'From : '.$email.' Phone number: '.$phone;

mail($to,$subject,$header, $enquiry);
 
}

header('Location:http://http://matshumitrading.co.za/index.html');
?>
