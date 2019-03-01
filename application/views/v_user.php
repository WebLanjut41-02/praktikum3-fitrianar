<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<table>
		<?php
		$no = 1;
		foreach($user as $data){
			echo'
			<tr>
				<td>ID Pelanggan</td>
				<td>'.$data->id_pelanggan.' ?></td>
			</tr>
			<tr>
				<td>Nama Pelanggan</td>
				<td>'.$data->nama_pelanggan.' ?></td>
			</tr>';}
		?>
	</table>
</center>
</body>
</html>