<?php

$email = $_POST["email"];
 
$EmailTo = "gael@skalab.fr";
$Subject = "Skalab: nouveau contact";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>