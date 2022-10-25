<?php

session_start();
include "koneksi.php";

session_destroy();
echo "<script>alert('ANDA SUDAH LOGOUT');
document.location.href='index.php';</script>";
