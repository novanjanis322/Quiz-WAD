<?php
    if (isset($_COOKIE['remember'])){
        // session_destroy();
        unset($_SESSION['nama']);
        unset($_SESSION['no_hp']);
        unset($_COOKIE['remember']);
        setcookie('remember', '', time()-3600,'/');
        header('location: index.php');
    }
    else{
        session_destroy();
        unset($_SESSION['nama']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['no_hp']);
        // unset($_COOKIE['remember']);
        // setcookie('remember', '', time()-3600,'/');

        header('location:index.php');
    }

    
    
