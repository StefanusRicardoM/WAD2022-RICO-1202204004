<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL3 RICO HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style/MODUL3 RICO.css">
  </head>
  <body>
  <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-primary">
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
                    <a class="nav-link active text-light" href="RICO_INDEX.php?page=MyItem">Mycar</a>
                  </li>
                </ul>
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'MyItem'){
                    echo '<a href="RICO_INDEX.php?page=Additem" type="button" class="nav-link bg-light text-primary">Add Item</a>';
                }
                ?>
              </div>
            </div>
          </nav>
    </section>
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
                case 'MyItem':
                    include "pages/RICO_MyItem.php";
                    break;
                case 'Additem':
                    include "pages/RICO_AddItem.php";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>