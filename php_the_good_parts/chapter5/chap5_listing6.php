<?php

$myArray = array('first' => 1, 'second' => 2, 'fname' => "Peter", 'initial' => "B", 
'lname' => "MacIntyre", 'phone' => "555-5678") ;

foreach ($myArray as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}
?>