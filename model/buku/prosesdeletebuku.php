<?php 
    include "../../config/koneksi.php";

   
    $id = $_GET['id'];


    $sql = "DELETE from tabel_buku where id_buku = $id";
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>