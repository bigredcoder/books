<?php
$person_info = function($value, $key)
{
    echo $key . ": " . $value . "<br/>";
};

$person_array = array('name' => 'Dawn', 'age' => '15', 'eyecolor' => 'green');

array_walk($person_array, $person_info);
?>
