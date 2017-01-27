<?php
error_reporting("E_ALL") ;
require_once "koneksi.php";
	$pesan = $_POST['pesan'];
	$npm = $_POST['npm'];
	$nim = $_POST['nim1'];
	$id_kelas= $_POST['id_kelas'];
	$file = $_FILES ['upload']['name'];
	$perintah = "insert into pesan_dosen values ('',NOW(),NOW(),'$pesan','$file','$npm','$nim','$id_kelas')";
	$sql = mysql_query($perintah);
	copy($_FILES['upload']['tmp_name'],"images/".$_FILES['upload']['name']);

	if ($sql)
	 { 
	 ?>
<script language="javascript">alert('Data berhasil di simpan');
document.location = 'chat akademik_dosen.php'
</script> 
<?php
	}else { echo "Data gagal dimasukkan ke dalam database"; }
?>