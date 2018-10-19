<?php

$string = "The quick brown fox jumps over the lazy dog" ;
echo preg_match('/fox/', $string) ; // returns 1

echo preg_match('/^fox/', $string) ; // returns false
echo preg_match('/^The/', $string) ; // returns true
echo preg_match('/dog$/', $string) ; // returns true
echo preg_match('/f.x/', $string) ; // returns true

$phone_num = "903-543-5454";
$pattern = "/^[2-9]{1}[0-9]{2}-[0-9]{3}-[0-9]{4}$/" ;

echo "<br/>";

echo preg_match($pattern, $phone_num) ; // returns true

echo "<br/>";

echo preg_replace('/fox/', 'cheetah', $string) ;
echo "<br/>";
echo preg_replace('/4/', '7', $phone_num) ;
echo "<br/>";
$look_for = array("/4/", "/-/");
$replace_with = array('7', '*');
echo preg_replace($look_for, $replace_with, $phone_num) ;

echo "<br/>";

$pattern = "#[+*/-]#" ;
$formula = "36+15/5*12" ;
$operands = preg_split($pattern, $formula) ;
var_dump($operands) ;




?>