<?php 
    include "../../config/koneksi.php";

   
    $id = $_GET['id'];


    $sql = "DELETE from tabel_transaksi where id_transaksi = $id";
    $db->query($sql);


    header('Location: ../../beranda.php?page=transaksi');

?>

