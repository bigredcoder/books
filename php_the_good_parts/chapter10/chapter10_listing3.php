<?php
namespace {
	function sayHello($name) {
		echo "greetings from the global scope: " . $name ; 
	}

include "chap9_listing2.php" ;

Sample1\sayHello("Frank");
echo "<br/>" ;
Sample2\sayHello("Peter");

echo "<br/>" ;
use Sample1 as S1;
S1\sayHello("Frank");
echo "<br/>" ;
Sample2\sayHello("Peter");

echo "<br/>" ;
sayHello("Charlie") ;
}
?>