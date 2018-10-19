<?php
$grades = array(87,88,98,74,56,94,67,98,49) ;

var_dump($grades);
echo "<br/>" ;
$uniqueGrades = array_unique($grades);
var_dump($uniqueGrades);
echo "<br/>" ;

if (in_array(49, $grades) ) {
	echo "there is a 49 in here and it is at element: " . array_search(49, $grades) ;
} else {
	echo "no 49s here" ;
}
echo "<br/>" ;
shuffle($grades) ;
var_dump($grades);
echo "<br/>" ;

$random = array_rand($grades);
echo "the random key from grades is: " . $random ;
?>