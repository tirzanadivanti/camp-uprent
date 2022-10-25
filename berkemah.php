<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- font saya -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- CSS saya -->
    <link rel="stylesheet" type="text/css" href="css/catalog.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>CAMP-UPrent | Mendaki</title>
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
                    <a href="logout.php" class="ml-3 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                    <!-- <div class="dropdown">
                    <div type="button" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="img/profil.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="dropdown-menu">
                    <span class="dropdown-item-text"><?php echo "<b>" . $_SESSION['username'] . "</b><br>"; ?></span>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- awal JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span class="font-weight-bold">KATALOG</span></h1>
            <h4>BERKEMAH</h4>
        </div>
    </div>
    <!-- akhir JUMBOTRON -->



    <!-- NAV SAMPING -->

    <div class="row mt-4 no-gutters">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-2">
                <li class="list-group-item bg-secondary">Kategori Produk</li>
                <a href="mendaki.php" class="list-group-item list-group-item-action">Mendaki</a>
                <a href="berkemah.php" class="list-group-item list-group-item-action">Berkemah</a>
                <a href="menyelam.php" class="list-group-item list-group-item-action">Menyelam</a>
            </ul>
        </div>

        <!-- akhir NAV SAMPING -->
        <div class="col-md-10">

            <!-- BARIS 1 -->
            <div class="row no-gutters">
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM barang WHERE kat_barang = 'Berkemah'";
                $datas = mysqli_query($koneksi, $sql);
                $i = 1;
                foreach ($datas as $data) :
                ?>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-duration="300">
                        <div class="kotak-item" id="gambar1">
                            <img src="img/upload/<?php echo $data['gambar']; ?>" alt="">
                            <p class="nama-item "><?php echo $data['nama_barang']; ?></p>
                            <p class="harga-item">Rp. <?php echo $data['harga']; ?>/hari</p>
                            <button class="btn btn-info" data-toggle="modal" data-target="#Modal<?php echo $data['nama_barang']; ?>">Lihat</button>
                            <a href="sewa.php" class="btn btn-danger">Sewa</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal<?php echo $data['nama_barang']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel"><?php echo $data['nama_barang']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="img/upload/<?php echo $data['gambar']; ?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-md">
                                                <ul class="list-group">
                                                    <li class="list-group-item">Nama Barang : <?php echo $data['nama_barang']; ?></li>

                                                    <li class="list-group-item">Harga : Rp. <?php echo $data['harga']; ?>/hari</li>

                                                    <li class="list-group-item">Stok : <?php echo $data['stok']; ?></li>


                                                    <li class="list-group-item">Keterangan Barang : <br><?php echo $data['ket_barang']; ?></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
            </div>
        </div>
    </div>

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
                    document.location='berkemah.php'
                    </script>";
                            } else {
                                echo "<script>alert('Gagal Dikirim');
                    document.location='berkemah.php'</script>";
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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