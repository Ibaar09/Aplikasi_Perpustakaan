<?php 
    include "../../config/koneksi.php";

   
    $id_anggota         = $_POST['id_anggota'];
    $nama_anggota       = $_POST['nama_anggota'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];


    $sql = "Update tabel_anggota set
        nama_anggota    = '".$nama_anggota."',
        jenis_kelamin   = '".$jenis_kelamin."',
        alamat          = '".$alamat."',
        no_hp           = '".$no_hp."'
        
        where id_anggota = '".$id_anggota."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=anggota');

?>

