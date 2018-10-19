<?php
$mydb = new mysqli('localhost', 'petermac', '1q2w3e4r', 'website');

$sql = "SELECT * FROM Guests ORDER BY lname, fname";

$result = $mydb->query($sql);

while( $row = $result->fetch_assoc() ){
    echo $row['fname'] . " " . $row['lname'] ;
    echo " made these comments: " . substr($row['comments'],0,150) ;
    echo "<br/>";
}

$result->close();

$mydb->close ();
?>