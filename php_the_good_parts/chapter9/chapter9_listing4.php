<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors',1) ;

// actually need a db connection established before this will work.
$conn = mysql_connect("localhost","dbuser","password");
$db = "dbname";
mysql_select_db($db, $conn) or die( "Could not open $db");

$trusted['lname'] = mysql_real_escape_string("O'Mally") ;
$sql = "UPDATE team SET name = '$trusted[lname]' WHERE teamid = 15" ;
//echo "<br/> $sql <br/><br/>" ;

mysql_query($sql);
?>
