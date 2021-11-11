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
			<th>Jenis</th>
			<th>Jumlah</th>
		</tr>
		<?php 
			$no	= 1;
			foreach ($layanan as $row) :
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row->jenis ?></td>
			<td><?php echo $row->jumlah ?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
