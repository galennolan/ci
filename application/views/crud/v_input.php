<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>CRUD Form</h1>
		<h3>Tambah data buku baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul buku</td>
				<td><input type="text" name="Judulbuku"></td>
			</tr>
			<tr>
				<td>Penulis Buku</td>
				<td><input type="text" name="penulisbuku"></td>
			</tr>
			<tr>
				<td>Halaman Buku</td>
				<td><input type="text" name="halamanbuku"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>