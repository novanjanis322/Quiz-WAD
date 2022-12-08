<?php
    include "connector.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($conn, "SELECT * from tb_admin where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $ambildata=mysqli_fetch_assoc($query);
        if (isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember_admin', $remember, time()+86400*30, '/');
        }
        session_start();
        $_SESSION["email_admin"] = $email;
        $_SESSION["password_admin"] = $password;
        $_SESSION["nama_admin"] = $ambildata['nama'];
        $_SESSION["no_hp_admin"] = $ambildata['no_hp'];
        ini_set('session.gc_maxlifetime', 86400);
        // setcookie('email_admin', $email, time()+86400*30, '/');
        // setcookie('nama_admin', $ambildata['nama'], time()+86400*30, '/');
        // setcookie('password_admin', $ambildata['password'], time()+86400*30, '/');
        // setcookie('no_hp_admin', $ambildata['no_hp'], time()+86400*30, '/');
        header('location: ../index.php');

    }else{
        echo 'wrong email/password';
    }
?>

