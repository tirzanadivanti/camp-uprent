<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- FONT SAYA -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <!-- CSS SAYA -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <style>
        body {
            font-family: poppins;
            overflow-y: hidden;
        }

        .jumbotron {
            background-image: url("img/bgform.jpg");
            background-size: cover;
            height: 100%;
            width: 100%;
        }

        .halo {
            text-align: center;
        }

        .kotak {
            width: 1000px;
            height: 480px;
            margin-left: 115px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }
    </style>

    <title>CAMP-UPrent</title>
    <link rel="icon" href="img/logo3.png">
</head>

<body>
    <div class="jumbotron">
        <!-- box -->
        <section>
            <div class="card kotak">
                <div class="card-body">
                    <h1 class="halo h1">Formulir Penyewaan</h1>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input">Nama</label>
                                <input name="nama" type="text" class="form-control" id="input" value="<?php echo $_SESSION['username']; ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input">No telepon</label>
                                <input name="notelp" type="text" class="form-control" id="input">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" cols="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="" for="inlineFormCustomSelect">Jumlah</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jumlah">
                                    <option selected>Pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Tanggal Ambil</label>
                                <input name="ambil" type="date" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Tanggal Kembali</label>
                                <input name="kembali" type="date" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <button name="kirim" value="kirim" type="submit" class="btn btn-primary">Sewa</button>


                        <!-- SUBMIT -->
                        <?php
                        include "koneksi.php";

                        // hasil data array (kirim)
                        if (isset($_POST['kirim'])) {
                            @$nama = $_POST['nama'];
                            @$notelp = $_POST['notelp'];
                            @$alamat = $_POST['alamat'];
                            @$jumlah = $_POST['jumlah'];
                            @$ambil = $_POST['ambil'];
                            @$kembali = $_POST['kembali'];
                            @$status = "belum dibayar";
                            @$nama_barang = $_GET['nama_barang'];
                            $hari = 0;
                            for ($i = $ambil; $i < $kembali; $i++) {
                                $hari++;
                            }
                            @$jumbayar = $_GET['harga'] * $hari;
                            @$kirim    = $_POST['kirim'];
                            // upload gambar
                            // Memasukkan data (Insert) 
                            @$query = "INSERT INTO sewa VALUES ('','$nama','$notelp','$alamat','$jumlah','$ambil','$kembali','$status','$nama_barang','$jumbayar','')";

                            $hasil = mysqli_query($koneksi, $query);
                            if ($hasil) {
                                echo "<script>alert('Berhasil dibuat');
                    document.location='pesanan.php'
                    </script>";
                            } else {
                                echo "<script>alert('Gagal Dibuat');
                    document.location='sewa.php'</script>";
                            }
                        }

                        ?>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>