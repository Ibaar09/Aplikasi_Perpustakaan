<?php
    include "../../config/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];





    if( empty($username) == true OR empty($password) == true )  {
        $errors[] = '*Username/Password field is required';
    }
    else {
        // if username exist
        $sql = "SELECT * FROM tabel_user WHERE username = '$username'";
        $query = $db->query($sql);
        if( $query->num_rows > 0 ) {
                // check username and password
                $password = $password;

                $sql = "SELECT * FROM tabel_user WHERE username = '$username'
                AND password = '$password'";
                $query = $db->query($sql);
                $result = $query->fetch_array();
                
                $db->close();

                if($query->num_rows == 1) {
                        $_SEESION['logged_in'] = true;
                        $_SEESION['user_id'] = $result['id_user'];
                        
                        header('location: ../../beranda.php');
                        exit();
                }
                else {
                    header('location ../../index.php');
                }
        }
        else {
            header('location: ../../index.php');
        }
    }
        





