<?php

require("../../fpdf/fpdf.php");

class myPDF extends FPDF {

	public $title = "FPDF Sample Page Header";
	
	//Page header method
	function Header() {		
	
		$this->SetFont('Times','',12);
		$w = $this->GetStringWidth($this->title)+150;
		$this->SetTextColor(0,0,255);
		$this->SetLineWidth(1);
		
		$php_url = "http://www.php.net" ;
		$this->Image('phplogo.jpg',10,10.5,15,8.5,"",$php_url);
		
		$this->Cell($w,9,$this->title,1,1,'C');
		$this->Ln(10);
	
	}
	
	//Page footer method
	function Footer() 	{
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'page footer -> Page '
		.$this->PageNo().'/{nb}',0,0,'C');
	}

}

$pdf = new myPDF('P', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',24);
$pdf->Cell(0,0,'text at the top of the page',0,0,'L');
$pdf->ln(225);
$pdf->Cell(0,0,'text near page bottom',0,0,'C');
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(0,0,'Top of page 2 after page header',0,1,'C');
$pdf->Output();


?>