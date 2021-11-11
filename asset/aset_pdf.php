<?php
require base_url('application/libraries/mysqli_table.php');

class PDF extends PDF_MySQL_Table
{

function Header() //bkin tabel
{
    // Title
    $this->SetFont('Times','B',18);
    $this->Cell(0,6,'JUMLAH ASET TAHUNAN ',0,1,'C');
    $this->Cell(0,10,'PT ICON+ ',0,1,'C');
    $this->Ln(10);
    // Ensure table header is printed
    parent::Header();
}
}
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "iconplus_crud";
 
$link = mysqli_connect($host, $user, $pass, $dbnm);

$pdf = new PDF();
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('tahun','90','Tahun','C');
$pdf->AddCol('aset','91','Jumlah Aset','C');
$prop = array('HeaderColor'=>array(220,220,220),'padding' => 2);
$pdf->Table($link,'SELECT * FROM aset',$prop);


$pdf->Output();
?>