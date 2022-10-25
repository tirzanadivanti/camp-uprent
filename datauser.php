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
<?php

include "koneksi.php"; //panggil file koneksi
$query = "SELECT*FROM user"; //buat query sql
$hasil = mysqli_query($koneksi, $query); //jalankan query sql
$dat = mysqli_fetch_array($hasil);
?>

<body>
  <!-- awal NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href=""><span class="judad">SELAMAT DATANG ADMIN | </span>CAMP-UPrent</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="akun">
        <span>Hai, <?php echo "<b>" . $dat['username'] . "</b>"; ?></span>
        <a href="logout.php" class="ml-3 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
      </div>
      <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="dropdown">
            <div type="button" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/profil.png" alt="Avatar" class="avatar">
            </div>
            <div class="dropdown-menu">
              <span class="dropdown-item-text"><?php echo "<b>" . $_SESSION['username'] . "</b><br>"; ?></span>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
      </div> -->
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
    <div class="col-md-10 p-3 pt-2">
      <h4><i class="fas fa-user-friends"></i> DATA USER</h4>

      <!-- DATA USER -->
      <div id="DataUser" class="tabcontent jartab">
        <!-- <h2>Data User</h2> -->
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Level</th>
              <th colspan="3">Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php"; //panggil file koneksi
            $query = "SELECT * FROM user"; //buat query sql
            $hasil = mysqli_query($koneksi, $query); //jalankan quey sql
            //perulangan untuk menampilkan data dari database
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
              <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <td><a href="datauser_hapus.php?username=<?php echo $data['username']; ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-primary">Delete</a></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>



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