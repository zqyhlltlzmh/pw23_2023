<?php 
// Memanggil file dbkoneksi.php yang berisi koneksi ke database
require_once '../dbkoneksi.php';
$_id = $_GET['id'];
$sql = "DELETE FROM pembelian WHERE id = ?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);

header('location:list_pembelian.php');
?>
