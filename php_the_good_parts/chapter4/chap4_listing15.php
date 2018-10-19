<?php
$string = "The <strong>quick</strong> brown fox <a href='jumping.php'>jumps</a> over the lazy dog" ;
echo htmlentities($string) . "<br/>" ;
echo html_entity_decode($string) ;
?>

The &lt;strong&gt;quick&lt;/strong&gt; brown fox &lt;a href='jumping.php'&gt;jumps&lt;/a&gt; over the lazy dog<br/>
The <strong>quick</strong> brown fox <a href='jumping.php'>jumps</a> over the lazy dog