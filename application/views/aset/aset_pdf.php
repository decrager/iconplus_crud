<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Tahun</th>
			<th>Aset</th>
		</tr>
		<?php 
			$no	= 1;
			foreach ($aset as $row) :
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row->tahun ?></td>
			<td><?php echo $row->aset ?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
