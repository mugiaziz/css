<?php
include "koneksi.php";
echo "<center><h1>Daftar Pegawai</h1></center><hr>";
echo "<center><form method='POST'
action='tambah.php'><input type='submit' value='Tambah Data'></form></center>";
echo "<table border=1 align='center'><tr><th>no</th>
<th>Nama Pegawai</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Nomor Telepon</th>
<th>Agama</th>
<th>Penempatan</th>
<th>Aksi</th></tr>";
$no=1;
$view=mysql_query("SELECT * FROM pegawai");
while($a=mysql_fetch_array($view)){
	$ag = mysql_fetch_array(mysql_query("SELECT * FROM agama WHERE id_agama='$a[agama]'"));
	$pl = mysql_fetch_array(mysql_query("SELECT * FROM penempatan WHERE id_penempatan='$a[penempatan]'"));
echo "<tr>
<td>$no</td>
<td>$a[nama]</td>
<td>$a[jenis_kelamin]</td>
<td>$a[alamat]</td>
<td>$a[no_telepon]</td>
<td>$ag[agama]</td>
<td>$pl[penempatan]</td>
<td>
<a href='edit.php?id=$a[id_pegawai]'>Edit</a>
<a href='hapus.php?id=$a[id_pegawai]'>Hapus</a></td>";
$no++;
}
echo "</tr></table>";
?>