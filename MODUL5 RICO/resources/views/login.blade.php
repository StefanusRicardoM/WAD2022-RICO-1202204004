@extends('layout.navbar')
@section('navbar')
    <section id=login>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block">
             <img src="https://i0.wp.com/thewestnews.com/wp-content/uploads/2022/11/Car.jpg?fit=1920%2C1080&ssl=1" alt="" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-sm-6">
                <br><br><br>
                <h3>Login</h3>
                <form action="config/Rico_Login.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" name="remember" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p>Anda belum punya akun?<a href="/register" class="text-primary">Daftar</a></p>
                </form>
                </div>
        </div>
    </div>
    </section>
    
@endsection