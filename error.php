<?php
//Error message for newsletter

$emailErr = "";
$email = ""; 

if (empty($_POST["email"])) {
	$emailErr = " Please enter email address";
	}
else {
	$email = test_input ($_POST["email"]);
	}
	
$email = test_input ($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

$emailErr = "Invalid email format";

}
?>