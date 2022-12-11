@extends('layout.navbar')
@section('navbar')
<div class="container" style="margin-top:60px;">
  <div class="row">
    <div class="col-5 ms-3" style="margin-top:100px;">
      <h1>Selamat Datang di showroom RICO</h1>
      <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio iure perferendis earum laborum exercitationem</p>
      <div class="d-grid gap-1 col-3">
        <a href="RICO_INDEX.php?page=MyItem" class="btn bg-primary text-white mt-3" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">MyCar</a>

      </div><br><br>
      <div class="row">
        <div class="col-3">
          <img src="asset/logo-ead.png" alt="logo ead" width=100px>
        </div>
        <div class="col-9">
          <p class="text-secondary">RICO_1202204004</p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <img style="margin-top:50px;" src="https://i.pinimg.com/564x/12/d0/8a/12d08a1ddcd6bdfed4fc0d22317a1bc2.jpg" alt="">
    </div>
  </div>
</div>
@endsection