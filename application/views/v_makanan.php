<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h1>DAFTAR MENU</h1>
	<table>
		<thead>
			<td>Kode Makanan</td>
			<td>Nama Makanan</td>
			<td>Harga Makanan</td>
		</thead>
		<tbody>
			<?php
			foreach($data->result_array() AS $a):
				$kode=$a['kode_makanan'];
				$nama=$a['nama_makanan'];
				$harga=$a['harga_makanan'];?>
				<tr>
					<td><?php echo $kode ?></td>
					<td><?php echo $nama ?></td>
					<td><?php echo $harga ?></td>
					<td><input type="checkbox" name="checkbox"></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table><br>
	<input type="submit" value="submit">
</center>
</body>
</html>