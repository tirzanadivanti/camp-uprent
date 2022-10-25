<?php
include "koneksi.php";
$id      = $_POST['id'];
$judul_ar = $_POST['judul_ar'];
$tgl      = $_POST['tgl'];
$sinop_ar = $_POST['sinop_ar'];
$isi      = $_POST['isi'];
$gambararLama = $_POST['gambararLama'];
if ($_FILES['gambarar']['error'] === 4) {
    $gambarar = $gambararLama;
} else {
    $gambarar = upload();
}
$kirim    = $_POST['kirim'];
// upload gambar
function upload()
{
    $namaFiles = $_FILES["gambarar"]["name"];
    $ukuran = $_FILES["gambarar"]["size"];
    $error = $_FILES["gambarar"]["error"];
    $tmp_name = $_FILES["gambarar"]["tmp_name"];
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
// Memasukkan data (Insert) 
$query = "UPDATE artikel SET id='$id', judul_ar='$judul_ar', tgl='$tgl', sinop_ar='$sinop_ar', 
                    isi='$isi', gambarar='$gambarar' WHERE id='$id'";

// hasil data array (kirim)
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script>alert('Berhasil Diedit');
                        document.location='dataar.php'
                        </script>";
} else {
    echo "Gagal update data";
    echo mysqli_error();
}
