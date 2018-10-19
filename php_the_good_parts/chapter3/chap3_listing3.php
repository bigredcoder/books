<?php
function displayit (&$text) {
	$text .= ", you know you want to";
}
$message = "say hello to the web world";
displayit($message) ;
echo $message ;
?>