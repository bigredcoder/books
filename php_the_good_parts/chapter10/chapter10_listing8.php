<?php
$timeZone = ini_get('date.timezone') ;
$dtz = new DateTimeZone($timeZone) ;
//$dt = new DateTime("2010-02-12 16:42:33", $dtz);
$dt = new DateTime("now", $dtz);

echo "<br/><br/>date: " . $dt->format("Y-m-d h:i:s");

echo "<br/><br/>date time stamp: " . $dt->getTimestamp();
?>
