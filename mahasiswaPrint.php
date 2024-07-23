<?php
//pnaggil plugin fpdf
include ('fpdf186/fpdf.php');
include ('koneksi.php');

//membuat objek dari kelas FPFD
$pdf = new FPDF('P', 'cm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(18, 0.7, 'UNVIERSITAS ISLAM KALIMANTAN', 0, 1, 'C');
$pdf->Cell(18, 0.7, 'MUHAMMAD ARSYAD AL BANJARI KALIMANTAN SELATAN', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(18, 0.7, 'Jl. Salak No.01 Kel. Kemuning Kec. Banjarbaru Selatan', 0, 1, 'C');
$pdf->Line(1, 3, 20, 3);
$pdf->Image('logo.png', 1, 0.5, 1.5, 1.5);
$pdf->Image('logo2.png', 18, 0.5, 2, 2);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(18, 0.7, 'Laporan Data Mahasiswa', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(18, 0.5, 'Dicetak pada tanggal: ' . date('d-m-Y'), 0, 1, 'C');
$pdf->Ln(); //untuk enter
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(1, 0.7, 'No', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'NPM', 1, 0, 'C');
$pdf->Cell(5, 0.7, 'Nama Lengkap', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'Prodi', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'TTL', 1, 0, 'C');
$pdf->Cell(4, 0.7, 'Alamat', 1, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$no = 1;
$exe = $konek->query("SELECT * FROM mhs");
while ($data = $exe->fetch_array()):
    $pdf->Cell(1, 0.7, $no++, 1, 0, 'C');
    $pdf->Cell(3, 0.7, $data[1], 1, 0, 'C');
    $pdf->Cell(5, 0.7, $data[2], 1, 0, 'C');
    $pdf->Cell(3, 0.7, $data[3], 1, 0, 'C');
    $pdf->Cell(3, 0.7, date('d-m-Y', strtotime($data[4])), 1, 0, 'C');
    $pdf->Cell(4, 0.7, $data[5], 1, 1, 'C');
endwhile;
$pdf->Ln(2);
$pdf->Cell(17.3, 0.7, "Mengetahui", 0, 1, 'R');
$pdf->Cell(17.6, 0.7, "Wakil Rektor III", 0, 1, 'R');
$pdf->Ln(1);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(17.6, 0.7, "H. Idzani Muttaqin", 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(17.6, 0.7, "NIK 17 0701 1000", 0, 1, 'R');

$pdf->Output('', 'dataMahasiswa');