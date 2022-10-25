<?php
include "koneksi.php";
$kat_barang = $_POST['kat_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$ket_barang = $_POST['ket_barang'];
$gambarLama = $_POST['gambarLama'];
if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}
$kirim = $_POST['kirim'];
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
//$img_bar=$_POST['img_bar'];
$query = "UPDATE barang SET kat_barang='$kat_barang', nama_barang='$nama_barang', harga='$harga', 
        stok='$stok', ket_barang='$ket_barang', gambar='$gambar' WHERE nama_barang='$nama_barang'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script>alert('Berhasil Diedit');
                        document.location='databar.php'
                        </script>";
} else {
    echo "Gagal update data";
    echo mysqli_error();
}
