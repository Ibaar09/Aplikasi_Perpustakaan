<?php 
    include "../../config/koneksi.php";

    $id_buku       = $_POST['id_buku'];
    $isbn          = $_POST['isbn'];
    $nama_buku     = $_POST['nama_buku'];
    $penulis       = $_POST['penulis'];
    $penerbit      = $_POST['penerbit'];
    $tahun_terbit  = $_POST['tahun_terbit'];


    $sql = "update tabel_buku set

  
    isbn           = '".$isbn."',
    nama_buku      = '".$nama_buku."',
    penulis        = '".$penulis."',
    penerbit       = '".$penerbit."',
    tahun_terbit   = '".$tahun_terbit."'

        where id_buku = '".$id_buku."'
        ";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>

