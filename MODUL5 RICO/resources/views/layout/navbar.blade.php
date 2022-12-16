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
    <nav class="bg-primary text-white py-3">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-2">
              <div>
                <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
              </div>
              @if(Auth::user())
                <div>
                  <a class="nav-link text-white" aria-current="page" href="/myitem">My Car</a>
                </div>
              @endif
            </div>
            @if(Auth::user())
            <div class="d-flex gap-3">
              <div class="">
                <a class="btn bg-white text-primary" aria-current="page" href="/additem">Add Car</a>
              </div>
              <div>
                  <div class="btn-group">
                      <button type="button" class="btn bg-white text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      {{Auth::user()->name}}
                      </button>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/profile">Profile</a></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      </ul>
                  </div>
              </div>
            </div>
            @else
            <div>
              <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
            </div>
            @endif
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('navbar')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script type="text/javascript" src="/Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/Scripts/bootstrap.min.js"></script>
</body>

</html>
