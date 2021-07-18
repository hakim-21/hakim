<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$keyword = $_POST['keyword'];
$nama = $_POST['nama'];
$instansi = $_POST['ins'];
$website = $_POST['web'];
$waktu = $_POST['waktu'];
$biaya = $_POST['biaya'];
$skor = $_POST['skor'];
$file = $_POST['fl'];
// $alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($conn,"update tes set keyword='$keyword', nama='$nama', instansi='$instansi', website='$website', waktu='$waktu', biaya='$biaya', skor='$skor', file='$file' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:form.php");
 
?>