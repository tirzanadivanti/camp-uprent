<?php 
include "koneksi.php";
$nama_barang=$_GET['nama_barang'];
$query="DELETE FROM barang WHERE nama_barang='$nama_barang'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
?>
<script language="javascript">
document.location.href="databar.php";
</script>
<?php 
}else{
	echo "gagal hapus data";
}
?>