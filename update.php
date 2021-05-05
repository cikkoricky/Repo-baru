<?php
include "database.php";

$kode = $_REQUEST['kode'];
$nama = $_REQUEST['nama'];
$harga = $_REQUEST['harga'];
$jumblah = $_REQUEST['jumblah'];

mysqli_query($db,"update produk set nama = '$nama', jumblah = '$jumblah', harga = '$harga' where kode = '$kode'");
header("location:barang.php");
?>