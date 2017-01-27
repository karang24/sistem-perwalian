 <?php
if($_POST){
 $conn = mysql_connect("localhost","root","");
mysql_select_db("proyek",$conn);
//menyimpan ke table product
$sql = "insert into user values ('{$_POST['username']}','{$_POST['password']}')";
mysql_query($sql) or die('Gagal menyimpan data');
 //mencari id produk
$sql = "select max(id) as last_id from proyeks ";
$hasil = mysql_query($sql);
$row = mysql_fetch_array($hasil);
$lastId = $row['last_id'];
//menyimpan data buku ke table buku
$sql = "insert into data_mhs values ('$lastId','{$_POST['id_mhs']}','{$_POST['npm']}','{$_POST['nama']}',{$_POST['alamat')},'{$_POST['no_hp']}";
 mysql_query($sql) or die('Gagal menyimpan data buku');
echo 'data tersimpan';
}

    ?>
