<?php
    $server = "localhost";
    $user   = "root";
    $ps     = "";
    $nama_db = "iconplus_crud";

    $kon = mysqli_connect($server,$user,$ps,$nama_db);

    $hsl = mysqli_query($kon, "SELECT * FROM layanan");

    $d = array();
    while($r = mysqli_fetch_assoc($hsl)){
        array_push($d, array("label"=>$r['jenis'],"value"=>$r['jumlah']));
    }

    $c = array("showvalues"=>"1",
            "showpercentintooltip"=>"0",
            "numbersuffix"=>" Pelanggan",
            "enablemultislicing"=>"1",
            "theme"=>"fint");
    
    $gabung = array("chart"=>$c, "data"=>$d);
    //print_r($gabung);
    $j = json_encode($gabung);
    echo $j;
?>