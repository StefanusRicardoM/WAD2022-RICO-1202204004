@extends('layout.navbar')
@section('navbar')
<div class="container" style="margin-top:30px;">
    <h2>My Show Room</h2>
    <p class="text-secondary">List Show Room Rico - 1202204004</p>
    <section id="listmobil">
    {{-- <?php
        include_once("config/Rico_connector.php");
        $result = mysqli_query($connect, "SELECT * FROM showroomrico");
        if ($result){
            while ($select = mysqli_fetch_array($result)){
        ?> --}}
                <div class="card" style="width: 18rem;">
                    <img src="asset/{{['foto_mobil']}}" class="card-img-top" alt="Mobil">
                        <div class="card-body">
                            <h5 class="card-title">{{$select['nama_mobil'] }}</h5>
                            <p class="card-text text-secondary">{{$select['deskripsi']}}</p>                        
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-6">
                                    <a href='RICO_INDEX.php?page=ItemDetail&id={{$select['id_mobil']}}' type="button" class="btn btn-primary col-12 rounded-pill">Detail</a>
                                    </div>
                                    <div class="col-6">
                                    <a href='config/Rico_delete.php?id={{$select['id_mobil']}}' class="btn btn-primary col-12 bg-danger rounded-pill">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        {{-- <?php }
        }
        ?> --}}
    </section>
    <br><br>
    <p class="text-secondary">Jumlah Mobil:<?= mysqli_num_rows($result) ?></p>
    <br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection