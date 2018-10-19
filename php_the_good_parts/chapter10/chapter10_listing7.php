<?php
starting_point:
$letter = "A" ;
if ($letter == "A") {
	goto landing_area_a;
} else {
	goto landing_area_b;	
}

landing_area_a:
echo 'The Eagle has landed<br/>';
goto lands_end;

landing_area_b:
echo 'The Hawk has landed<br/>';

lands_end:
//goto starting_point;

//landing15:
//goto landing15;
?>
