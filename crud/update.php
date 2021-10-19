<?php
include "koneksi.php";
$id = $_POST['id'];
$nm = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$almt = $_POST['alamat'];
$tlp = $_POST['telepon'];
$agm = $_POST['agama'];
$tmp = $_POST['penempatan'];
$update = mysql_query("UPDATE pegawai SET
nama='$nm',jenis_kelamin='$jk',alamat='$almt',no_telepon='$tlp',agama='$agm',penempatan='$tmp' WHERE
id_pegawai='$id'");
if($update){
echo "<center>Data Berhasil di Update<br><a href='view.php'>Kembali ke
View</a></center>";
}
else{
echo "<center>Data gagal di Update<br><a href='edit.php'>Kembali ke
Form</a></center>";
}
?>