<!DOCTYPE html>
<html>
<head>

	
</head>

<?php 
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$level = "user"; //otomatis setiap register dianggap level user

// cek keamanan password
if ($password1 == $password2) {
	
	include "koneksi.php";

	//perlu dibuat sebarang pengacak
	$pengacak = "p3ng4c4k";

	// mengenkripdi password dengan md5() dan pengacak
	$passmd = md5($pengacak . md5($password1));

	// menyimpan username dan password terenkripsi ke database
	$query="INSERT INTO user VALUES ('$username', '$passmd', '$level')";
	$hasil = mysqli_query($koneksi, $query);

	// menampilkan status pendaftaran
	if ($hasil) 
	{
		header('location:login.php');
		
	}
	else  echo "username sudah ada yang memiliki";
}
else echo "<h1>Password yang dimasukkan tidak sama</h1>";
 ?>
 </body>
</html>