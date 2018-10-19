<?php
$string = "The quick brown fox jumps over the lazy dog" ;
echo str_shuffle($string) . "<br/>" ;
echo md5($string) . "<br/>" ;
echo md5(str_shuffle($string)) ;
?>