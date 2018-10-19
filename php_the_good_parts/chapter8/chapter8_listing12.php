<?php 

include ("../../jpgraph/jpgraph.php");
include ("../../jpgraph/jpgraph_pie.php");

$data = array(12, 15, 23, 18, 5);

// Create the Pie Graph.
$piechart = new PieGraph(500,500);

// Set A title for the plot
$piechart->title->Set("Sample Pie Chart");
$piechart->title->SetFont(FF_VERDANA,FS_BOLD,12); 
$piechart->title->SetColor("darkblue");
$piechart->legend->Pos(0.1,0.2);

// Create pie plot
$pPlot = new PiePlot($data);
$pPlot->SetCenter(0.5,0.55);
$pPlot->SetSize(0.3);

// Setup the labels
$pPlot->SetLabelType(PIE_VALUE_PER);	
$pPlot->value->Show();			
$pPlot->value->SetFont(FF_ARIAL,FS_NORMAL,9);	
$pPlot->value->SetFormat('%2.1f%%');		

// Add and stroke
$piechart->Add($pPlot);
$piechart->Stroke();
?>