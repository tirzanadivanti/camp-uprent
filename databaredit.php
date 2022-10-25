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
//form edit atau update
include "koneksi.php";
$nama_barang = $_GET['nama_barang'];
$query = "SELECT * FROM barang WHERE nama_barang='$nama_barang'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>

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
            <h4><i class="fas fa-clipboard-list"></i> EDIT BARANG</h4>

            <!-- TAMBAH BARANG -->
            <div id="TambahBarang" class="tabcontent jartab">
                <form action="databaredit_proses.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Kategori Barang</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="kat_barang" value="<?php echo $data['kat_barang']; ?>">
                            <option value="<?php echo $data['kat_barang']; ?>"><?php echo $data['kat_barang']; ?></option>
                            <option value="Mendaki">Mendaki</option>
                            <option value="Berkemah">Berkemah</option>
                            <option value="Menyelam">Menyelam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" id="" value="<?php echo $data['nama_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Harga</label>
                        <input name="harga" type="text" class="form-control" id="" value="<?php echo $data['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Stok</label>
                        <input name="stok" type="text" class="form-control" id="" value="<?php echo $data['stok']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan Barang</label>
                        <textarea name="ket_barang" class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100px;"><?php echo $data['ket_barang']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Pilih gambar</label>
                        <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $data['gambar']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $data['gambar']; ?>">
                    </div>
                    <button name="kirim" value="kirim" type="submit" class="btn btn-primary">Kirim</button>

                    <!-- SUBMIT TAMBAH BARANG -->

                </form>
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