<?php
$Drums = "John Mayhew" ;
$LeadGuitar = "Anthony Phillips" ;

$Genesis = array("Keyboards" => "Tony Banks", "Drums" => "Phil Collins",
"BassGuitar" =>"Mike Rutherford","LeadGuitar" => "Steve Hackett","Vocals" =>"Peter Gabriel" ) ;

extract ($Genesis, EXTR_SKIP);
echo "Original Genesis Lineup: $Keyboards, $Drums, $BassGuitar, $LeadGuitar, $Vocals" ;

extract ($Genesis);
echo "<br/>Classic Genesis Lineup: $Keyboards, $Drums, $BassGuitar, $LeadGuitar, $Vocals" ;

$newGenesis = compact(Keyboards, Drums, BassGuitar, LeadGuitar, Vocals) ;
echo "<br/>";
var_dump($newGenesis);
?>