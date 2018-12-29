<?php
require_once("fpdf/fpdf.php");
require_once("phpqrcode/qrlib.php");


$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();



$pdf->Image("images/qr.png", 40, 10, 20, 20, "png");















$pdf->Output();
?>