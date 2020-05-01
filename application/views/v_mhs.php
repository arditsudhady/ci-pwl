
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>JENIS KELAMIN</th>
		</tr>

		<?php foreach ($mahasiswa as $mhs):  ?>
			<tr>
				<td><?php echo $mhs['nim']; ?></td>
				<td><?php echo $mhs['nama']; ?></td>
				<td><?php echo $mhs['alamat']; ?></td>
				<td><?php echo $mhs['jenis_kelamin']; ?></td>
			</tr>
		<?php endforeach ?>



	</table>
</body>
</html>