<?php
$string = "The <strong>quick</strong> brown fox <a href='jumping.php'>jumps</a> over the lazy dog" ;
echo $string . "<br/>" ;
echo strip_tags($string) . "<br/>" ;
echo strip_tags($string, '<strong>') ;
?>