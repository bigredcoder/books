<?php
require("../../fpdf/fpdf.php");

$pdf = new FPDF( );
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'PHP - The Good Parts!', 1,0,'R');
$pdf->Output();
?>