<?php
$ClassicGenesis = array("Tony Banks", "Phil Collins","Mike Rutherford", "Steve Hackett","Peter Gabriel" ) ;

sort ($ClassicGenesis) ;
echo "<strong>Sorted on Values with re-generated Keys:</strong> <br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}
$ClassicGenesis = array("Tony Banks", "Phil Collins","Mike Rutherford", "Steve Hackett","Peter Gabriel" ) ;
rsort ($ClassicGenesis) ;
echo "<strong>Now sorted in reverse order on Values with re-generated Keys: </strong><br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}
$ClassicGenesis = array("Tony Banks", "Phil Collins","Mike Rutherford", "Steve Hackett","Peter Gabriel" ) ;
asort ($ClassicGenesis) ;
echo "<strong>Now sorted in order of Values with Keys intact:</strong><br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}
$ClassicGenesis = array("Tony Banks", "Phil Collins","Mike Rutherford", "Steve Hackett","Peter Gabriel" ) ;
arsort ($ClassicGenesis) ;
echo "<strong>Now sorted in reverse order of Values with Keys intact: </strong><br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}

$ClassicGenesis = array("Keyboards" => "Tony Banks", "Drums" => "Phil Collins","Bass Guitar" =>"Mike Rutherford","Lead Guitar" => "Steve Hackett","Vocals" =>"Peter Gabriel" ) ;
ksort ($ClassicGenesis) ;
echo "<strong>Now sorted in order based on Keys: </strong><br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}

$ClassicGenesis = array("Keyboards" => "Tony Banks", "Drums" => "Phil Collins","Bass Guitar" =>"Mike Rutherford","Lead Guitar" => "Steve Hackett","Vocals" =>"Peter Gabriel" ) ;
krsort ($ClassicGenesis) ;
echo "<strong>Now sorted in reverse order based on Keys: </strong><br/>";
foreach ($ClassicGenesis as $key => $value) {
	echo "the Key is: " . $key . " and its value is: " . $value . "<br/>";
}

?>