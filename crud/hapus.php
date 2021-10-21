<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE
id_pegawai='$id'"));
$delete = mysql_query("DELETE FROM pegawai WHERE id_pegawai='$id'");
if($delete){
echo "<center>Data <b>$hapus[nama]</b> Berhasil di hapus<br><a
href='view.php'>Kembali ke View</a></center>";
}
else{
echo "<center>Data $hapus[nama] gagal di hapus<br><a
href='view.php'>Kembali ke View</a></center>";
}
?>