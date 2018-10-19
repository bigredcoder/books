<?php
function AddThese($first = 5, $second = 10, $third = 15) {
	$answer = $first + $second + $third ;
	return $answer ;
}

$first = 5 ;
$second = 34 ;

$math = AddThese($first, $second) ;
echo "$first,  $second, and $third add up to: " . $math ;

?>