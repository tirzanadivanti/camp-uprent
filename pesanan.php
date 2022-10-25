<?php
error_reporting(0);
include "koneksi.php";
session_start();
$nama = $_SESSION['username'];
$query = "SELECT * FROM sewa WHERE nama='$nama'"; //buat query sql
$hasil = mysqli_query($koneksi, $query); //jalankan quey sql
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- font saya -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- CSS saya -->
    <link rel="stylesheet" type="text/css" href="css/catalog.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        table {
            margin-top: 100px;
        }
    </style>
    <title>CAMP-UPrent | Pesanan</title>
    <link rel="icon" href="img/logo3.png">
</head>

<body>
    <!-- awal navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="beranda.php">CAMP-UPrent</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav ml-auto mr-4">
                    <a class="nav-link nav-item active" href="beranda.php">BERANDA <span class="sr-only">(current)</span></a>
                    <a class="nav-link nav-item active" href="katalog.php">KATALOG</a>
                    <a class="nav-link nav-item active" href="informasi.php">INFORMASI</a>
                    <a class="nav-link nav-item active" href="artikel.php">ARTIKEL</a>
                    <a class="nav-link nav-item active" href="pesanan.php">PESANAN</a>
                    <!-- <a class="nav-link nav-item active" href="file:///D:/WEB4/login.html">MASUK</a> -->
                    <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->

    <!-- awal tabel -->
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tanggal Ambil</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">DP</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //perulangan untuk menampilkan data dari database
                $i = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['ambil']; ?></td>
                        <td><?php echo $data['kembali']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <td><?php $total = $data['jumbayar'] * $data['jumlah'] * 0.3;
                            echo $total; ?></td>
                        <td><?php $depe = $data['jumbayar'] * $data['jumlah'];
                            echo $depe; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><a class="btn btn-primary" href="nota.php?id_sewa=<?php echo $data['id_sewa']; ?>">Nota</a></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $data['id_sewa']; ?>">Bayar DP</button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $data['id_sewa']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload bukti pembayaran</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="pesanan_proses.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_sewa" value="<?php echo $data['id_sewa']; ?>">
                                            <label for="">Bukti Pembayaran</label>
                                            <input type="file" name="gambar">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="submit<?php echo $i++; ?>" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- akhir tabel -->



    <!-- awal FOOTER -->

    <footer class="bg-dark p-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="font1">Kontak Kami</p>
                    <p><img src="img/home.png" width="4%" /> Jl.Raya Argotirto No.28, Malang</p>
                    <p><img src="img/wafot.png" width="4%" /> +6283835940328</p>
                    <p><img src="img/amplop.png" width="4%" /> campuprent@gmail.com</p>
                    <p>No Rekening : 19691-19783-20019</p>
                    <p style="margin-top:-10px;">An. Noya Shevi</p>
                    <hr width="400px" color="gray">
                    <p style="text-align: center;">Copyright &copy;2021</p>
                </div>
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInput">Email</label>
                            <input name="email" type="email" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Kotak Saran</label>
                            <textarea name="saran" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button name="kirim" value="kirim" type="submit" class="btn btn-info tom">Kirim</button>

                        <!-- SUBMIT TAMBAH ARTIKEL -->
                        <?php
                        include "koneksi.php";
                        @$email = $_POST['email'];
                        @$saran      = $_POST['saran'];
                        @$kirim    = $_POST['kirim'];
                        // Memasukkan data (Insert) 
                        @$query = "INSERT INTO kotak_saran VALUES ('','$email','$saran')";

                        // hasil data array (kirim)
                        if (isset($_POST['kirim'])) {
                            $hasil = mysqli_query($koneksi, $query);
                            if ($hasil) {
                                echo "<script>alert('Saran dan Kritik berhasil dikirim');
                    document.location='katalog.php'
                    </script>";
                            } else {
                                echo "<script>alert('Gagal Dikirim');
                    document.location='katalog.php'</script>";
                            }
                        }

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- java saya -->
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--Avatar email Profil  -->
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
    <!-- Akhir Avatar email Profil  -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>