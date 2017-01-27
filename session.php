<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['pass'];
$id_mhs = $_POST['id_mhs']; 
// query untuk mendapatkan record dari username
$query = "SELECT * FROM username WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    header('location: admin.php');
}
else 
?>
<?php session_register();
$_SESSION['username'];
$_SESSION['pass'];
$_SESSION['id_mhs'];
?>