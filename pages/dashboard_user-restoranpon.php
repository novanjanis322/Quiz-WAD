
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard User</title>
  <link rel="stylesheet" href="RestoranPon_home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="font-monospace" id="warna">
  <section id="home">
    <center>
      <h1 style="margin-top: 3%;">Dashboard User <?= $_SESSION['nama']; ?></h1>
    </center>
  </section>
  <br><br><br>
  <section id="daftarpesan">
    <center>
      <h1>
        Daftar Pesanan
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
          $nama = $_SESSION['nama'];
          include('config/connector.php');
          $result = mysqli_query($conn, "SELECT * FROM tb_order where nama='$nama'");
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>