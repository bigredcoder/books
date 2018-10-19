  
<?php
//comments
namespace Sample1 ;

	function sayHello($name) {
		echo "Hello there: " . $name ;
	}
error_reporting(E_ALL);
ini_set('display_errors',1) ;
echo "This is a test <br/>" ;

sayHello("Johnny") ;

?>