<?php
if ($_POST['email'] == 'zafar.a.ali@ryerson.ca') {
$to =$_POST['email'];
$subject = "Forgot your password?";
$txt ="Your password is pass1";
$headers=" ";
mail($to,$subject,$txt,$headers,"-f cypresssystem2@gmail.com");
}
if ($_POST['email'] == 'nishita.acharya@ryerson.ca') {
$to =$_POST['email'];
$subject = "Forgot your password?";
$txt ="Your password is pass4";
$headers=" ";
mail($to,$subject,$txt,$headers,"-f cypresssystem2@gmail.com");
}


if ($_POST['email'] == 'cassandra.magdalena@ryerson.ca') {
$to =$_POST['email'];
$subject = "Forgot your password?";
$txt ="Your password is pass3";
$headers=" ";
mail($to,$subject,$txt,$headers,"-f cypresssystem2@gmail.com");
}

if ($_POST['email'] == 'malcolm.gomes@ryerson.ca') {
$to =$_POST['email'];
$subject = "Forgot your password?";
$txt ="Your password is pass5";
$headers=" ";
mail($to,$subject,$txt,$headers,"-f cypresssystem2@gmail.com");
}

if ($_POST['email'] == 'dannie.chen@ryerson.ca@ryerson.ca') {
$to =$_POST['email'];
$subject = "Forgot your password?";
$txt ="Your password is pass2";
$headers=" ";
mail($to,$subject,$txt,$headers,"-f cypresssystem2@gmail.com");
}

echo "An email has been sent with your password";

?>



