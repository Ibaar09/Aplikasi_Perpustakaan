<?php 
    include "../../config/koneksi.php";

    $id_pegawai         = $_POST['id_pegawai'];
    $username           = $_POST['username'];
    $password           = $_POST['password'];
    $level              = $_POST['level'];
    $dibuatpada         = $_POST['dibuatpada'];


    $sql = "INSERT INTO tabel_user 
    (
        id_pegawai,
        username,
        password,
        level,
        dibuatpada
    ) 
    VALUES 
    (
        '".$id_pegawai."',
        '".$username."',
        '".$password."',
        '".$level."',
        '".$dibuatpada."'
    )";
    
    $db->query($sql);

//echo '$sql';
   header('Location: ../../beranda.php?page=user');

?>

