<?php
$mydb = new mysqli('localhost', 'petermac', '1q2w3e4r', 'website');

 
$sql = "INSERT INTO guests (fname, lname, comments) 
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[comments]')"; 

if ($mydb->query($sql)  == TRUE) {
    echo "Guest entry saved successfully.";
} else {
    echo "INSERT attempt failed, please try again later, or call tech support" ;
}

$mydb->close();

?>