<?php

$test1grades = array(1 => 87, 2 => 88,98,74,56,94,67,98,49) ;
$test2grades = array(1 => 67, 2 => 76,78,98,56,93,68,95,83) ;

$allgrades = array_merge($test1grades, $test2grades);
var_dump($allgrades);
echo "<br/><br/>";

$Genesis1 = array("Keyboards" => "Tony Banks", "Drums" => "Phil Collins",
"BassGuitar" =>"Mike Rutherford","LeadGuitar" => "Steve Hackett","Vocals" =>"Peter Gabriel" ) ;

$Genesis2 = array("Keyboards" => "Tony Banks", "Concert Drums" => "Chester Thompson",
"BassGuitar" =>"Mike Rutherford","LeadGuitar" => "Mike Rutherford", "ConcertLeadGuitar" => "Daryl Sturmer", "Vocals" =>"Phil Collins" ) ;

$allGenesis = array_merge($Genesis1, $Genesis2);
var_dump($allGenesis);
?>