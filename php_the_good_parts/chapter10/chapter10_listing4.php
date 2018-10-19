<?php
$person_info = function($name, $age, $eyecolor)
{
    echo "greetings: " . $name . "<br/>";
    echo "You are : " . $age . " years old<br/>";
    echo "and your eye color is: " . $eyecolor . "<br/><br/>";	
};

$person_info('Peter', '43', 'brown');
$person_info('Dawn', '15', 'green');

?>
