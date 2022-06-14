<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$mail = $_POST['email'];
$request = $_POST['request'];

$mailheader = "From:" .$name. "<" .$email. ">/r/n";

$recipient = "lu.nd3@hotmail.com";

mail($recipient, $subject, $request, $mailheader);
or die(Error!);

echo"Message Send";
?>