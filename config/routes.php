<?php

if (@$_GET['page'] == '') {
    include "views/beranda.php";
}
//data user
else if (@$_GET['page'] == 'user') {
    @$aksi = $_GET['aksi'];
    if ($aksi) {
        if ($aksi == 'add') {
            include "views/user/adduser.php";
        } else if ($aksi == 'edit') {
            include "views/user/edituser.php";
        } else if ($aksi == 'delete') {
            include "views/user/prosesdeleteuser.php";
        }
    } else {
    include "views/user/user.php";
    }
} 
//data pegawai
else if (@$_GET['page'] == 'pegawai') {
    @$aksi = $_GET['aksi'];
    if ($aksi) {
        if ($aksi == 'add') {
            include "views/pegawai/addpegawai.php";
        } else if ($aksi == 'edit') {
            include "views/pegawai/editpegawai.php";
        } else if ($aksi == 'delete') {
            include "views/pegawai/prosesdeletepegawai.php";
        }
    } else {
        include "views/pegawai/pegawai.php";
    }
}
//data buku
else if (@$_GET['page'] == 'buku') {
    @$aksi = $_GET['aksi'];
    if ($aksi) {
        if ($aksi == 'add') {
            include "views/buku/addbuku.php";
        } else if ($aksi == 'edit') {
            include "views/buku/editbuku.php";
        } else if ($aksi == 'delete') {
            include "views/buku/prosesdeletebuku.php";
        }
    } else {
        include "views/buku/buku.php";
    }
} 
//data anggota
else if (@$_GET['page'] == 'anggota') {
    @$aksi = $_GET['aksi'];
    if ($aksi) {
        if ($aksi == 'add') {
            include "views/anggota/addanggota.php";
        } else if ($aksi == 'edit') {
            include "views/anggota/editanggota.php";
        } else if ($aksi == 'delete') {
            include "views/anggota/prosesdeleteanggota.php";
        }
    } else {
        include "views/anggota/anggota.php";
    }
} 
//data transaksi
else if (@$_GET['page'] == 'transaksi') {
    @$aksi = $_GET['aksi'];
    if ($aksi) {
        if ($aksi == 'add') {
            include "views/transaksi/addtransaksi.php";
        } else if ($aksi == 'edit') {
            include "views/transaksi/edittransaksi.php";
        } else if ($aksi == 'delete') {
            include "views/transaksi/prosesdeletetransaksi.php";
        }
    } else {
        include "views/transaksi/transaksi.php";
    }
}
