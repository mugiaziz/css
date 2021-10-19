<?php
include "koneksi.php";
echo "<center><h1>Form Tambah Data Pegawai</h1><hr>";
echo "<form method='POST' action='insert.php' enctype='multipart/form-data'>";
echo "<table border=1>
<tr>
<td>Nama </td>
<td>:</td>
<td><input type='text' name='nama'></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>
<input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki
<input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan
</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type='text' name='alamat'></td>
</tr>
<tr>
<td>Nomor Telepon</td>
<td>:</td>
<td><input type='number' name='telepon'></td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td>
<select name='agama'>";
$query = mysql_query("SELECT * FROM agama");
while($a=mysql_fetch_array($query)){
echo "<option value='$a[id_agama]'> $a[agama]</option>";
}
echo "</select>
</td>
</tr>
<tr>
<td>Penempatan</td>
<td>:</td>
<td>
<select name='penempatan'>";
$query1 = mysql_query("SELECT * FROM penempatan");
while($a=mysql_fetch_array($query1)){
echo "<option value='$a[id_penempatan]'> $a[penempatan]</option>";
}
echo "</select>
</td>
</tr>
<tr>
<td colspan=3 align='center'><input type='file' name='file'>
<input type='submit' name='upload' value='Upload' ></td>
</tr>
<tr>
<td colspan=3 align='center'><input type='submit' value='Simpan'></td>
</tr>
</table></form></center>";
?>