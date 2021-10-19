<?php
include "koneksi.php";
$nm = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$almt = $_POST['alamat'];
$tlp = $_POST['telepon'];
$agm = $_POST['agama'];
$tmp = $_POST['penempatan'];
$insert = mysql_query("INSERT INTO
pegawai(nama,jenis_kelamin,alamat,no_telepon,agama,penempatan)
VALUES('$nm','$jk','$almt','$tlp','$agm','$tmp')");
if($insert){
echo "<center>Data Berhasil disimpan<br><a href='view.php'>Kembali ke
View</a></center>";
}
else{
echo "<center>Data gagal disimpan<br><a href='tambah.php'>Kembali ke
Form</a></center>";
}
?>