<?php
include "koneksi.php";
$id_sewa = $_GET['id_sewa'];
$query = "DELETE FROM sewa WHERE id_sewa='$id_sewa'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
?>
    <script language="javascript">
        document.location.href = "datasewa.php";
    </script>
<?php
} else {
    echo "gagal hapus data";
}
?>