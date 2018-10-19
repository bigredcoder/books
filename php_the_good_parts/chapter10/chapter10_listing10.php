<?php
error_reporting(E_ALL);
ini_set('display_errors',1) ;

//$timeZone = ini_get('date.timezone') ;
$dtz = new DateTimeZone("Europe/Rome") ;

echo "Server's Time Zone: " . $timeZone . "<br/>";

foreach ( $dtz->getLocation() As $key => $value ){
	echo $key . " " . $value . "<br/>";
}



?>
