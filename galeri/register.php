<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Kodinger">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Register | Interest</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
          <div class="brand">
            <center><img src="assets/img/logo1.png" alt="logo" style="width: 200px; height: 200px; border-radius: 50%;"></center>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Registrasi Akun Baru</h4>
              <form method="POST" action="aksi_register.php">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" name="alamat" rows="2"></textarea>
                </div>
                <div class="form-group">
                  <label for="email">E-Mail</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group m-0">
                  <button type="submit" class="btn btn-primary btn-block">
                    Daftar
                  </button>
                </div>
                <div class="mt-4 text-center">
                  Sudah Punya Akun? <a href="login.php">Login disini</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer text-center">
            Copyright &copy; 2024 &mdash; Konserin.id
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script>
  <script src="js/my-login.js"></script>
</body>

</html>