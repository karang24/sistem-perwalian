 <html>
<head>
<title>
DRZ Chat 1.0
</title>
<script>S
var ajaxku = buatAjax();
var tnama = 0;
var pesanakhir = 0;
var timer;
function taruhNama(){
    if(tnama==0){
        document.getElementById("nama").disabled = "true";
        tnama = 1;
    }else{
        document.getElementById("nama").disabled = "";
        tnama = 0;
    }
    ambilPesan();
}
function buatAjax(){
    if(window.XMLHttpRequest){
        return new XMLHttpRequest();
    }else if(window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}
function ambilPesan(){
    namaku = document.getElementById("nama").value
    if(ajaxku.readyState == 4 || ajaxku.readyState == 0){
        ajaxku.open("GET","ambilchat.php?akhir="+pesanakhir+"&nama="+namaku+"&sid="+Math.random(),true);
        ajaxku.onreadystatechange = aturAmbilPesan;
        ajaxku.send(null);
    }
}
function aturAmbilPesan(){
    if(ajaxku.readyState == 4){
        var chat_div = document.getElementById("div_chat");
        var data = eval("("+ajaxku.responseText+")");
        for(i=0;i<data.messages.pesan.length;i++){
            chat_div.innerHTML += "<font color=red>"+data.messages.pesan[i].nama+"</font> ";
            chat_div.innerHTML += "<font size=1>("+data.messages.pesan[i].waktu+")</font> "; chat_div.innerHTML += " : "+data.messages.pesan[i].teks+"<br>"; chat_div.scrollTop = chat_div.scrollHeight; pesanakhir = data.messages.pesan[i].id; } } timer = setTimeout("ambilPesan()",1000); } function kirimPesan(){ pesannya = document.getElementById("pesan").value namaku = document.getElementById("nama").value if(pesannya != "" && document.getElementById("nama").value !=""){ ajaxku.open("GET","ambilchat.php?akhir="+pesanakhir+"&nama="+namaku+"&pesan="+pesannya+"&sid="+Math.random(),true); ajaxku.onreadystatechange = aturAmbilPesan; ajaxku.send(null); document.getElementById("pesan").value = ""; }else{ alert("Nama atau pesan masih kosong"); } } function aturKirimPesan(){ clearInterval(timer); ambilPesan(); } function blockSubmit() { kirimPesan(); return false; } </script> </head> <body> Nama : <input type=text name=nama id=nama> <input type=button value=login id=tmbl_login onclick=taruhNama()><p> <div id="div_chat" style="height: 300px; width: 500px; overflow: auto; background-color: lightyellow; border: 1px solid #555555;"> </div> <form onSubmit="return blockSubmit();"> Pesan : <input type=text name=pesan id=pesan size=50> <input type=button value="kirim" onClick="kirimPesan()"> </form> </body> </html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("proyek");
$nama = $_GET['nama'];
$pesan = $_GET['pesan'];
$waktu = date("H:i");
$akhir = $_GET['akhir'];
$json = '{"messages": {';
if($akhir==0){
    $nomor = mysql_query("select nomor from chat order by nomor desc limit 1");
    $n = mysql_fetch_array($nomor);
    $no = $n['nomor'] + 1;
    $json .= '"pesan":[ {';
    $json .= '"id":"'.$no.'",
              "nama":"Admin",
              "teks":"Selamat datang di chatting room",
              "waktu":"'.$waktu.'"
              }]';
    $masuk = mysql_query("insert into chat values(null,'Admin','$nama bergabung dalam chat','$waktu')");
}else{
    if($pesan){
        $masuk = mysql_query("insert into chat values(null,'$nama','$pesan','$waktu')");
    }
    $query = mysql_query("select * from chat where nomor > $akhir");
    $json .= '"pesan":[ ';
    while($x = mysql_fetch_array($query)){
        $json .= '{';
        $json .= '"id":"'.$x['nomor'].'",
                  "nama":"'.htmlspecialchars($x['nama']).'",
                  "teks":"'.htmlspecialchars($x['pesan']).'",
                  "waktu":"'.$x['waktu'].'"
                  },';
    }
    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
}
$json .= '}}';
echo $json;
?>