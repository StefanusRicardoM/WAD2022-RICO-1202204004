<!doctype html>
<html lang="en">
  <head>
    <style>
      #hide {
    display: none;
  }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL3 RICO HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style/MODUL4 RICO.css">
  </head>
  <body>
  <?php
  include 'config/Rico_connector.php';
  $email = $_COOKIE['email'];
  $query = mysqli_query($connect2, "SELECT * FROM user_rico WHERE email='$email'");
  $select = mysqli_fetch_assoc($query);
  
                if(isset($_GET['page']) && $_GET['page'] == 'Login'){
                  
                }
                elseif(isset($_GET['page']) && $_GET['page'] == 'Register'){
                  
                }
                else{
                  ?>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-<?= isset($_COOKIE['colour']) ? $_COOKIE['colour'] : 'primary' ?>">
            <div class="container text-center">
                <a class="navbar-brand" href="#">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-light" href="RICO_INDEX.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <?php
                  include_once("config/Rico_connector.php");
                  $result = mysqli_query($connect, "SELECT * FROM showroom_rico_table");
                  if(mysqli_fetch_array($result)>0){ ?>
                    <a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link active text-light" href="RICO_INDEX.php?page=MyItem">Mycar</a>
                  <?php }
                  else{ ?>
                    <a class="nav-link active text-light" href="RICO_INDEX.php?page=Additem">Mycar</a>
                  <?php }
                  ?>
                    
                  </li>
                  <li class="nav-item">
                    <a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link bg-light active text-primary rounded p-2" style="margin-left: 900px;" href="RICO_INDEX.php?page=Additem">Add Car</a>
                  </li>
                  <li class="nav-item">
                    <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link active text-light rounded p-2" style="margin-left: 900px;" href="RICO_INDEX.php?page=Login">Login</a>
                  </li>
                  <li class="nav-item">
                  <div class="dropdown">
                  <button id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="btn btn-light dropdown-toggle text-primary" style="margin-left: 15px;" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  <?= $select['nama'] ?> 
                  </button>
                  <ul class="dropdown-menu" style="float: right;">
                    <li><a class="dropdown-item text-primary" href="RICO_INDEX.php?page=Profile">Profile</a></li>
                    <li><a class="dropdown-item text-primary" href="RICO_INDEX.php?page=logout">Log Out</a></li>
                  </ul>
                </div>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </section>
    <?php
              }
              ?>
    <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];

            switch ($page) {
                case 'ItemDetail':
                    include "pages/RICO_ItemDetail.php";
                    break;
                case 'EditItem':
                    include "pages/RICO_EditItem.php";
                    break;
                default:
                    echo "<center><h2>Error 404 Not Found</h2></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'Home':
                    include "pages/RICO_HOME.php";
                    break;
                case 'Profile':
                    include "pages/RICO_PROFILE.php";
                    break;
                case 'MyItem':
                    include "pages/RICO_MyItem.php";
                    break;
                case 'Additem':
                    include "pages/RICO_AddItem.php";
                    break;
                case 'Login' :
                    include "pages/RICO_Login.php";
                    break;
                case 'Register' :
                    include "pages/RICO_Register.php";
                    break;
                case 'logout' :
                    include "config/Rico_Logout.php";
                    break;
                default:
                    echo "<center><h2>Error 404 Not Found</h2></center>";
                    break;
            }
        }
        else {
            include "pages/RICO_HOME.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E"></script>
  </body>
</html>