<?php
require('../fpdf/fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();

include '../kopsurat.php';

$pdf->SetFont('Arial', 'B' . 'U', 10);
$pdf->Cell(0, 1, 'BERITA ACARA SERAH TERIMA BIBIT', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 10, 'Nomor:' . date("dmy") . '/BPDASHL.Brt-4/PP-BJB/' . date("Y"), 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 1, 'Pada hari ini ' . date("D") . ' Tanggal ' . date(" d/M/Y ") . ',kami yang bertanda tangan dibawah ini :', 0, 1, 'L');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->Cell(10, 6, 'No.', 1, 0);
$pdf->Cell(20, 6, 'NIM', 1, 0);
$pdf->Cell(50, 6, 'Nama Lengkap', 1, 0);
$pdf->Cell(20, 6, 'NIM', 1, 1);
$pdf->SetFont('Arial', '', 10);



include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM data_distribusi");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(20, 6, $data['id'], 1, 0);
    $pdf->Cell(50, 6, $data['nim'], 1, 0);
    $pdf->Cell(100, 6, $data['Instansi'], 1, 0);
}
$pdf->Output();
