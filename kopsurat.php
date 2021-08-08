<?php

$pdf->SetFont('arial', 'B', 10);
$pdf->Cell(0, 5, 'KEMENTRIAN LINGKUNGAN HIDUP DAN KEHUTANAN', '0', '1', 'C');
$pdf->Cell(0, 5, 'DIREKTORAT JENDRAL PENGENDALIAN DAS DAN HUTAN LINDUNG', '0', '1', 'C');
$pdf->Cell(0, 5, 'BALAI PENGELOLAAN DAERAH ALIRAN SUNGAI DAN HUTAN LINDUNG BARITO', '0', '1', 'C');

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'PERSEMAIAN PERMANEN BANJARBARU', '0', '1', 'C');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 5, 'Jl.Sungai Salak, Landasan ulin Timur, Kecamatan Landasan Ulin (70721) Kota Banjarbaru', '0', '1', 'C');

$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 5, 'Email : ppbanjarbar@yahoo.com', '0', '1', 'C', false);

$pdf->Cell(0, 0, '', '0', '0', 'C', true);
$pdf->Ln(5);
