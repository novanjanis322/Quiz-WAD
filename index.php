<!-- <?php
      // include('config/connector.php');
      // // $query = "SELECT * FROM tb_order";
      // $result = mysqli_query($conn, $query);
      // global $result;

      ?> -->

<?php
session_start();
?>
</style>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style-restoranpon.css?v=<?php echo time(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Restoran Pon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <section id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'loginuser', 'loginadmin']) ? 'hide' : '' ?>">
    <nav class="navbar navbar-expand-lg navbar-primary bg-light sticky-top fixed-top" style="background-color:transparent;">
      <div class="container-fluid ">

        <img src="asset/Screenshot (1683).png" width="100px" style="border: 2px black solid;border-radius: 10px;margin-left: 60px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 450px;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="margin-right: 10px;">
              <a id="navbartext" class="nav-link active" aria-current="page" href="index.php" style="font-weight:bold; ">HOME</a>
            </li>
            <div class="dropdown">
              <li class="nav-item " style="margin-right: 10px;">
                <a id="navbartext" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#" style="font-weight:bold;">MENU📑</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php#menumakan">Menu Makanan🍽</a></li>
                  <li><a class="dropdown-item" href="index.php#menuminum">Menu Minuman🍹</a></li>
                </ul>
            </div>
            <li id="<?= !isset($_SESSION['nama']) ? 'hide' : '' ?>" class="nav-item" style="margin-right: 10px;">
              <a id="navbartext" class="nav-link active" aria-current="page" href="index.php#form" style="font-weight:bold;  ">
                PESAN
              </a>
            </li>
          </ul>
          <div class="dropdown me-5">
            <button id="<?= isset($_SESSION['nama']) || isset($_SESSION['nama_admin'])   ? 'hide' : '' ?>" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"  aria-current="page" href="#" style="font-weight:bold;">Login<img src="asset\996443.png" height="40px"></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?page=loginuser">User</a></li>
              <li><a class="dropdown-item" href=" index.php?page=loginadmin">Admin</a></li>
            </ul>
          </div>
          <div class="dropdown me-5">
            <button id="<?= !isset($_SESSION['nama'])  ? 'hide' : '' ?>" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#" style="font-weight:bold;">Welcome, <?= $_SESSION['nama'] ?></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?page=dashboarduser">Dashboard</a></li>
              <li><a class="dropdown-item" href="index.php?page=logoutuser">Logout</a></li>
            </ul>
          </div>
          <div class="dropdown me-5">
            <button id="<?= !isset($_SESSION['nama_admin'])  ? 'hide' : '' ?>" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#" style="font-weight:bold;">Welcome, <?= $_SESSION['nama_admin'] ?>
          
          </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?page=dashboardadmin">Dashboard</a></li>
              <li><a class="dropdown-item" href="index.php?page=logoutadmin">Logout</a></li>
            </ul>
          </div>
        </div>
    </nav>
  </section>

  <?php
  if (isset($_GET['page']) && isset($_GET['id'])) {
    $page = $_GET['page'];
    $id = $_GET['id'];
    switch ($page) {
      case 'dashboardadmin':
        include "pages/dashboard_admin-restoranpon.php";
        break;
      case 'dashboarduser':
        include "pages/dashboard_user-restoranpon.php";
        break;
      default:
        echo "<center>
                  <h5>
                  Not Found !!
                  </h5>
                  </center>";
        break;
    }
  } else if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
      case 'dashboardadmin':
        include "pages/dashboard_admin-restoranpon.php";
        break;
      case 'dashboarduser':
        include "pages/dashboard_user-restoranpon.php";
        break;
      case 'logoutuser':
        include "config/logout_user.php";
        break;
      case 'logoutadmin':
        include "config/logout_admin.php";
        break;
      case 'loginuser':
        include "pages/login_user-restoranpon.php";
        break;
      case 'loginadmin':
        include "pages/login_admin-restoranpon.php";
        break;
      case 'register':
        include "pages/register-restoranpon.php";
        break;
      default:
        echo "<center><h5>Not Found !!</h5></center>";
        break;
    }
  } else {
    include "pages/home-restoranpon.php";
  }
  ?>



</body>
<section id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'loginuser', 'loginadmin']) ? 'hide' : 'footer' ?>" class="text-white">
    <div class="container">
      <div class="row" style="padding-top: 30px;">
        <div class="col">
          <h4>
            About Us
            <br><br><br>
          </h4>
          <p align="justify">Website Restoran Pon adalah website pemesanan makanan yang disiapkan oleh Peepo dan Novan.
            Website ini dirancang supaya para customer dapat melakukan pemesanan melalui web yang ada di restoran ini
            sehingga customer bisa langsung memesan tanpa perlu ke kasir terlebih dahulu.
            Tentunya website ini juga dilengkapi dengan daftar makanan, minuman, dan berbagai fitur lainnya.
          </p>
        </div>
        <div class="col" style="padding-left: 15%;">
          <h4>
            More Info
            <br><br><br>
          </h4>
          <img src="asset/location.png" width="30px"> Location: <br> 10-13 Grosvenor Square, <br> London W1K 6JP, United Kingdom <br><br><br>
          <img src="asset/clock.png" width="30px"> Opening Hours: <br>Sunday-Friday <br> 10am - 9pm

        </div>
        <div class="col" style="padding-left: 5%;">
          <h4>
            Reach Us Out:
            <br><br><br>
          </h4>
          <img src="asset/instagram.png" width="30px"> novanjanis <br><br><br>
          <img src="asset/facebook.png" width="30px"> novanjanis <br><br><br>
          <img src="asset/gmail.png" width="30px"> peepo@gmail.com <br><br><br>
          <img src="asset/phone.png" width="30px"> 08123012493 <br><br><br>

        </div>

        <center>
          <h5><br> Copyright ©2022 Made by Novan Janis Aditya Halawa
            <br><br>
          </h5>
        </center>
      </div>

    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/boostrap.js"></script>

</html>