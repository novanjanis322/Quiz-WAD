<?php

include 'connector.php';

$update_status=$_POST['edit'];
$id=$_POST['id'];
$query = mysqli_query($conn, "UPDATE tb_order SET status_order = '$update_status' WHERE id = '$id'");
header('Location: ../index.php?page=dashboardadmin');

    // $displaynama=$_POST['displaynama'];
    // $displayemail=$_POST['displayemail'];
    // $displaypassword=$_POST['displaypassword'];
    // $displayconfirmpassword=$_POST['displayconfirmpassword'];
    // $displaynomorhp=$_POST['displaynomorhp'];
    // $navwarna = $_POST['navwarna'];

    // if(!empty($displaypassword) && !empty ($displayconfirmpassword)) {
    //     if ($displaypassword == $displayconfirmpassword) {
    //         $query = "UPDATE user_novan SET nama = '$displaynama', email = '$displayemail', password = '$displaypassword', no_hp = '$displaynomorhp' WHERE email = '$displayemail'";
    //         $result = mysqli_query($conn_user, $query);

    //         if ($query) {
    //             setcookie('nama', $displaynama, time() + 86400*30, '/');
    //             setcookie('email', $displayemail, time() + 86400*30, '/');
    //             setcookie('password', $displaypassword, time() + 86400*30, '/');
    //             setcookie('no_hp', $displaynomorhp, time() + 86400*30, '/');
    //             setcookie('navwarna', $navwarna, time() +  86400*30, '/' );

    //             header('Location: ../index.php');
    //         }else {
    //             echo 'Gagal';
    //         }
    //     } else {
    //         echo 'Password tidak sama';
    //     }
    // } else {
    //     $query = "UPDATE user_novan SET nama = '$displaynama', email = '$displayemail', no_hp = '$displaynomorhp' WHERE email = '$displayemail'";
    //     $result = mysqli_query($conn_user, $query);

    //     if ($query) {
    //         setcookie('nama', $displaynama, time() + 86400*30, '/');
    //         setcookie('email', $displayemail, time() + 86400*30, '/');
    //         setcookie('no_hp', $displaynomorhp, time() + 86400*30, '/');
    //         setcookie('navwarna', $navwarna, time() +  86400*30, '/' );


    //         header('Location: ../index.php');
    //     }else {
    //         echo 'Gagal';
    //     }
    // }
    ?>
