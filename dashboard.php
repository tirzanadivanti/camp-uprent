<?php
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
  // jika level admin akan masuk ke halaman admin.php
  if ($_SESSION['level'] == "admin") {
    echo "<script></script>";
  }
  // jika kondisi level user maka akan diarahkan ke halaman user.php
  else if ($_SESSION['level'] == "user") {
    header('location:beranda.php');
  }
}
// jika user belum terdaftar maka akan diarahkan ke halaman register

if (!isset($_SESSION['level'])) {
  echo "<h2>Anda tidak boleh mengakses halaman ini tanpa : ";
  echo "<a href='login.php'>Login</a><br></h2>";
  echo "<a href='daftar.php'>Belum punya akun?</a>";
}
?>
<?php
include "koneksi.php";
function total($perintah)
{
  global $koneksi;
  $query = mysqli_query($koneksi, $perintah);
  $data = [];
  $jumlah = 0;
  while ($hasil = mysqli_fetch_assoc($query)) {
    $data[] = $hasil;
    $jumlah++;
  }
  return $jumlah;
}
$barang = total("SELECT * FROM barang");
$artikel = total("SELECT * FROM artikel");
$kotak_saran = total("SELECT * FROM kotak_saran");
$sewa = total("SELECT * FROM sewa");
$user = total("SELECT * FROM user");
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

  <!-- CSS SAYA -->
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">

  <title>Admin</title>
</head>


<body>
  <!-- awal NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">CAMP-UPrent <span class="judad">| SELAMAT DATANG ADMIN</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="akun">
        <span>Hai, <b>Admin</b></span>
        <a href="logout.php" class="ml-3 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </div>
  </nav>

  <!-- akhir NAVBAR -->

  <div class="row no-gutters jarnav">
    <div class="col-md-2 bg-dark pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dasboard</a>
          <hr class="bg-light">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="databar.php"><i class="fas fa-clipboard-list mr-2"></i>Data Barang</a>
          <hr class="bg-light">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dataar.php"><i class="fas fa-newspaper mr-2"></i>Artikel</a>
          <hr class="bg-light">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="datasewa.php"><i class="fas fa-clipboard-check mr-2"></i>Penyewaan</a>
          <hr class="bg-light">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="datauser.php"><i class="fas fa-user-friends mr-2"></i>Data User</a>
          <hr class="bg-light">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="datasaran.php"><i class="fas fa-archive mr-2"></i>Data Saran</a>
          <hr class="bg-light">
        </li>
      </ul>
    </div>
    
    <div class="col-md-10 p-5 ">
      <h4><i class="fas fa-tachometer-alt"></i> DASHBOARD</h4>
      <div class="row text-white">
        <div class="card bg-secondary" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">JUMLAH USER</h5>
            <div class="display-4"><?php echo $user; ?></div>
          </div>
        </div>
        <div class="card bg-warning ml-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">BARANG</h5>
            <div class="display-4"><?php echo $barang; ?></div>
          </div>
        </div>
        <div class="card bg-danger ml-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">PESANAN</h5>
            <div class="display-4"><?php echo $sewa; ?></div>
          </div>
        </div>
        <div class="card bg-info ml-3 mt-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">ARTIKEL</h5>
            <div class="display-4"><?php echo $artikel; ?></div>
          </div>
        </div>
        <div class="card bg-success ml-3 mt-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">SARAN</h5>
            <div class="display-4"><?php echo $kotak_saran; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- JS SAYA -->
  <script src="js/main.js"></script>

  <!--Avatar email Profil  -->
  <script>
    var coll = document.getElementsByClassName("collapse");
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