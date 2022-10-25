<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM kotak_saran WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
?>
    <script language="javascript">
        document.location.href = "datasaran.php";
    </script>
<?php
} else {
    echo "gagal hapus data";
}
?>