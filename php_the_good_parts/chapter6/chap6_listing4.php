<?php

//error_reporting(E_ALL);
//ini_set('display_errors',1) ;

// require classes for the page
require_once ('classes/html_class.inc');
require_once ('classes/table_class.inc');
require_once ('classes/form_class.inc');

// instantiate classes (prepare them for use
$HTMLPage 	= new html("GuestBook Page") ;
$MyTable 	= new table() ;
$MyForm 	= new form() ;

// start a table with a border, left alignment, and 30% width
$webpage  = $MyTable->Begin(1, "left", "500") ;
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Begin("save_entry.php") ; // "proof" of polymorphism
$webpage .= $MyForm->InputLabel("FirstName","fname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(1,"left");
$webpage .= $MyForm->Input("text", "fname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();

$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("LastName","lname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Input("text", "lname", "", "", 40);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();

$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Comments","comments", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Textarea("comments", 40, 15);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();

$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn(2, "center");
$webpage .= $MyForm->Input("submit", "submit", "Save Entry");
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();

$webpage .= $MyForm->form_end();
$webpage .= $MyTable->End();

$webpage .= $HTMLPage->page_end() ;

echo $webpage ;
