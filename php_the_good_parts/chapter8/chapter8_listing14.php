<?php

require_once "../../jpgraph/jpgraph_antispam.php";

$spam = new AntiSpam();
// saved to $chars for later verification of correct entry
$chars = $spam->Rand(8);
$spam->Stroke() ;

?>

