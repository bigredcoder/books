<?php

error_reporting(E_ALL);
ini_set('display_errors',1) ;

$trusted = array() ;

if (strlen($_POST['firstname']) <= 35) $trusted['firstname'] = $_POST['firstname'] ;

if (strlen($_POST['lastname']) <= 45) $trusted['lastname'] = $_POST['lastname'] ;

if (strlen($_POST['phone']) <= 10 && is_numeric($_POST['phone']) ){
	$trusted['phone'] = $_POST['phone'] ;
}

var_dump($trusted) ;

?>