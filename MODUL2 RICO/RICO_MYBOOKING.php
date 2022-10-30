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
    <h2><center>Thank You RICO_1202204004 for Reserving</center></h2>
    <h6><center>Please Double Check your Reservation Details</center></h6>
    <br></br>
    <?php
    $Nama = $_POST['Nama'];
    $tanggal = $_POST['tanggal'];
    $Waktu = $_POST['Waktu'];
    $Durasi = $_POST['Durasi'];
    $Tipe = $_POST['Tipe'];
    $NoTelp = $_POST['NoTelp'];
    $service1= $_POST['service1'];
    $service2= $_POST['service2'];
    $service3= $_POST['service3'];
    $checkout = $tanggal . " + " . $Durasi . " days";
    $service= array();
    $hargaservice = array();
    $total = 0;
    switch ($Tipe){
        case 'Honda Brio':
            $total = 750000 * $Durasi;
            break;
        case 'Honda City':
            $total = 1000000 * $Durasi;
            break;
        case 'Honda CRV':
            $total = 1500000 * $Durasi;
            break;
    }
    if (isset($service1)){
        array_push($hargaservice, 25000);
        array_push($service, $service1);
    }
    if (isset($service2)){
        array_push($hargaservice, 100000);
        array_push($service, $service2);
    }
    if (isset($service3)){
        array_push($hargaservice, 250000);
        array_push($service, $service3);
    }
    foreach ($hargaservice as $totalservice){
        $total += $totalservice;
    }
    ?>
<section id="tabel" class="text-center">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check In</td>
            <th scope="col">Check Out</th>
            <th scope="col">Car Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Service(s)</th>
            <th scope="col">Total Price</th>
        </tr>
</thead>
<tbody>
        <tr>
            <td><?php echo rand() ?></td>
            <td><?php echo $Nama ?></td>
            <td><?php echo date('Y-m-d', strtotime($tanggal)) ;echo('|') ;echo $Waktu ?></td>
            <td><?php echo date('Y-m-d', strtotime($checkout)) ; echo('|'); echo $Waktu?></td>
            <td><?php echo $Tipe ?></td>
            <td><?php echo $NoTelp ?></td>
            <td><ul><?php foreach ($service as $a){?>
                <li><?php echo $a; ?></li>
            <?php }
                ?></ul></td>
            <td><?php echo $total ?></td> 
        </tr>
</tbody>
    </table>
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