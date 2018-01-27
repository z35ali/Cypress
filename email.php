<?php
$to = "zafar.a.ali2@gmail.ca";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: zafar.a.ali2@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>


