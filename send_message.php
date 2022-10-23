<?php
// the message
// var_dump($GLOBALS);
// echo $_POST["Name"];
$msg_name = $_POST["Name"];
$msg_email = $_POST["Email"];
$msg_message = $_POST["Message"];

// use wordwrap() if lines are longer than 70 characters
$msg_message = wordwrap($msg_message,70);

// send email
mail("vganjali@ucsc.edu","~vganjali webpage: [from: " . $msg_name . ", email: " . $msg_email . "]",$msg_message);
echo "Message sent successfully!";
?>