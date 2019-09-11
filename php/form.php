<?php

if (!isset($_POST["email"]))
{
	echo "Non.";
	exit();
}

$email = htmlspecialchars($_POST["email"]);
$ip = getenv("REMOTE_ADDR");
 
$EmailTo = "gael@skalab.fr";
$Subject = "Skalab: nouveau contact de " + $email;

$Body .= "Email: ";
$Body .= $email;
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
    echo "invalid";
}
 
?>