<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- font saya -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- CSS SAYA -->
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    
    <title>Admin</title>
</head>
<?php 
    session_start();
        if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
            // jika level admin akan masuk ke halaman admin.php
            if ($_SESSION['level'] == "admin") {
                echo "<script></script>";
                
            }
            // jika kondisi level user maka akan diarahkan ke halaman user.php
            else if ($_SESSION['level'] == "user"){
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
<body>
      <!-- awal NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href=""><span class="judad">SELAMAT DATANG ADMIN | </span>CAMP-UPrent</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="dropdown">
            <div type="button" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/profil.png" alt="Avatar" class="avatar">
            </div>
            <div class="dropdown-menu">
              <span class="dropdown-item-text"><?php echo "<b>".$_SESSION['username']."</b><br>"; ?></span>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- akhir NAVBAR -->
    
    <div class="tab">

        <button href="#" class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen"><i class="fas fa-tachometer-alt"></i> <a href="">Dashboard</a></button>
        <button class="tablinks" onclick="openCity(event, 'TambahBarang')"><i class="fas fa-folder-plus"></i> <a href="">Tambah Barang</a></button>
        <button class="tablinks" onclick="openCity(event, 'Artikel')"><i class="fas fa-newspaper"></i> <a href="">Artikel</a></button>
        <button class="tablinks" onclick="openCity(event, 'TambahArtikel')"><i class="fas fa-folder-plus"></i> <a href="">Tambah Artikel</a></button>
        <button class="tablinks" onclick="openCity(event, 'DataUser')"><i class="fas fa-user-friends"></i> <a href="">Data User</a></button>
    </div>

    <div id="Dashboard" class="tabcontent jartab">
        <h2>Data Barang</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Keterangan Barang</th>
                  <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                  <td><a href="" class="btn btn-primary">Edit</a></td>
                  <td><a href="" class="btn btn-primary">Hapus</a></td>
                </tr> -->
            </tbody>
        </table>   
    </div>


<!-- TAMBAH BARANG -->
    <div id="TambahBarang" class="tabcontent jartab">
        <h2>Tambah Barang</h2>
        <form>
          <div class="form-group">
            <label for="exampleInput">Nama Barang</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInput">Harga</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInput">Stok</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan Barang</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Pilih gambar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<!-- ARTIKEL -->
    <div id="Artikel" class="tabcontent jartab">
        <h2>Data Artikel</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Judul Artikel</th>
                  <th scope="col">Sinopsis</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Isi Artikel</th>
                  <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                  <td><a href="" class="btn btn-primary">Edit</a></td>
                  <td><a href="" class="btn btn-primary">Hapus</a></td>
                </tr> -->
            </tbody>
        </table>
    </div>

<!-- TAMBAH ARTIKEL -->
    <div id="TambahArtikel" class="tabcontent jartab">
        <h2>Tambah Artikel</h2>
        <form>
          <div class="form-group">
            <label for="exampleInput">Judul Artikel</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInput">Sinopsi Artikel</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInput">Tanggal dibuat</label>
            <input type="date" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Artikel</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Pilih gambar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<!-- DATA USER -->
    <div id="DataUser" class="tabcontent jartab">
        <h2>Data User</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Level</th>
                  <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                  <td><a href="" class="btn btn-primary">Edit</a></td>
                  <td><a href="" class="btn btn-primary">Hapus</a></td>
                </tr> -->
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- JS SAYA -->
  <script src="js/main.js"></script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>