<?php 
    include "../../config/koneksi.php";

   
    $id_buku            = $_POST['id_buku'];
    $isbn               = $_POST['isbn'];
    $judul              = $_POST['judul'];
    $penulis            = $_POST['penulis'];
    $penerbit           = $_POST['penerbit'];
    $tahun_terbit       = $_POST['tahun_terbit'];


    $sql = "Update tabel_buku set
        isbn            = '".$isbn."',
        judul           = '".$judul."',
        penulis         = '".$penulis."',
        penerbit        = '".$penerbit."',
        tahun_terbit    = '".$tahun_terbit."'
        
        where id_buku   = '".$id_buku."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>