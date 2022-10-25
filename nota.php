<?php
session_start();

//form edit atau update
include "koneksi.php";
$id = $_GET['id_sewa'];
$query = "SELECT * FROM sewa WHERE id_sewa='$id'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);


$nama_barang = $data['nama_barang'];
$query1 = "SELECT * FROM barang WHERE nama_barang='$nama_barang'";
$hasil1 = mysqli_query($koneksi, $query1);
$data1 = mysqli_fetch_array($hasil1);

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
            width: 500px;
            height: 480px;
            margin-left: 350px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }
    </style>

    <title>CAMP-UPrent | Nota</title>
    <link rel="icon" href="img/logo3.png">
</head>

<body>
    <div class="jumbotron">
        <!-- box -->
        <section>
            <div class="card kotak">
                <div class="card-body">
                    <h1 class="halo h1">Nota</h1>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>Tgl Ambil </td>
                                <td>: </td>
                                <td><?php echo $data['ambil']; ?></td>
                                <td></td>
                                <td></td>
                                <td>No Sewa </td>
                                <td>: </td>
                                <td><?php echo $data['id_sewa']; ?></td>
                            </tr>
                            <tr>
                                <td>Tgl Kembali </td>
                                <td>: </td>
                                <td><?php echo $data['kembali']; ?></td>
                                <td></td>
                                <td></td>
                                <td>Nama </td>
                                <td>: </td>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"> -------------------------------------------------</td>
                            </tr>
                            <tr>
                                <td>Barang </td>
                                <td></td>
                                <td></td>
                                <td>Jumlah</td>
                                <td></td>
                                <td></td>
                                <td>Harga</td>
                            </tr>
                            <tr>
                                <td colspan="8"> -------------------------------------------------</td>
                            </tr>
                            <tr>
                                <td><?php echo $data['nama_barang']; ?> </td>
                                <td></td>
                                <td></td>
                                <td><?php echo $data['jumlah']; ?></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $data1['harga']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"> -------------------------------------------------</td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td>Total Bayar</td>
                                <td>: </td>
                                <td><?php
                                    @$jumlah = $data['jumlah'];
                                    @$harga = $data1['harga'];
                                    @$ambil = $data['ambil'];
                                    @$kembali = $data['kembali'];
                                    $hari = 0;
                                    for ($i = $ambil; $i < $kembali; $i++) {
                                        $hari++;
                                    }
                                    $bayar = $harga * $hari;
                                    $jumbayar = $bayar * $jumlah;
                                    $dp = $jumbayar * 0.3;
                                    echo $jumbayar; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td>DP</td>
                                <td>: </td>
                                <td><?php
                                    echo $dp; ?></td>
                            </tr>
                        </table>
                        <div style="margin-top: 20px; color: red;">*Screenshot nota untuk pengambilan barang</div>
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