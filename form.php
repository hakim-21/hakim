<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<form method="post" action="tambah_aksi.php">
		<table>
			<!-- <tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr> -->
			<tr>
				<td>Keyword</td>
				<td><input type="text" name="keyword"></td>
			</tr>
			<tr>
				<td>Nama Jurnal</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Instansi</td>
				<td><input type="text" name="ins"></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><textarea type="text" name="web"></textarea> </td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" name="waktu"></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><input type="text" name="biaya"></td>
			</tr>
			<tr>
				<td>Skor</td>
				<td><input type="text" name="skor"></td>
			</tr>

			<tr>
				<td>File</td>
				<td><input type="file" name="fl"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
 
	
	<br/>
	
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Keyword</th>
			<th>Nama Jurnal</th>
			<th>Instansi</th>
			<th>Website</th>
			<th>Waktu</th>
			<th>Biaya</th>
			<th>Skor</th>
			<th>File</th>
			<th>OPSI</th>
		</tr>
		 <?php include 'koneksi.php'; 
	              	$sql = 'SELECT * FROM `tes` ';
	              $query = mysqli_query($conn, $sql);
	              if (!$query) {
	              die ('SQL Error: ' . mysqli_error($conn));
	         	}

                   while($row = mysqli_fetch_array($query))
                      { 

             
              ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['keyword']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['instansi']; ?></td>
				<td><?php echo $row['website']; ?></td>
				<td><?php echo $row['waktu']; ?></td>
				<td><?php echo $row['biaya']; ?></td>
				<td><?php echo $row['skor']; ?></td>
				<td><?php echo $row['file']; ?></td>
				<!-- 	 -->
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>