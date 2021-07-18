<?php 
include 'koneksi.php';
$keyword = $_POST['keyword'];
$nama = $_POST['nama'];
$ins = $_POST['ins'];
$website = $_POST['web'];
$waktu = $_POST['waktu'];
$biaya = $_POST['biaya'];
$skor = $_POST['skor'];
$file = $_POST['fl'];



 $sql=("INSERT INTO tes (id, keyword, nama, instansi, website, waktu, biaya, skor, file) VALUES('','$keyword', '$nama', '$ins', '$website', '$waktu', '$biaya', '$skor', '$file')");
$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
 
	if($query){
		echo '<script type="text/javascript">
  alert("hai");
</script>'; ;
		header("location:form.php");
	} else {
		echo "Error :".$sql."<br>".mysqli_error($conn);
	}
 
	mysqli_close($conn);
 
 

?>