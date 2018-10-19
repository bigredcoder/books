<?php

$string = "'Fred' & 'Barney' <a href='http://www.abadsite.com'>click here, you know you want to</a>" ;
// note the single quotes.

echo htmlspecialchars($string);
echo "<br/>" ;
echo htmlspecialchars($string, ENT_QUOTES);

// actually need a db connection established before this will work.

$conn = mysql_connect("localhost","root","sim0np");
$db = "rural";
mysql_select_db($db, $conn) or die( "Could not open $db");

$sql = mysql_real_escape_string("UPDATE team SET name = 'o'mally' WHERE teamid = 15") ;
echo "<br/> $sql" ;
?>


