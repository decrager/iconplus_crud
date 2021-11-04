<?php
    $server = "localhost";
    $user   = "root";
    $ps     = "";
    $nama_db = "iconplus_crud";

    $kon = mysqli_connect($server,$user,$ps,$nama_db);

    $hsl = mysqli_query($kon, "SELECT * FROM aset");

    $d = array();
    while($r = mysqli_fetch_assoc($hsl)){
        array_push($d, array("label"=>$r['tahun'],"value"=>$r['aset']));
    }

    $c = array("xAxisName"=>"Tahun",
            "yAxisName"=>"Aset",
            "theme"=>"fint"); 
    
    $gabung = array("chart"=>$c, "data"=>$d);
    //print_r($gabung);
    $j = json_encode($gabung);
    echo $j;
?>