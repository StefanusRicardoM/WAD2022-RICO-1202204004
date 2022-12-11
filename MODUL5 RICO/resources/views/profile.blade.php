@extends('layout.navbar')
@section('navbar')
<form action="config/Rico_Updateprofile.php" method="POST" enctype="multipart/form-data">
  <br>
  <div class="Container text-center">
    <h3>PROFILE</h3>
  </div>
  <div class="align-items-center  px-5 mt-5">
    <div class="container overflow-hidden">
      <div class="row gy-2">
        <div class="col-3">
          <label for="exampleInputEmail1" class="form-label">Email<h8 class=text-danger>*</h8></label>
        </div>
        <div class="col-9">
          <input type="email" class="form-control-plaintext" name="email" value="" required>
        </div>

        <div class="col-3">
          <p>Nama<h8 class=text-danger>*</h8>
          </p>
        </div>
        <div class="col-9">
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="" readonly>
        </div>
        <div class="col-3">
          <p>Nomor Handphone<h8 class=text-danger>*</h8>
          </p>
        </div>
        <div class="col-9">
          <input type="text" class="form-control" name="no_hp" id="exampleInputEmail1" value="" readonly>
        </div>
        <hr>
        <div class="col-3">
          <p>Kata Sandi<h8 class=text-danger>*</h8>
          </p>
        </div>
        <div class="col-9">
          <input type="password" class="form-control" name="password" value="">
        </div>
        <div class="col-3">
          <p>Konfirmasi Kata Sandi</p>
        </div>
        <div class="col-9">
          <input type="password" class="form-control" name="cpassword" value="">
        </div>
        <div class="col-3">
          <p>Warna Navbar</p>
        </div>
        <div class="col-9">
          <select class="form-select" name="colour" id="colour">
            <option selected disabled></option>
            <option value="primary">Blue</option>
            <option value="success">green</option>
            <option value="secondary">Gray</option>
          </select>
        </div>
      </div>
    </div>
</form>
<div class="text-center">
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
<br>
<div class="container">

  <div class="row">
    <div class="col-1">
      <img src="asset/logo-ead.png" alt="logo ead" width=100px>
    </div>
    <div class="col-1">
      <p class="text-secondary">&nbspRICO_1202204004</p>
    </div>
  </div>
</div>
@endsection