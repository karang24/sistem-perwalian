<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();
unset($_SESSION["username"]);
//hapus session yang sudah dibuat
session_destroy();

//redirect ke halaman login
header("location:proyek.php");
?>