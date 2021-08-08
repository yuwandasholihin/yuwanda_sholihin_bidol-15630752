<?php
require('../fpdf/fpdf.php');

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();

include '../kopsurat.php';

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 0, 'Tahun :' . date(" Y"), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'LAPORAN DATA DISTRIBUSI TAHUNAN', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(20, 6, 'TANGGAL', 1, 0,  'C');
$pdf->Cell(50, 6, 'INSTANSI', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(70, 6, 'ALAMAT', 1, 0, 'C');
$pdf->Cell(35, 6, 'KABUPATEN', 1, 0, 'C');
$pdf->Cell(0, 6, 'KECAMATAN', 1, 1, 'C');

$pdf->SetFont('Arial', '', 8);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM data_distribusi");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(20, 6, $data['tanggal'], 1, 0, 'C');
    $pdf->Cell(50, 6,  $data['instansi'], 1, 0, 'C');
    $pdf->Cell(50, 6, $data['nama'], 1, 0, 'C');
    $pdf->Cell(70, 6, $data['alamat'], 1, 0, 'C');
    $pdf->Cell(35, 6, $data['kabupaten'], 1, 0, 'C');
    $pdf->Cell(0, 6, $data['kecamatan'], 1, 1, 'C');
}

$pdf->SetLeftMargin(20);
$pdf->AddPage();

include '../kopsurat.php';

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 0, 'Tahun :' . date(" Y"), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'LAPORAN DATA DISTRIBUSI TAHUNAN', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(35, 6, 'KELURAHAN', 1, 0, 'C');
$pdf->Cell(25, 6, 'NOMOR TELPON', 1, 0, 'C');
$pdf->Cell(45, 6, 'EMAIL', 1, 0, 'C');
$pdf->Cell(20, 6, 'ID KARYAWAN', 1, 0, 'C');
$pdf->Cell(16, 6, 'ALPUKAT', 1, 0, 'C');
$pdf->Cell(19, 6, 'CEMPEDAK', 1, 0, 'C');
$pdf->Cell(14, 6, 'DURIAN', 1, 0, 'C');
$pdf->Cell(16, 6, 'JENGKOL', 1, 0, 'C');
$pdf->Cell(16, 6, 'LANGSAT', 1, 0, 'C');
$pdf->Cell(13, 6, 'MATOA', 1, 0, 'C');
$pdf->Cell(13, 6, 'PETAI', 1, 0, 'C');
$pdf->Cell(18, 6, 'RAMBUTAN', 1, 0, 'C');
$pdf->Cell(12, 6, 'SIRSAK', 1, 1, 'C');

$pdf->SetFont('Arial', '', 8);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM data_distribusi");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(35, 6, $data['kelurahan'], 1, 0, 'C');
    $pdf->Cell(25, 6, $data['telepon'], 1, 0, 'C');
    $pdf->Cell(45, 6, $data['email'], 1, 0, 'C');
    $pdf->Cell(20, 6, $data['Id_karyawan'], 1, 0, 'C');
    $pdf->Cell(16, 6, $data['alpukat'], 1, 0, 'C');
    $pdf->Cell(19, 6, $data['cempedak'], 1, 0, 'C');
    $pdf->Cell(14, 6, $data['durian'], 1, 0, 'C');
    $pdf->Cell(16, 6, $data['jengkol'], 1, 0, 'C');
    $pdf->Cell(16, 6, $data['langsat'], 1, 0, 'C');
    $pdf->Cell(13, 6, $data['matoa'], 1, 0, 'C');
    $pdf->Cell(13, 6, $data['petai'], 1, 0, 'C');
    $pdf->Cell(18, 6, $data['rambutan'], 1, 0, 'C');
    $pdf->Cell(12, 6, $data['sirsak'], 1, 1, 'C');
}

$pdf->SetLeftMargin(20);
$pdf->AddPage();

include '../kopsurat.php';

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 0, 'Tahun :' . date(" Y"), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'LAPORAN DATA DISTRIBUSI TAHUNAN', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(16, 6, 'Angsana', 1, 0, 'C');
$pdf->Cell(12, 6, 'KEMIRI', 1, 0, 'C');
$pdf->Cell(13, 6, 'MAHONI', 1, 0, 'C');
$pdf->Cell(15, 6, 'RAMANIA', 1, 0, 'C');
$pdf->Cell(17, 6, 'KETAPANG', 1, 0, 'C');
$pdf->Cell(14, 6, 'SENGON', 1, 0, 'C');
$pdf->Cell(40, 6, 'TOTAL PERMOHONAN BIBIT', 1, 1, 'C');

$pdf->SetFont('Arial', '', 8);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM data_distribusi");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(16, 6, $data['angsana'], 1, 0, 'C');
    $pdf->Cell(12, 6, $data['kemiri'], 1, 0, 'C');
    $pdf->Cell(13, 6, $data['mahoni'], 1, 0, 'C');
    $pdf->Cell(15, 6, $data['ramania'], 1, 0, 'C');
    $pdf->Cell(17, 6, $data['ketapang'], 1, 0, 'C');
    $pdf->Cell(14, 6, $data['sengon'], 1, 0, 'C');
    $pdf->Cell(40, 6, ($data['alpukat'] + $data['cempedak'] + $data['durian'] + $data['jengkol'] +
        $data['langsat'] + $data['matoa'] + $data['petai'] + $data['rambutan'] +
        $data['sirsak'] + $data['angsana'] + $data['kemiri'] + $data['mahoni'] +
        $data['ramania'] + $data['ketapang'] + $data['sengon']), 1, 1, 'C');
}
$pdf->Output();
