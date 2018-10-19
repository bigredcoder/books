<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set('display_errors',1) ;

$string = "smith" ;
var_dump( ucfirst ($string)) ;
echo "<br/>" ;
$string = "SMITH" ;
var_dump( lcfirst($string)) ;
?>