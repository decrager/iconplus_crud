<?php
    $server = "localhost";
    $user   = "root";
    $ps     = "";
    $nama_db = "iconplus_crud";

    $kon = mysqli_connect($server,$user,$ps,$nama_db);

    $hsl = mysqli_query($kon, "SELECT * FROM keuangan");
    $pendapatan = mysqli_query($kon, "SELECT pendapatan FROM keuangan");
    $pengeluaran = mysqli_query($kon, "SELECT pengeluaran FROM keuangan");
    $laba = mysqli_query($kon, "SELECT laba FROM keuangan");
    $tahun = mysqli_query($kon, "SELECT tahun FROM keuangan");

    $d = array();
    while($r = mysqli_fetch_assoc($pendapatan)){
        array_push($d, array("value"=>$r['pendapatan']));
    }

    $e = array();
    while($r = mysqli_fetch_assoc($pengeluaran)){
        array_push($e, array("value"=>$r['pengeluaran']));
    }

    $f = array();
    while($r = mysqli_fetch_assoc($laba)){
        array_push($f, array("value"=>$r['laba']));
    }

    $g = array();
    while($r = mysqli_fetch_assoc($tahun)){
        array_push($g, array("label"=>$r['tahun']));
    }

    $c = array("xAxisName"=>"Tahun",
            "yAxisName"=>"Jumlah Keuangan",
            "formatnumberscale"=>"1",
            "theme"=>"fint",
            "drawcrossline"=>"1");
    
    $gabung = array("chart"=>$c, "categories"=>[array("category"=>$g)], "dataset"=>[array("seriesname"=>"Jumlah Pendapatan", "data"=>$d),
    array("seriesname"=>"Jumlah Pengeluaran", "data"=>$e), array("seriesname"=>"Jumlah Laba", "data"=>$f)]);
    $j = json_encode($gabung);
    echo $j;
?>