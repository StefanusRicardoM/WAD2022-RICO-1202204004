<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL3 RICO HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/MODUL4 RICO.css">
  </head>
  <body>
    <section id=register>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block">
             <img src="https://i0.wp.com/thewestnews.com/wp-content/uploads/2022/11/Car.jpg?fit=1920%2C1080&ssl=1" alt="" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-sm-6 text-black">
                <div class="align-items-center  px-5 mt-5">      
                <form action="config/Rico_Register.php" method="post" enctype="multipart/form-data">
                    <h3>Registrasi</h3> <br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email<h8 class=text-danger>*</h8></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Handphone<h8 class=text-danger>*</h8></label>
                        <input type="text" class="form-control" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi<h8 class=text-danger>*</h8></label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi<h8 class=text-danger>*</h8></label>
                        <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <p>Anda sudah punya akun?<a href="RICO_INDEX.php?page=Login" class="text-primary">Login</a></p>
                </form>
                </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>