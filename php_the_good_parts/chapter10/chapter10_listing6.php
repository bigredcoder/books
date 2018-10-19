<?php
$myname = "Peter MacIntyre" ;

$str = <<<"HEREDOC_Example"
Lorem ipsum dolor sit amet,  
nibh euismod tincidunt $myname . 
HEREDOC_Example;

echo $str ;

$str2 = <<<'NOWDOC_Example'
Lorem ipsum dolor sit amet, 
nibh euismod tincidunt $myname . 
NOWDOC_Example;

echo "<br/>" . $str2 ;
?>
