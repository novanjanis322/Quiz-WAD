
<?php
include('connector.php');
$makanan = ($_POST["makanan"]);
$minuman = ($_POST["minuman"]);

$biaya = 0;
global $biaya;
if (isset($_POST["makanan"])){
    $query_makan = mysqli_query($conn, "SELECT * FROM tb_menu WHERE menu='$makanan'");
    $makan = mysqli_fetch_assoc($query_makan);
    if ($makan){
        $biaya+=$makan['harga'];
        $stokminus=$makan['stok']-1;
        $updatestok= mysqli_query($conn, "UPDATE tb_menu SET stok='$stokminus' WHERE menu='$makanan'");
    }
}
if (isset($_POST["minuman"])){
    $query_minum = mysqli_query($conn, "SELECT * FROM tb_menu WHERE menu='$minuman'");
    $minum = mysqli_fetch_array($query_minum);
    if ($minum){
        $biaya+=$minum['harga'];
        $stokminus=$minum['stok']-1;
        $updatestok= mysqli_query($conn, "UPDATE tb_menu SET stok='$stokminus' WHERE menu='$minuman'");
    }  
}

$nama = ($_POST["nama"]);
$no_hp = ($_POST["no_hp"]);
$no_meja += ($_POST["no_meja"]);
$metode_bayar = ($_POST["metode_bayar"]);
$metode_makan = ($_POST["metode_makan"]);
$status_order = 'Process';
$query = "INSERT INTO tb_order (nama, no_hp, no_meja, makanan, minuman, biaya, metode_bayar, metode_makan, status_order) VALUES ('$nama', '$no_hp', '$no_meja', '$makanan', '$minuman', '$biaya', '$metode_bayar', '$metode_makan', '$status_order' )";
$result = mysqli_query($conn, $query);

if ($result) {
    header('Location: ../index.php?page=dashboarduser');
} else {
    echo 'Gagal';
}
?>
