<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
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
                            <a class="nav-link text-light" href="/home">Home</a>
                        </li>
                        <li class="nav-item">

                            <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link active text-light" href="/myitem">Mycar</a>
                        </li>
                        <li class="nav-item">
                            <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link bg-light active text-primary rounded p-2" style="margin-left: 900px;" href="/additem">Add Car</a>
                        </li>
                        <li class="nav-item">
                            <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link active text-light rounded p-2" style="margin-left: 900px;" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="btn btn-light dropdown-toggle text-primary" style="margin-left: 15px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    akun
                                </button>
                                <ul class="dropdown-menu" style="float: right;">
                                    <li><a class="dropdown-item text-primary" href="/profile">Profile</a></li>
                                    <li><a class="dropdown-item text-primary" href="RICO_INDEX.php?page=logout">Log Out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        @yield('navbar')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
</body>

</html>