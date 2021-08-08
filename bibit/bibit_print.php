<?php
require('../fpdf/fpdf.php');

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();

include '../kopsurat.php';
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN KETERSEDIAAN STOK BIBIT', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 6, 'No.', 1, 0);
$pdf->Cell(40, 6, 'NAMA JENIS', 1, 0);
$pdf->Cell(40, 6, 'STOK AWAL', 1, 0);
$pdf->Cell(40, 6, 'PENAMBAHAN', 1, 0);
$pdf->Cell(40, 6, 'PENGURANGAN', 1, 0);
$pdf->Cell(40, 6, 'DISTRIBUSI', 1, 0);
$pdf->Cell(0, 6, 'STOK TERSEDIA', 1, 1);
$pdf->SetFont('Arial', '', 10);

include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM stok_bibit");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(40, 6, $data['Nama_Jenis'], 1, 0);
    $pdf->Cell(40, 6, $data['Stok_Awal'], 1, 0);
    $pdf->Cell(40, 6, $data['Penambahan'], 1, 0);
    $pdf->Cell(40, 6, $data['Pengurangan'], 1, 0);
    $pdf->Cell(40, 6, $data['Distribusi'], 1, 0);
    $pdf->Cell(0, 6, $data['Stok_Tersedia'], 1, 1);
}
$pdf->Output();
