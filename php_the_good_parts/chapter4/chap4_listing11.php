<?php
$string = "The quick brown fox jumps over the lazy dog" ;
$position = strpos($string, "fox");
echo "position of 'fox' $position <br/>" ;
$result = substr($string, strpos($string, "fox"), 8);
echo "8 characters after finding the position of 'fox':  $result <br/>" ;
$new_string = str_replace("the", "black", $string);
echo $string;
?>