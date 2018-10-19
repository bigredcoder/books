<?php

$myArray = array('first' => 1, 'second' => 2, 'fname' => "Peter", 'initial' => "B", 
'lname' => "MacIntyre", 'phone' => "555-5678") ;

var_dump($myArray) ;
echo "<br/>" ;
array_splice($myArray, 5);
var_dump($myArray) ;
?>