<?php
session_start();
require_once "koneksi.php";
	$pesan = $_POST['pesan'];
	$npm = $_POST['npm'];
	$nim = $_POST['nim1'];
	$id_kelas= $_POST['id_kelas'];
	$file = $_FILES ['upload']['name'];
	$perintah = "insert into pesan_mhs values('',NOW(),NOW(),'$pesan','$file','$npm','$id_kelas','$nim')";
copy($_FILES['upload']['tmp_name'],"images/".$_FILES['upload']['name']);
	$sql = mysql_query($perintah);
	if ($sql)
	 { 
	 ?>
<script language="javascript">alert('Data berhasil di simpan');
document.location = 'chat akademik_mhs.php'
</script> 
<?php
	}else { echo "Data gagal dimasukkan ke dalam database"; }
?>