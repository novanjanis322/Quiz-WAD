<!doctype html>
<html lang="en">
<?php
include('config/connector.php');
$query1 = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='Process'");
$query2 = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='Selesai'");
$baris1 = mysqli_num_rows($query1);
$baris2 = mysqli_num_rows($query2);
$progress = 0;
$totalpendapatan = 0;
if ($baris1 == 0) {
  $progress += 100;
} elseif ($baris2 == 0) {
  '';
} else {
  $a = $baris1 + $baris2;
  $b = $baris2 / $a * 100;
  $progress += $b;
}
if ($query2) {
  while ($pendapatan = mysqli_fetch_array($query2)) {
    $totalpendapatan += $pendapatan['biaya'];
  }
}
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard User</title>
  <link rel="stylesheet" href="RestoranPon_home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="font-monospace" id="warna">
  <center>
    <h1 style="margin-top: 3%;">Dashboard Admin <?= $_SESSION['nama_admin']; ?></h1>
  </center>
  <section id="home">
    <div class="container text-center">
      <div class="row mt-5">
        <div class="col">
          <h1>Kitchen Progress</h1>
        </div>
        <div class="col mt-3">
          <div class="progress me-5 ms-5">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?= $progress ?>%"><?php echo $progress ?>%</div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <br><br><br>
  <section id="daftarpesanprogress">
    <center>
      <h1>
        Daftar Pesanan on Progress
      </h1>
    </center>
    <div class="container-fluid" style="padding-right: 70px;padding-left: 70px;">
      <table class="table table-striped">
        <thead class="table-warning">
          <tr>
            <th scope="col">Nomor Pesanan</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Nomor Meja</th>
            <th scope="col">Makanan</th>
            <th scope="col">Minuman</th>
            <th scope="col">Biaya Total</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Takeaway - Dine in</th>
            <th scope="col">Progress in Kitchen</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('config/connector.php');
          $result = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='Process'");
          if ($result) {
            while ($select = mysqli_fetch_array($result)) {
          ?>
              <td><?= $select['id']; ?></td>
              <td><?= $select['nama']; ?></td>
              <td><?= $select['no_hp']; ?></td>
              <td><?= $select['no_meja']; ?></td>
              <td><?= $select['makanan']; ?></td>
              <td><?= $select['minuman']; ?></td>
              <td><?= $select['biaya']; ?></td>
              <td><?= $select['metode_bayar']; ?></td>
              <td><?= $select['metode_makan']; ?></td>
              <td><?= $select['status_order']; ?></td>
              <td>
                <form action="config/update.php" enctype="multipart/form-data" method="POST">
                  <input id="hide" type="number" name="id" value="<?= $select['id'] ?>">
                  <input class="btn btn-primary rounded-pill" name="edit" type="submit" value="Selesai">
                </form>
                <form action="config/delete.php" enctype="multipart/form-data" method="POST">
                  <input id="hide" type="number" name="id" value="<?= $select['id'] ?>">
                  <input class="btn btn-danger rounded-pill" name="delete" type="submit" value="Delete">
                </form>
              </td>
        </tbody>

    <?php
            }
          }
    ?>
      </table>
    </div>

  </section>

  <section id="daftarpesanselesai">
    <center>
      <h1><br><br>
        Daftar Pesanan Selesai
      </h1>
    </center>
    <div class="container-fluid" style="padding-right: 70px;padding-left: 70px;">
      <table class="table table-striped">
        <thead class="table-warning">
          <tr>
            <th scope="col">Nomor Pesanan</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Nomor Meja</th>
            <th scope="col">Makanan</th>
            <th scope="col">Minuman</th>
            <th scope="col">Biaya Total</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Takeaway - Dine in</th>
            <th scope="col">Progress in Kitchen</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('config/connector.php');
          $result = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='selesai'");
          if ($result) {
            while ($select = mysqli_fetch_array($result)) {
          ?>
              <td><?= $select['id']; ?></td>
              <td><?= $select['nama']; ?></td>
              <td><?= $select['no_hp']; ?></td>
              <td><?= $select['no_meja']; ?></td>
              <td><?= $select['makanan']; ?></td>
              <td><?= $select['minuman']; ?></td>
              <td><?= $select['biaya']; ?></td>
              <td><?= $select['metode_bayar']; ?></td>
              <td><?= $select['metode_makan']; ?></td>
              <td><?= $select['status_order']; ?></td>
        </tbody>

    <?php
            }
          }
    ?>
      </table>
    </div>

  </section>
  <br><br><br>
  <h1 class="ms-4 ps-5">Total Income <?php echo 'Rp' . $totalpendapatan ?></h1>

  <section id="daftarstok">
    <center>
      <h1><br><br>
        Stok
      </h1>
    </center>
    <div class="container-fluid" style="padding-right: 70px;padding-left: 70px;">
      <table class="table table-striped">
        <thead class="table-warning">
          <tr>
            <th scope="col">Nomor Stok</th>
            <th scope="col">Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Sisa Stok</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('config/connector.php');
          $result = mysqli_query($conn, "SELECT * FROM tb_menu");
          if ($result) {
            while ($select = mysqli_fetch_array($result)) {
          ?>
              <td><?= $select['id_stok']; ?></td>
              <td><?= $select['menu']; ?></td>
              <td><?= $select['harga']; ?></td>
              <td><?= $select['stok']; ?></td>
              
        </tbody>

    <?php
            }
          }
    ?>
      </table>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>