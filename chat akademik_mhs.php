<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include('koneksi.php');
session_start ();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>tes2</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1215213919_0) return;
                              window.mm_menu_1215213919_0 = new Menu("root",106,24,"Times New Roman, Times, serif",18,"#CCCCCC","#FFFFFF","#0A2CFD","#0A2CFD","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_1215213919_0.addMenuItem("Tulis&nbsp;Pesan","location='chat akademik.php'");
  mm_menu_1215213919_0.addMenuItem("Lihat&nbsp;Pesan","location='tampil_mhs.php'");
   mm_menu_1215213919_0.hideOnMouseOut=true;
   mm_menu_1215213919_0.bgColor='#555555';
   mm_menu_1215213919_0.menuBorder=1;
   mm_menu_1215213919_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1215213919_0.menuBorderBgColor='#777777';
window.mm_menu_0104121425_0 = new Menu("root",106,24,"Times New Roman, Times, serif",18,"#CCCCCC","#FFFFFF","#0A2CFD","#0A2CFD","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_0104121425_0.addMenuItem("Tulis&nbsp;Pesan");
  mm_menu_0104121425_0.addMenuItem("Lihat&nbsp;Pesan");
   mm_menu_0104121425_0.hideOnMouseOut=true;
   mm_menu_0104121425_0.bgColor='#555555';
   mm_menu_0104121425_0.menuBorder=1;
   mm_menu_0104121425_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0104121425_0.menuBorderBgColor='#777777';

mm_menu_0104121425_0.writeMenus();
} // mmLoadMenus()



function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.style5 {
	font-size: 24px;
	color: #FFFFFF;
}
-->
</style>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body bgcolor="#FFFFFF" onload="MM_preloadImages('images/proyek_04coper.gif','images/proyek_06coper.gif','images/logit1.gif')">
<script language="JavaScript1.2">mmLoadMenus();</script>
<!-- Save for Web Slices (tes2.psd) -->
<table id="Table_01" width="1025" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="15"><img id="proyek_01" src="images/proyek_01.gif" width="1024" height="36" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="36" alt="" /></td>
  </tr>
  <tr>
    <td colspan="15"><img id="proyek_02" src="images/proyek_02.gif" width="1024" height="32" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="32" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="4"><img id="proyek_03" src="images/proyek_03.gif" width="170" height="183" alt="" /></td>
    <td colspan="4"><a href="menu_mhs.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image58','','images/proyek_04coper.gif',1)"><img src="images/proyek_04.gif" name="Image58" width="168" height="36" border="0" id="Image58" /></a></td>
    <td rowspan="3"><img id="proyek_05" src="images/proyek_05.gif" width="3" height="85" alt="" /></td>
    <td rowspan="2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image59','','images/proyek_06coper.gif',1)"></a><a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image60','','images/logit1.gif',1)"><img src="images/logut.gif" name="Image60" width="164" height="37" border="0" id="Image60" /></a></td>
    <td rowspan="3"><img id="proyek_07" src="images/proyek_07.gif" width="4" height="85" alt="" /></td>
    <td><img id="proyek_08" src="images/proyek_08.gif" width="167" height="36" alt="" /></td>
    <td colspan="2"><img id="proyek_09" src="images/proyek_09.gif" width="168" height="36" alt="" /></td>
    <td colspan="2" rowspan="3"><img id="proyek_10" src="images/proyek_10.gif" width="180" height="85" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="36" alt="" /></td>
  </tr>
  <tr>
    <td colspan="4" rowspan="2"><img id="proyek_11" src="images/proyek_11.gif" width="168" height="49" alt="" /></td>
    <td colspan="3" rowspan="2"><img id="proyek_12" src="images/proyek_12.gif" width="335" height="49" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>
  </tr>
  <tr>
    <td><img id="proyek_13" src="images/proyek_13.gif" width="164" height="48" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="48" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img id="proyek_14" src="images/proyek_14.gif" width="56" height="98" alt="" /></td>
    <td colspan="6" rowspan="7" valign="top" background="images/proyek_15.gif">
	  <?php 
	     $data     = mysql_query("SELECT * FROM user us inner join data_mahasiswa ds on us.npm=ds.npm WHERE username= '$_SESSION[username]'");
		 $hasil     = mysql_fetch_array($data); ?>
		  <?php 
	     $data1     = mysql_query("SELECT * FROM user us inner join data_dosen dm on us.id_kelas=dm.id_kelas WHERE username= '$_SESSION[username]'");
		 $hasil1     = mysql_fetch_array($data1); ?>
        <h1 align="center" class="style5">Pesan</h1>
		<form name='chat' action='pesan_mhs.php' method="post" enctype="multipart/form-data">
		<input type="hidden" name="npm" value="<?php echo $hasil['npm']; ?> " />Npm	:
		<input type="text" name="npm1" value="<?php echo $hasil['npm']; ?> " disabled="disabled" />
		Dosen Wali	:
		<input type="text" name="nim" value="<?php echo $hasil1['nama']; ?> " disabled="disabled" />
		<input type="text" name="nim1" value="<?php echo $hasil1['nim']; ?> "  />	
		<input type="hidden" name="id_kelas" value="<?php echo $hasil['id_kelas']; ?> "  />	
			
        <textarea name="pesan" cols="70" rows="10" id="pesan" onfocus="CountMax();"
        onclick="CountMax();" onchange="CountMax();" onkeydown="CountMax();"
        onkeyup="CountMax();"  maxlength="1500"></textarea>
		<input type="file" name="upload"  />
		<input type="submit" name="TbSimpan" value="Kirim Pesan" />	</form>
	</td>
    <td rowspan="8"><img id="proyek_16" src="images/proyek_16.gif" width="20" height="615" alt="" /></td>
    <td rowspan="3"><img id="proyek_17" src="images/proyek_17.gif" width="168" height="173" alt="" /></td>
    <td rowspan="8"><img id="proyek_18" src="images/proyek_18.gif" width="12" height="615" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="98" alt="" /></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3"><img id="proyek_19" src="images/proyek_19.gif" width="30" height="217" alt="" /></td>
    <td colspan="2"><img src="images/kontak.gif" width="159" height="39" /></td>
    <td colspan="2" rowspan="3"><img id="proyek_21" src="images/proyek_21.gif" width="37" height="217" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="39" alt="" /></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2"><img id="proyek_22" src="images/proyek_22.gif" width="159" height="178" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="36" alt="" /></td>
  </tr>
  <tr>
    <td rowspan="2"><img id="proyek_23" src="images/proyek_23.gif" width="168" height="181" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="142" alt="" /></td>
  </tr>
  <tr>
    <td rowspan="4"><img id="proyek_24" src="images/proyek_24.gif" width="23" height="300" alt="" /></td>
    <td colspan="4"><img src="images/tulis pesan.jpg" width="172" height="39" /></td>
    <td rowspan="4"><img id="proyek_26" src="images/proyek_26.gif" width="31" height="300" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="39" alt="" /></td>
  </tr>
  <tr>
    <td colspan="4" rowspan="3"><img id="proyek_27" src="images/proyek_27.gif" width="172" height="261" alt="" /></td>
    <td><img id="proyek_28" src="images/proyek_28.gif" width="168" height="212" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="212" alt="" /></td>
  </tr>
  <tr>
    <td rowspan="2"><img id="proyek_29" src="images/proyek_29.gif" width="168" height="49" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="31" alt="" /></td>
  </tr>
  <tr>
    <td colspan="6"><img id="proyek_30" src="images/proyek_30.gif" width="598" height="18" alt="" /></td>
    <td><img src="images/spacer.gif" width="1" height="18" alt="" /></td>
  </tr>
  <tr>
    <td><img src="images/spacer.gif" width="23" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="7" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="140" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="19" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="6" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="31" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="112" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="3" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="164" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="4" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="167" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="148" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="20" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="168" height="1" alt="" /></td>
    <td><img src="images/spacer.gif" width="12" height="1" alt="" /></td>
    <td></td>
  </tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>