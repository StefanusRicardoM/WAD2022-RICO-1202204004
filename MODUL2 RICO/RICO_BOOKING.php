<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL2 RICO</title>
    <link rel="stylesheet" href="MODUL2 RICO.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <section id=navbar>
    <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="RICO_HOME.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="RICO_BOOKING.php">Booking</a>
  </li>
</ul>
    </div>
  </div>
</nav>
      </section>
      <h2><center>RENT YOUR CAR NOW</center></h2>
      <br></br>
    <section id="buking">
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
        <?php 
        if (isset($_POST['HondaBrio'])){
         echo '<img src="https://asset.honda-indonesia.com/colors/aLZfKtcSn1nYxZ64GoSjMRMted0GBoeTyCXDVDUF.png" alt="">';
        } elseif (isset($_POST['HondaCity'])){
            echo '<img src="https://www.honda-indonesia.com/uploads/images/models/colors/cred__1614310551110.png" alt="">';
        } elseif (isset($_POST['HondaCRV'])){
            echo '<img src="https://www.honda-indonesia.com/uploads/images/models/colors/cwhite__1613384007606.png" alt="">';
        }
        else {
            echo '<img src="https://asset.honda-indonesia.com/colors/yDimA1hKJ3GrbJPK7Vc4XhIxnhorophHrim1pt1l.png" alt="">';
        }
        ?>
        
    </div>
   <div class="col-sm-8">
    <form action="RICO_MYBOOKING.php" method="GET">
  <div class="mb-3">
    <label for="Nama" class="form-label">Name</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="RICO_1202204004" readonly>
  </div>
  <div class="mb-3">
    <label for="tanggal" class="start">Tanggal Booking</label>
    <input type="date" name="tanggal" class="form-control" id="tanggal">
  </div>
  <div class="mb-3">
    <label for="Waktu" class="start">Waktu Mulai</label>
    <input type="time" name="Waktu" class="form-control" id="Waktu">
  </div>
  <div class="mb-3">
    <label for="Durasi" class="form-label">Durasi (Hari)</label>
    <input type="text" name="Durasi" class="form-control" id="Durasi">
  </div>
  <label for="Tipe" class="form-label">Tipe Mobil</label>
  <select class="form-select" name="Tipe" aria-label="Default select example">
  <option selected disabled>Pilih Jenis Mobil</option>
  <option value="Honda Brio">Honda Brio</option>
  <option value="Honda City">Honda City</option>
  <option value="Honda CRV">Honda CRV</option>
  </select>
  <div class="mb-3">
    <label for="NoTelp" class="form-label">Nomor Telepon</label>
    <input type="text" name="NoTelp" class="form-control" id="NoTelp">
  </div>
<div class="mb-3">
  <label for="service" class="form-label">Add Service(s)</label>
  <div class="form-check" >
  <input class="form-check-input"  type="checkbox" name="service1" value="Health Protocol" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Health Protocol/Rp 25,000.00
  </label>
</div>
<div class="form-check">
  <input class="form-check-input"  type="checkbox" name="service2" value="Driver" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Driver/Rp 100,000.00
  </label>
</div>
<div class="form-check">
  <input class="form-check-input"  type="checkbox" name="service3" value="Fuel Filled" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Fuel Filled/Rp 250,000.00
  </label>
</div>
</div>
<div class="d-grid gap-2">
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>
    </div>
  </div>
</div>
    </section>
    <br></br>
    <section id="footer">
        <footer class="bg-dark text-center text-light"> 
            Created By Rico_1202204004
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>