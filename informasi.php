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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <style>
        body {
            font-family: poppins;
        }

        .jumbotron {
            background-image: url("img/jumar1.jpg");
            background-size: cover;
            width: 100%;
            height: 360px;
            text-align: center;
            color: white;
            padding-top: 150px;
            /* position: absolute; */
            /* background-repeat: no-repeat;
            background-position: center; */
            /* margin-top: 10px; */
        }

        .about {
            margin-top: 20px;
            padding: 30px;
        }
    </style>

    <title>CAMP-UPrent | Informasi</title>
    <link rel="icon" href="img/logo3.png">

</head>

<body>

    <!-- awal NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="beranda.php">CAMP-UPrent</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav ml-auto mr-4">
                    <a class="nav-link nav-item active" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
                    <a class="nav-link nav-item active" href="katalog.php">KATALOG</a>
                    <a class="nav-link nav-item active" href="informasi.php">INFORMASI</a>
                    <a class="nav-link nav-item active" href="artikel.php">ARTIKEL</a>
                    <a class="nav-link nav-item active" href="pesanan.php">PESANAN</a>
                    <!-- <a class="nav-link nav-item active" href="file:///D:/WEB4/login.html">MASUK</a> -->
                    <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
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

    <!-- akhir NAVBAR -->


    <!-- awal JUMBOTRON -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span class="font-weight-bold">INFORMASI</span></h1>
        </div>
    </div>

    <!-- akhir JUMBOTRON -->


    <!-- awal INFO -->
    <section>
        <div class="container about">
            <p class="abis" style="color: black;">No Rekening : 19691-19783-20019</p>
            <p class="abis" style="color: black; margin-top:-10px;">An. Noya Shevi</p>
            <p class="judab font-weight-bold">Cara Booking</p>
            <p class="abis"><span class="font-weight-bold">1. </span>Klik tombol sewa yang tertera</p>
            <p class="abis"><span class="font-weight-bold">2. </span>Isi formulir penyewaan dengan benar</p>
            <p class="abis"><span class="font-weight-bold">2. </span>Isi no telepon dengan nomor yang masih aktif</p>
            <p class="abis"><span class="font-weight-bold">3. </span>Fix Booking Wajib DP minimal 30% dari biaya keseluruhan, bisa via Tranfer BCA, Mandiri, BRI atau langsung datang ke lokasi.</p>
            <p class="abis"><span class="font-weight-bold">4. </span>Sceenshot nota untuk ditunjukan ke pegawai pada saat mengambil barang</p>
            <p class="abis"><span class="font-weight-bold">5. </span>Pelunasan Umumnya dilakukan saat pengambilan barang</p>
            <p class="abis"><span class="font-weight-bold">6. </span>Jika setelah DP kemudian pemesan melakukan pembatalan pada H-1 maka DP tersebut hangus</p>
            <p class="abis"><span class="font-weight-bold">7. </span>Jika pemesan tidak mmembayar DP pada kurun waktu 24 jam maka Booking dibatalkan</p>
        </div>
    </section>

    <section>
        <div class="container about">
            <p class="judab font-weight-bold">Syarat Sewa</p>
            <p class="abis"><span class="font-weight-bold">1. </span>Untuk Jaminan Sewa Peminjam meninggalkan E-KTP / Kartu Pelajar (malang) yang BERLAKU dan JELAS (usahakan membawa 2 identitas)</p>
            <p class="abis"><span class="font-weight-bold">2. </span>Untuk sewa dalam jumlah banyak, meninggalkan 2 identitas</p>
            <p class="abis"><span class="font-weight-bold">2. </span>Menyertakan Fotokopi KK (Umum maupun Pelajar)</p>
            <p class="abis"><span class="font-weight-bold">3. </span>Bagi yang melakukan Booking kemudian membatalkan, uang DP akan hangus.</p>
            <p class="abis"><span class="font-weight-bold">4. </span>Hitungan Sewa Per Hari = 24 jam setelah jam pengambilan barang, Jika Lebih 24jam Hitungan 1,5 hari.</p>
            <p class="abis"><span class="font-weight-bold">5. </span>Jika Sewa 2Hari atau Lebih hitungan Per Malam.</p>
            <p class="abis"><span class="font-weight-bold">6. </span>Keterlambatan dalam pengembalian akan dikenakan Charge Tambah Hari.</p>
            <p class="abis"><span class="font-weight-bold">7. </span>Jika ada kehilangan atau kerusakan maka penyewa harus mengganti sesuai barang yang di sewa.</p>
            <p class="abis"><span class="font-weight-bold">8. </span>Penyewa mengembalikan dengan kondisi lengkap, diusahakan Bersih, tidak perlu di cuci.</p>
        </div>
    </section>

    <!-- akhir INFO -->


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
                    document.location='informasi.php'
                    </script>";
                            } else {
                                echo "<script>alert('Gagal Dikirim');
                    document.location='informasi.php'</script>";
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


    <!-- JS SAYA -->
    <script src="js/main.js"></script>
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