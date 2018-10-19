<?php

$myArray = array('first' => 1, 'second' => 2, 'fname' => "Peter", 'initial' => "B", 
'lname' => "MacIntyre", 'phone' => "555-5678") ;

$name_array = array_splice($myArray, 2, 3);
var_dump($myArray) ;
echo "<br/>" ;
var_dump($name_array) ;
?>