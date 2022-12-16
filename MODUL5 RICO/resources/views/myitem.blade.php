@extends('layout.navbar')
@section('navbar')
<div class="container" style="margin-top:30px;">
    @if (count($errors) > 0)
  <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </div>
  @endif
  @if (Session::has('success'))
      <div
          class="alert alert-success">
          {{ Session::get('success') }}
      </div>
  @endif
    <h2>My Show Room</h2>
    <p class="text-secondary">List Show Room Rico - 1202204004</p>
    <section id="listmobil">
        <div class="row row-cols-3">
        @foreach ($data as $d)
            <div class="card">
                <img src="/storage/{{$d->image}}" class="card-img-top" alt="Mobil">
                <div class="card-body">
                    <h5 class="card-title">{{$d->name }}</h5>
                    <p class="card-text text-secondary">{{$d->description }}</p>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-6">
                                <a href='itemdetail/{{$d->id}}' type="button" class="btn btn-primary col-12 rounded-pill">Detail</a>
                            </div>
                            <div class="col-6">
                                <a href='deletedetail/{{$d->id}}' class="btn btn-primary col-12 bg-danger rounded-pill">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <br><br>
    <p class="text-secondary">Jumlah Mobil: {{$count}}</p>
    <br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
