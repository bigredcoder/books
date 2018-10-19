<?php
$grades = array(87,88,98,74,56,94,67) ;

$addedGrades = array_sum($grades);
echo "The sum of the provided grades is: $addedGrades <br/>";
$avgGrades = array_sum($grades) / count($grades) ;
echo "and the average of these grades is: " . round($avgGrades,2) ;
?>