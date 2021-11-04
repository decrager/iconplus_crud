<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="text/javascript" src="<?php echo base_url('asset/vendor/pustaka_FSC/js/fusioncharts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/vendor/pustaka_FSC/js/themes/fusioncharts.theme.fint.js') ?>"></script>
    <script type="text/javascript">
      function openFileAsset()
      {
        window.open('jumlah_aset.xlsx', '_o')
      }
      function alertAset()
      {
        var result = alert('Data excel berhasil dibuat!')
      }

      FusionCharts.ready( function(){
      var G1 = new FusionCharts({
        "type": "spline",
      "renderAt": "aset",
      "width":"97%",
      "height":"100%",
      "dataFormat":"jsonurl",
      "dataSource":"<?= base_url('asset/aset_chart.php') ?>"
      }
      );
      G1.render();

      var G2 = new FusionCharts({
        "type": "pie3d",
      "renderAt": "layanan",
      "width":"97%",
      "height":"100%",
      "dataFormat":"jsonurl",
      "dataSource":"<?= base_url('asset/layanan_chart.php') ?>"
      }
      );
      G2.render();

      var G3 = new FusionCharts({
        "type": "mscolumn2d",
      "renderAt": "keuangan",
      "width":"97%",
      "height":"100%",
      "dataFormat":"jsonurl",
      "dataSource":"<?= base_url('asset/keuangan_chart.php') ?>"
      }
      );
      G3.render();
    }
    );
    </script>
    
    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>
<body>
  <script>
    $("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
    });
  </script>