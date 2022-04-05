<?php 
    include "../../config/koneksi.php";

   
    $id_anggota         = $_POST['id_anggota'];
    $nama_anggota       = $_POST['nama_anggota'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];


    $sql = "update tabel_anggota set
    
        id_anggota      = '".$id_anggota."',
        nama_anggota    = '".$nama_anggota."',
        jenis_kelamin   = '".$jenis_kelamin."',
        alamat          = '".$alamat."',
        no_hp           = '".$no_hp."'

        where id_anggota = '".$id_anggota."'
        ";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=anggota');

?>

