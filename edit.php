<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tes where id='$id'");
	while($row = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></tr>
				<tr>
					<td>keyword</td>
					<td><input type="text" name="keyword" value="<?php echo $row['keyword']; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
				</tr>
				<tr>
					<td>instansi</td>
					<td><input type="text" name="ins" value="<?php echo $row['instansi']; ?>"></td>
				</tr>
				<tr>
					<td>website</td>
					<td><textarea type="text" name="web" value=""><?php echo $row['website']; ?></textarea> </td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td><input type="text" name="waktu" value="<?php echo $row['waktu']; ?>"></td>
				</tr>
				<tr>
					<td>Biaya</td>
					<td><input type="text" name="biaya" value="<?php echo $row['biaya']; ?>"></td>
				</tr>
				<tr>
					<td>Skor</td>
					<td><input type="text" name="skor" value="<?php echo $row['skor']; ?>"></td>
				</tr>
				<tr>
					<td>File</td>
					<td><input type="file" name="fl" value="<?php echo $row['file']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>