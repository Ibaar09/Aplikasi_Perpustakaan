<?php 
    include "../../config/koneksi.php";

   
    $isbn               = $_POST['isbn'];
    $judul              = $_POST['judul'];
    $penulis            = $_POST['penulis'];
    $penerbit           = $_POST['penerbit'];
    $tahun_terbit       = $_POST['tahun_terbit'];


    $sql = "INSERT INTO tabel_buku 
    (
        isbn,
        judul,
        penulis,
        penerbit,
        tahun_terbit
    ) 
    VALUES 
    (
        '".$isbn."',
        '".$judul."',
        '".$penulis."',
        '".$penerbit."',
        '".$tahun_terbit."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>

