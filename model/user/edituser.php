<?php 
    include "../../config/koneksi.php";

    $id_user      = $_POST['id_user'];
    $id_pegawai   = $_POST['id_pegawai'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $level        = $_POST['level'];
   

    $sql = "update tabel_user set

  
    id_pegawai   = '".$id_pegawai."',
    username     = '".$username."',
    password     = '".$password."',
    level        = '".$level."'
   

        where id_user = '".$id_user."'
        ";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=user');

?>

