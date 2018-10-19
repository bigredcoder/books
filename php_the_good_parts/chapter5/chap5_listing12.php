<?php

function add10($value ) {
	$value += 10 ;
	echo $value . "&nbsp;" ;
}

$testgrades = array(87,88,98,74,56,94,67,98,49) ;
var_dump($testgrades);
echo "<br/><br/>";
array_walk($testgrades, 'add10');
?>