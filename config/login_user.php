<?php
    include "connector.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($conn, "SELECT * from tb_user where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $ambildata=mysqli_fetch_assoc($query);
        if (isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+86400*30, '/');
        }
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["nama"] = $ambildata['nama'];
        $_SESSION["no_hp"] = $ambildata['no_hp'];
        ini_set('session.gc_maxlifetime', 86400);
        // setcookie('email', $email, time()+86400*30, '/');
        // setcookie('nama', $ambildata['nama'], time()+86400*30, '/');
        // setcookie('password', $ambildata['password'], time()+86400*30, '/');
        // setcookie('no_hp', $ambildata['no_hp'], time()+86400*30, '/');
        header('location: ../index.php');

    }else{
        echo 'wrong email/password';
    }
?>

