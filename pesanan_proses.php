<?php
include "koneksi.php";
$id = $_POST['id_sewa'];
$status = "Silahkan Ambil Barang";
$gambar = upload();
// upload gambar
function upload()
{
    $namaFiles = $_FILES["gambar"]["name"];
    $ukuran = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmp_name = $_FILES["gambar"]["tmp_name"];
    $ekstensi = ["jpg", "jpeg", "png"];
    $ekstensiGambar = explode(".", $namaFiles);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensi)) {
        echo "<script>alert('yang anda upload bukan gambar');</script>";
        return false;
    }
    if ($ukuran > 1000000) {
        echo "<script>alert('ukuran gambar lebih dari 1MB');</script>";
        return false;
    }
    $nama_baru = uniqid();
    $nama_baru .= ".";
    $nama_baru .= $ekstensiGambar;
    move_uploaded_file($tmp_name, 'img/upload/' . $nama_baru);
    return $nama_baru;
}
$perintah = "UPDATE sewa SET bukti='$gambar', status='$status' WHERE id_sewa='$id'";
mysqli_query($koneksi, $perintah);
$cek = mysqli_affected_rows($koneksi);
if ($cek > 0) {
    echo "<script>confirm('Apakah anda yakin mengirim bukti ini?');";
    echo "alert('Bukti Pembayaran Anda Berhasil Dikirim ke Admin');";
    echo "document.location.href='nota.php?id_sewa=$id';</script>";
    //header("location: nota.php?id_sewa=" . $id);
    exit;
} else {
    echo "<script>alert ('bukti gagal dikirim'); document.location.href='pesanan.php'</script>";
}
