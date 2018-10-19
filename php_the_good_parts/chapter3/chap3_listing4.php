<?php
###############
# my_functions.php file
###############
function displayit (&$text) {
	$text .= ", you know you want to";
}


###############
# display_msg.php file
###############

include "my_functions.php";

$message = "say hello to the web world";
displayit($message) ;
echo $message ;

?>