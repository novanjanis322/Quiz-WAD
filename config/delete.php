<?php
    include('connector.php');
    $id=$_POST['id'];


    $query = "DELETE FROM tb_order WHERE id = $id";
    $result = mysqli_query($conn, $query);

    header('Location: ../index.php?page=dashboardadmin');

?>

