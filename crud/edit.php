<?php
include "koneksi.php";
$id = $_GET['id'];
$edit = mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$id'"));
echo "<center><h1>Form Edit Data Pegawai</h1><hr>";
echo "<form method='POST' action='update.php'>";
echo "<input type='hidden' name='id' value='$id'>
<table border=1>
<tr><td>Nama Karyawan</td>
<td>:</td>
<td><input type='text' name='nama' value='$edit[nama]'></td></tr>
<tr><td>Jenis Kelamin</td>
<td>:</td><td>";
if($edit['jenis_kelamin']=="Laki-laki"){
echo "<input type='radio' name='jenis_kelamin' value='Laki-laki' checked>Laki-laki
<input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan";
}
else{
echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki
<input type='radio' name='jenis_kelamin' value='Perempuan' checked>Perempuan";
}
echo "</td></tr>
<tr><td>Alamat</td><td>:</td><td><input type='text' name='alamat' value='$edit[alamat]'></td></tr>
<tr><td>Nomor Telepon</td><td>:</td><td><input type='number' name='telepon' value='$edit[no_telepon]'></td></tr>
<tr><td>Agama</td>
<td>:</td>
<td><select name='agama'>";
$tampil=mysql_query("SELECT * FROM agama ");
while($ag=mysql_fetch_array($tampil)){
 if ($edit[agama]==$ag[id_agama]){
 echo "<option value=$ag[id_agama] selected>$ag[agama]</option>";
 }
 else{
 echo "<option value=$ag[id_agama]>$ag[agama]</option>";
 }
}
echo "</select></td></tr>
<tr><td>Penempatan</td>
<td>:</td>
<td><select name='penempatan'>";
$tampil1=mysql_query("SELECT * FROM penempatan ");
while($pl=mysql_fetch_array($tampil1)){
 if ($edit[penempatan]==$ag[id_penempatan]){
 echo "<option value=$pl[id_penempatan] selected>$pl[penempatan]</option>";
 }
 else{
 echo "<option value=$pl[id_penempatan]>$pl[penempatan]</option>";
 }
}
echo "</select></td></tr>
<tr><td colspan=3 align='center'><input type='submit' value='Edit'></td></tr>
</table></form></center>";
?>