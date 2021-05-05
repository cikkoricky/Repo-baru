<?php
include "database.php";
$kode = $_REQUEST['kode'];
$nama = $_REQUEST['nama'];
$harga = $_REQUEST['harga'];
$jumblah = $_REQUEST['jumblah'];
if($kode<>""&&$nama<>"")
{
    mysqli_query($db,"insert into produk values('$kode','$nama','$harga','$jumblah')");
}
header("location:barang.php");
?>