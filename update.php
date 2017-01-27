<?php
include('koneksi.php'); 
//tangkap data dari form
$id_mhs = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$no_hp= $_POST['no_hp'];
$id_kelas = $_POST['kelas'];
 
//update data di database sesuai user_id
$query = mysql_query("update data_mhs set npm='$npm', nama='$nama', alamat='$alamat', no_hp='$no_hp', id_kelas='$id_kelas' where id_mhs='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}
 ?>