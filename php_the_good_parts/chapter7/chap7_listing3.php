<?php

$database = new SQLiteDatabase('c:/copy/website.sqlite');

$sql = 'CREATE TABLE guests (
guestid INTEGER PRIMARY KEY ,
fname TEXT ,
lname TEXT ,
comments TEXT )';
         
$database->queryExec($sql);
// ============================================
$sql =
  'INSERT INTO guests (fname, lname, comments) ' .
  'VALUES ("Peter", "MacIntyre", "Nice work pilgrim!"); ' .
         
  'INSERT INTO guests (fname, lname, comments) ' .
  'VALUES ("Dawn", "Riley", "Great site, love what you have done with the place!"); ' .
         
  'INSERT INTO guests (fname, lname, comments) ' .
  'VALUES ("Peter", "MacIntyre", "Me again... just saying hello."); ' ;

$database->queryExec($sql) ;

// ============================================
$sql = "SELECT * FROM guests ORDER BY lname, fname";

$result = $database->query($sql);

while ($row = $result->fetch()){
    echo $row['fname'] . " " . $row['lname'] ;
    echo " made these comments: " . substr($row['comments'],0,150) ;
    echo "<br/>";
}  

?>