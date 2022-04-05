<?php 
    include "../../config/koneksi.php";

   
    $id = $_GET['id'];


    $sql = "DELETE from tabel_pegawai where id_pegawai = $id";
    $db->query($sql);


    header('Location: ../../beranda.php?page=pegawai');

?>

