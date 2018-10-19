<?php 

include ("../../jpgraph/jpgraph.php");
include ("../../jpgraph/jpgraph_bar.php");
include ("../../jpgraph/jpgraph_line.php");

// We need some data
$datay=array(31,44,49,40,24,47,12);

// Setup the graph. 
$graph = new Graph(600,300,"auto");	
$graph->img->SetMargin(60,30,30,40);
$graph->SetScale("textlin");
$graph->SetMarginColor("teal");
$graph->SetShadow();

// Create the bar pot
$bplot = new BarPlot($datay);
$bplot->SetWidth(0.6);

// Setup color for gradient fill style 
$tcol=array(100,100,255);
$fcol=array(255,100,100);
$bplot->SetFillGradient($fcol,$tcol,GRAD_VERT);
$bplot->SetFillColor("orange");
$graph->Add($bplot);

// Set up the title for the graph
$graph->title->Set("Sample Bargraph");
$graph->title->SetColor("yellow");
$graph->title->SetFont(FF_VERDANA,FS_BOLD,12);

// Setup color for axis and labels
$graph->xaxis->SetColor("black","white");
$graph->yaxis->SetColor("black","white");

// Setup font for axis
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
$graph->yaxis->title->Set("Value Range");
$graph->yaxis->title->SetColor("white");
$graph->yaxis->title->SetFont(FF_VERDANA,FS_NORMAL,10);

// Setup X-axis title (color & font)
$graph->xaxis->title->Set("item Count");
$graph->xaxis->title->SetColor("white");
$graph->xaxis->title->SetFont(FF_VERDANA,FS_NORMAL,10);

// Finally send the graph to the browser
$graph->Stroke();
?>