<?php
// the message
$msg = "First line of text\nSecond line of text\n\nThanks";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers = "From: support@webapplicationsite.com" . "\r\n";
// send email
mail("test-sdffe@mail-tester.com","This is the Mail Subject",$msg, $headers);
?>
