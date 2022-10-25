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
error_reporting(0);
include "koneksi.php";
session_start();
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
            <h4><i class="fas fa-clipboard-check"></i> DATA PENYEWAAN</h4>
            <form class="form-inline my-2 my-lg-0" action="" method="POST" style="margin-left: 740px; margin-top:-100px;">
                <input class="form-control mr-sm-2" name="inputCari" type="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari" style="float: right;"><i class="fas fa-search"></i></button>
            </form>
            <!-- DATA BARANG -->
            <div id="DataBarang" class="tabcontent jartab">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tgl Ambil</th>
                            <th scope="col">Tgl Kembali</th>
                            <th scope="col">Jumlah Bayar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Bukti</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php"; //panggil file koneksi
                        $cari = $_POST['inputCari'];
                        if ($cari != '') {
                            $select = mysqli_query($koneksi, "SELECT * FROM sewa WHERE nama LIKE '%" . $cari . "%' OR id_sewa LIKE '%" . $cari . "%' ");
                        } else {
                            $select = mysqli_query($koneksi, "SELECT * FROM sewa");
                        }
                        if (mysqli_num_rows($select)) {
                            // perulangan untuk nampilkan data dari database
                            while ($data = mysqli_fetch_array($select)) {
                        ?>
                                <tr>
                                    <td><?php echo $data['id_sewa'] ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['notelp']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['nama_barang']; ?></td>
                                    <td><?php echo $data['jumlah']; ?></td>
                                    <td><?php echo $data['ambil']; ?></td>
                                    <td><?php echo $data['kembali']; ?></td>
                                    <td><?php echo $data['jumbayar'] * $data['jumlah']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td>
                                        <!-- Trigger the Modal -->
                                        <img id="myImg" class="myImg" src="img/upload/<?php echo $data['bukti']; ?>" alt="" style="width:50px;">

                                        <!-- The Modal -->
                                        <div id="myModal" class="modal myModal">

                                            <!-- The Close Button -->
                                            <span class="close">&times;</span>

                                            <!-- Modal Content (The Image) -->
                                            <img class="modal-content img01" id="img01">

                                            <!-- Modal Caption (Image Text) -->
                                            <div id="caption"></div>
                                        </div>
                                    </td>
                                    <!-- <td><img src="img/upload/<?php echo $data['gambar']; ?>" style="width:50px;" alt=""></td> -->
                                    <td>
                                        <form action="datasewa_pro.php" method="POST">
                                            <input type="hidden" name="id_sewa" value="<?php echo $data['id_sewa']; ?>">
                                            <button name="kirim" value="kirim" type="submit" class="btn btn-primary">Selesai</button>
                                        </form>
                                    </td>
                                    <!-- <td><a href="datasewa_hapus.php?id_sewa=<?php echo $data['id_sewa']; ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-primary">Selesai</a></td> -->
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
            <?php } else {
                            echo '<script>alert("Barang yang anda cari tidak ditemukan")</script>';
                        } ?>

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
            <script>
                let gambar = document.querySelectorAll(".myImg");
                let modal = document.querySelectorAll(".myModal");
                let modalImage = document.querySelectorAll(".img01");
                let span = document.querySelectorAll(".close");
                for (let i = 0; i < gambar.length; i++) {
                    let img = gambar[i];
                    let mdl = modal[i];
                    let mdlImg = modalImage[i];
                    let span1 = span[i];

                    img.addEventListener("click", function() {
                        mdl.style.display = "block";
                        mdl.style.position = "absolute";
                        mdl.style.top = "0";
                        mdl.style.left = "0";
                        mdl.style.bottom = "0";
                        mdl.style.right = "0";
                        mdl.style.zIndex = "10000";
                        mdlImg.src = this.src;
                        mdlImg.style.width = "50%";
                        mdlImg.style.height = "600px";

                    })

                    span1.addEventListener("click", function() {
                        mdl.style.display = "none";
                    })


                }
                // Get the modal
                // var modal = document.getElementById("myModal");

                // // Get the image and insert it inside the modal - use its "alt" text as a caption
                // var img = document.getElementById("myImg");
                // var modalImg = document.getElementById("img01");
                // var captionText = document.getElementById("caption");
                // img.onclick = function() {
                //     modal.style.display = "block";
                //     modalImg.src = this.src;
                //     captionText.innerHTML = this.alt;
                // }

                // // Get the <span> element that closes the modal
                // var span = document.getElementsByClassName("close")[0];

                // // When the user clicks on <span> (x), close the modal
                // span.onclick = function() {
                //     modal.style.display = "none";
                // }
            </script>
            <!-- Akhir Avatar email Profil  -->

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>