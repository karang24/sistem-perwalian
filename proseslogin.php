<?php 
session_start();
require_once "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if ($op=="in"){
	$cek = mysql_query ("select * from user where username ='$username' and password='$password'");
	if (mysql_num_rows ($cek)==1){
	$sql = mysql_fetch_array($cek);
	$_SESSION['username'] = $sql ['username'];
	$_SESSION['level']=$sql ['level'];
	if ($sql['level']=="admin"){
		header("location:menu_admin.php");
	} else if ($sql['level']=="mahasiswa"){
		header ("location:menu_mhs.php");
	} else if ($sql['level']=="dosen"){
		header ("location:menu_dosen.php");
	}
	}else {
	die("password salah");
	}
}else if ($op=="out"){
unset($_SESSION['username']);
unset ($_SESSION['level']);
header ("location:../proyek/login/tes-login-mhs.php");
}
?>