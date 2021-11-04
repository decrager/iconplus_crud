<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function layanan()
{
    $spreadsheet = new Spreadsheet(); 
    $sheet = $spreadsheet->getActiveSheet();
    
    $column_header=["ID Layanan","Jenis Layanan", "Jumlah Pelanggan"];
    $j=1;
    foreach($column_header as $x_value) {
        $sheet->setCellValueByColumnAndRow($j,1,$x_value);
        $j=$j+1;
        }
    
    //Ambil data
    $kon = mysqli_connect("localhost", "root", "", "iconplus_crud");
    
    $sql = "SELECT * FROM `layanan`";
    $data = mysqli_query($kon,$sql);
    
    $i = 2;
    while($rcrd = mysqli_fetch_row($data)) {
        print_r($rcrd);
        echo "<br>";
        $sheet->setCellValueByColumnAndRow(1,$i,$rcrd[0]);
        $sheet->setCellValueByColumnAndRow(2,$i,$rcrd[1]);
        $sheet->setCellValueByColumnAndRow(3,$i,$rcrd[2]);
        $i++;
    }

    // Write an .xlsx file
    $writer = new Xlsx($spreadsheet);

    // Save .xlsx file to the files directory 
    $writer->save('exported/layanan.xlsx'); 

    header('location: index.php');
}
layanan();