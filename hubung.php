<?php
function tambahData($data){
		global $koneksi;
		$namakamar=$data['namakamar'];
		$panjang=$data['panjang'];
		$lebar=$data['lebar'];
		$fasilitas=$data['fasilitas'];
		$harga=$data['harga'];
		$alamat=$data['alamat'];
		$kriteria=$data['kriteria'];
		$kontak=$data['kontak'];
		$gambar=upload();
		$perintah="INSERT INTO tb_kamar VALUES('', '$namakamar', '$panjang', '$lebar', '$fasilitas', '$harga', '$alamat', '$kriteria', '$kontak', '$gambar')";
		mysqli_query($koneksi, $perintah);
		return mysqli_affected_rows($koneksi);
	}

	function upload(){
	    $namaFiles=$_FILES["gambar"]["name"];
	    $ukuran=$_FILES["gambar"]["size"];
	    $error=$_FILES["gambar"]["error"];
	    $tmp_name=$_FILES["gambar"]["tmp_name"];
	    $ekstensi=["jpg","jpeg","png"];
	    $ekstensiGambar=explode(".", $namaFiles);
	    $ekstensiGambar=strtolower(end($ekstensiGambar));

	    if (!in_array($ekstensiGambar, $ekstensi)) {
	        echo "<script>alert('yang anda upload bukan gambar');</script>";
	        return false;
	    }if ($ukuran>1000000) {
	        echo "<script>alert('ukuran gambar lebih dari 1MB');</script>";
	        return false;
	    }$nama_baru=uniqid();
	    $nama_baru.=".";
	    $nama_baru.=$ekstensiGambar;
	    move_uploaded_file($tmp_name, 'assets/img/'.$nama_baru);
	    return $nama_baru;
    }
?>