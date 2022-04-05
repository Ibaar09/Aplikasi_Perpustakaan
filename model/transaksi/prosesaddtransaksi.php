<?php 
    include "../../config/koneksi.php";

   
    $tanggal_transaksi       = $_POST['tanggal_transaksi'];
    $id_anggota              = $_POST['id_anggota'];
    $id_pegawai              = $_POST['id_pegawai'];
    $id_buku                 = $_POST['id_buku'];
    $quantity                = $_POST['quantity'];
    $jenis_transaksi         = $_POST['jenis_transaksi'];




    $sql = "INSERT INTO tabel_transaksi 
    (
        tanggal_transaksi,
        id_anggota,
        id_pegawai,
        id_buku,
        quantity,
        jenis_transaksi
    ) 
    VALUES 
    (
        '".$tanggal_transaksi."',
        '".$id_anggota."',
        '".$id_pegawai."',
        '".$id_buku."',
        '".$quantity."',
        '".$jenis_transaksi."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=transaksi');

?>

