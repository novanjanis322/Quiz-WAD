<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row" style="width: 96vw">
        <div class="col">
            <img src="asset\sign-concept-illustration_114360-125.webp" alt="" style="width:50vw;">
        </div>
        <div class="col">
            <form action="config/register.php" enctype="multipart/form-data" method="POST" style="padding:60px;">
                <div class="mb-3">
                    <h2>Register</h2>
                    <label for="email" class="form-label">Email address<a style="color:red">*</a></label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">nomor hp<a style="color:red">*</a></label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password<a style="color:red">*</a></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Konfirmasi Password<a style="color:red">*</a></label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3" style="padding-left: 30px;padding-right: 30px">Daftar</button>
                <p>sudah punya akun? <a href="index.php?page=loginuser">Login</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>