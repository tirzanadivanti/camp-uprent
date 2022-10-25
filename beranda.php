<?php
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {

  // ini adalah halam dengan level user
  if ($_SESSION['level'] == "user") {
    echo "<script></script>";
  } else {
    echo "Anda belum terdaftar sebagai User";
  }
}
// jika user belum terdaftar maka akan diarahkan ke halaman register.php
if (!isset($_SESSION['level'])) {
  echo "</h1>Anda tidak boleh mengakses halaman ini tanpa : ";
  echo "<a href='login.php'>Login</a><br>";
  echo "<a href='daftar.php'>Belum punya User?</a></h1>";
}
?>
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

  <title>CAMP-UPrent</title>
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
          <a class="nav-link nav-item active" href="beranda.php">BERANDA <span class="sr-only">(current)</span></a>
          <a class="nav-link nav-item active" href="katalog.php">KATALOG</a>
          <a class="nav-link nav-item active" href="informasi.php">INFORMASI</a>
          <a class="nav-link nav-item active" href="artikel.php">ARTIKEL</a>
          <a class="nav-link nav-item active" href="pesanan.php">PESANAN</a>
          <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
          <!-- <a class="nav-link nav-item active" href="file:///D:/WEB4/login.html">MASUK</a> -->
        </div>
      </div>
    </div>
  </nav>

  <!-- akhir NAVBAR -->


  <!-- awal JUMBOTRON -->

  <div class="jumbotron jumbotron-fluid ">
    <div class="container ifont">
      <h1 class="display-4"><span class="font-weight-bold">Explore</span> our <span class="font-weight-bold">Nature</span></h1>
      <p class="lead">complete your equipment here!</p>
    </div>
  </div>

  <!-- akhir JUMBOTRON -->


  <!-- awal CARD -->

  <div class="container ">
    <div class="row mt-50">
      <div class="col text-center">
        <h1 class="judpro font-weight-bold">PRODUK</h1>
      </div>
    </div>

    <div class="row justify-content-center row-item">
      <!-- carousel -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">

            <!-- DERET 1 -->

            <div class="row">
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/jaket.jpg" alt="">
                  <p class="nama-item ">Jaket</p>
                  <p class="harga-item">Rp. 10.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary" type="button">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/gaiter.jpg" alt="">
                  <p class="nama-item ">Gaiter</p>
                  <p class="harga-item">Rp. 4.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary" type="button">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/sepatuhiking.jpg" alt="">
                  <p class="nama-item ">Sepatu</p>
                  <p class="harga-item">Rp. 20.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary" type="button">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/headlamp.jpg" alt="">
                  <p class="nama-item ">Head Lamp</p>
                  <p class="harga-item">Rp. 5.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- AHKIR DERET 1 -->

          <!-- DERET 2 -->

          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/kompas.jpg" alt="">
                  <p class="nama-item ">Kompas</p>
                  <p class="harga-item">Rp. 3.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/tenda2.jpg" alt="">
                  <p class="nama-item ">Tenda</p>
                  <p class="harga-item">Rp. 19.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/matras.jpg" alt="">
                  <p class="nama-item ">Matras Tidur</p>
                  <p class="harga-item">Rp. 2.500/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/hammock.png" alt="">
                  <p class="nama-item ">Hammock</p>
                  <p class="harga-item">Rp. 5.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- AKHIR DERET 2 -->


          <!-- DERET 3 -->

          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/wersuit.jpg" alt="">
                  <p class="nama-item ">Wersuit</p>
                  <p class="harga-item">Rp. 25.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/mask.jpg" alt="">
                  <p class="nama-item ">Kacamata Selam</p>
                  <p class="harga-item">Rp. 10.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/kakikatak.jpg" alt="">
                  <p class="nama-item ">Kaki Katak</p>
                  <p class="harga-item">Rp. 10.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/snorkel.jpg" alt="">
                  <p class="nama-item ">Snorkel</p>
                  <p class="harga-item">Rp. 15.000/hari</p>
                  <a href="">
                    <!-- <button class="btn btn-primary">Selengkapnya</button> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir DERET 3 -->
        </div>
      </div>
      <!-- akhir carousel -->
    </div>
  </div>
  <!-- akhir CARD -->


  <!-- awal ABOUT -->

  <section class="bg-about">
    <div class=" container about">
      <div class="row">
        <div class="col-md-6">
          <p class="judab font-weight-bold">Tips Mendaki Gunung untuk Pemula</p>
          <p class="abis"><span class="font-weight-bold">1. </span>Pilih Gunung dengan Medan Ringan</p>
          <p class="abis"><span class="font-weight-bold">2. </span>Persiapkan Kondisi Fisik</p>
          <p class="abis"><span class="font-weight-bold">3. </span>Pastikan Tubuh Sehat</p>
          <p class="abis"><span class="font-weight-bold">4. </span>Bawa Perlengkapan Penting</p>
          <p class="abis"><span class="font-weight-bold">5. </span>Pelajari Teknik Keselamatan</p>
          <p class="abis"><span class="font-weight-bold">6. </span>Disarankan untuk Pergi Secara Berkelompok</p>
          <p class="abis"><span class="font-weight-bold">7. </span>Pertimbangkan Soal Cuaca</p>
        </div>
        <div class="col-md-6 foto posto">
          <img src="img/about.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- akhir ABOUT -->


  <!-- awal PERSYARATAN -->
  <section>
    <div class=" container about">
      <div class="row">
        <div class="col-md-6 foto">
          <img src="img/booking.png" alt="">
        </div>
        <div class="col-md-6">
          <p class="judab font-weight-bold">Persyaratan Penyewaan</p>
          <p class="jud font-weight-bold">Jaminan :</p>
          <p class="abis">Untuk Jaminan Sewa Peminjam meninggalkan salah satu identitas dibawah ini.<br>
            1. KTP / Kartu Pelajar yang Jelas & Berlaku<br>
            2. Harus sertakan Foto Kopi Kartu Keluarga<br></p>
          <p class="abis" style="color: red;">*Bawalah Cadangan Minimal 2 Identitas.<br>
            *Untuk Sewa Lebih Banyak Meninggalkan 2 Identitas</p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir PERSYARATAN -->




  <!-- awal ARTIKEL -->
  <!-- <section>
    <div class="container">
      <div class="row">
        <div class="col text-center ">
          <h1 class="judar">ARTIKEL</h1>
        </div>
      </div>
      <div class="row justify-content-center row-item">
        <div class="row">
          <div class="col-lg-3">
            <div class="kotak-blog" id="gambar1">
              <img src="img/kategoricad.jpg" alt="">
              <p class="judul-blog">Mendaki Gunung</p>
              <p class="isi-blog">Lorem ipsum dolor, voluptatem eius odit commodi totam, accusantium</p>
              <a href="">
                <button type="button" class="btn btn-outline-secondary">Lanjut membaca</button>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="kotak-blog" id="gambar1">
              <img src="img/kategoricad.jpg" alt="">
              <p class="judul-blog">Tips & Tricks Mendaki</p>
              <p class="isi-blog">Lorem ipsum dolor, voluptatem eius odit commodi totam, accusantium</p>
              <a href="">
                <button type="button" class="btn btn-outline-secondary">Lanjut membaca</button>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="kotak-blog" id="gambar1">
              <img src="img/kategoricad.jpg" alt="">
              <p class="judul-blog">Cara Membuat Tenda</p>
              <p class="isi-blog">Lorem ipsum dolor, voluptatem eius odit commodi totam, accusantium</p>
              <a href="">
                <button type="button" class="btn btn-outline-secondary">Lanjut membaca</button>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="kotak-blog" id="gambar1">
              <img src="img/kategoricad.jpg" alt="">
              <p class="judul-blog">Peralatan Diving</p>
              <p class="isi-blog">Lorem ipsum dolor, voluptatem eius odit commodi totam, accusantium</p>
              <a href="">
                <button type="button" class="btn btn-outline-secondary">Lanjut membaca</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- akhir ARTIKEL -->


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
                  document.location='index.php'
                  </script>";
              } else {
                echo "<script>alert('Gagal Dikirim');
                  document.location='index.php'</script>";
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