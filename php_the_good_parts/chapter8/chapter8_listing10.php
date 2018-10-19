<?php
require("../../fpdf/fpdf.php");

$pdf = new FPDF( );
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(26,100);
$pdf->image('php_watermark.jpg');
$pdf->SetY(35);
$text = "This is sample text to show the watermark underneath it.";
for($i = 0; $i < 35; $i++) { $pdf->Cell(0,5,$text,0,1); }
$pdf->Output();
?>