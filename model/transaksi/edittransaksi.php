<?php 
    include "../../config/koneksi.php";

    $id_transaksi       = $_POST['id_transaksi'];
    $tanggal_transaksi  = $_POST['tanggal_transaksi'];
    $id_anggota         = $_POST['id_anggota'];
    $id_pegawai         = $_POST['id_pegawai'];
    $id_buku            = $_POST['id_buku'];
    $quantity           = $_POST['quantity'];
    $jenis_transaksi    = $_POST['jenis_transaksi'];



    $sql = "update tabel_transaksi set

  
    tanggal_transaksi = '".$tanggal_transaksi."',
    id_anggota        = '".$id_anggota."',
    id_pegawai        = '".$id_pegawai."',
    id_buku           = '".$id_buku."',
    quantity          = '".$quantity."',
    jenis_transaksi   = '".$jenis_transaksi."'

        where id_transaksi = '".$id_transaksi."'
        ";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=transaksi');

?>

