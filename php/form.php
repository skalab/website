<?php

if (!isset($_POST["email"]))
{
	echo "Non.";
	exit();
}

$email = htmlspecialchars($_POST["email"]);
$name = htmlspecialchars($_POST["name"]);
$firstName = htmlspecialchars($_POST["firstName"]);
$phone = htmlspecialchars($_POST["phone"]);
$message = htmlspecialchars($_POST["message"]);
$ip = getenv("REMOTE_ADDR");
 
$EmailTo = "gael@skalab.fr";
$Subject = "Skalab: nouveau contact de ".$email;

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "First name: ";
$Body .= $firstName;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$Body .= "From: ";
$Body .= $ip;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success)
{
   echo "success";
}
else
{
    echo "error";
}
 
?>