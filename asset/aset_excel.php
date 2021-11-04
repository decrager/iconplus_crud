<?php


use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function jml_aset()
{
    $spreadsheet = new Spreadsheet(); 
    $sheet = $spreadsheet->getActiveSheet();

    $column_header=["Tahun","Aset"];
    $j=1;
    foreach($column_header as $x_value) {
        $sheet->setCellValueByColumnAndRow($j,1,$x_value);
        $j=$j+1;
    }

    //Ambil data
    $kon = mysqli_connect("localhost", "root", "", "iconplus_crud");

    $sql = "SELECT * FROM `aset`";
    $data = mysqli_query($kon,$sql);

    $i = 2;
    while($rcrd = mysqli_fetch_row($data)) {
        print_r($rcrd);
        echo "<br>";
        $sheet->setCellValueByColumnAndRow(1,$i,$rcrd[0]);
        $sheet->setCellValueByColumnAndRow(2,$i,$rcrd[1]);
        $i++;
    }

    // Write an .xlsx file  
    $writer = new Xlsx($spreadsheet);
    
    // Save .xlsx file to the files directory 
    $writer->save('exported/aset.xlsx');

    // fread($myfile,filesize("jumlah_aset.xlsx", 8));
    // fopen("jumlah_aset.xlsx", "r") or die("Unable to open file!");
    $filename = 'aset.xlsx';

    if (!file_exists($filename)) {
        die("The file $filename does not exist.");
    }

    $f = fopen($filename, 'r');
    if ($f) {
        // process the file
        // ...
        echo 'The file ' . $filename . ' is open';
        fclose($f);
    }

    header('location: index.php');
}
jml_aset();