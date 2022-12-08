<?php
    if (isset($_COOKIE['remember_admin'])){
        // unset($_COOKIE['nama_admin']);
        // unset($_COOKIE['no_hp']);
        unset($_COOKIE['remember']);
        // setcookie('nama_admin', '', time()-3600,'/');
        // setcookie('no_hp_admin', '', time()-3600,'/');
        setcookie('remember_admin', '', time()-3600,'/');
        unset($_SESSION['nama_admin']);
        unset($_SESSION['no_hp_admin']);
        header('location: index.php');
    }
    else{
        unset($_SESSION['nama_admin']);
        unset($_SESSION['no_hp_admin']);
        unset($_SESSION['email_admin']);
        unset($_SESSION['password_admin']);
        // unset($_COOKIE['nama_admin']);
        // unset($_COOKIE['email_admin']);
        // unset($_COOKIE['password_admin']);
        // unset($_COOKIE['no_hp_admin']);
        // unset($_COOKIE['remember_admin']);
        // setcookie('nama_admin', '', time()-3600,'/');
        // setcookie('email_admin', '', time()-3600,'/');
        // setcookie('password_admin', '', time()-3600,'/');
        // setcookie('no_hp_admin', '', time()-3600,'/');
        // setcookie('remember_admin', '', time()-3600,'/');
        session_destroy();
        header('location: index.php');
    }
    
    
