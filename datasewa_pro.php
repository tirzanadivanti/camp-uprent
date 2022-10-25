<?php
include "koneksi.php";
$id_sewa = $_POST['id_sewa'];
$status = "Pesanan Telah Selesai";
$perintah = "UPDATE sewa SET status='$status' WHERE id_sewa='$id_sewa'";
$hasil = mysqli_query($koneksi, $perintah);
if ($hasil) {
    echo "<script>alert('pesanan selesai'); document.location.href='datasewa.php'</script>";
} else {
    echo "<script>alert ('pesanan gagal selesai'); document.location.href='datasewa.php'</script>";
}
