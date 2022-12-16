@extends('layout.navbar')
@section('navbar')
    <div class="container" style="margin-top:60px;">
        <h2>{{ $data->name }}</h2>
        <p class="text-secondary">Detail Mobil {{ $data->name }}</p>
      <div class="d-flex align-items-start gap-4">
        <img class="col-6" src="/storage/{{ $data->image }}" alt="foto">
        <div class="col-6">
        <section id=form>
        <form action="/itemdetail/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label for="NamaMobil" class="form-label"><strong>Nama Mobil</strong></label>
            <input type="text" class="form-control" id="NamaMobil" name="NamaMobil" value="{{ $data->name }}">
          </div>
          <div class="mb-3">
            <label for="NamaPemilik" class="form-label"><strong>Nama Pemilik</strong></label>
            <input type="text" class="form-control" id="NamaPemilik" name="NamaPemilik" value="{{ $data->owner  }}">
          </div>
          <div class="mb-3">
            <label for="Merk" class="form-label"><strong>Merk</strong></label>
            <input type="text" class="form-control" id="Merk" name="Merk" value="{{ $data->brand }}">
          </div>
          <div class="mb-3">
            <label for="tanggal" class="start"><strong>Tanggal Beli</strong></label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" name="tanggal" value="{{ $data->purchase_date  }}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><strong>Deskripsi</strong></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Deskripsi">{{ $data->description  }}</textarea>
          </div>
          <div class="mb-3">
            <label for="inputGroupFile02" class="form-label"><strong>Foto</strong></label>
            <input type="file" class="form-control" id="inputGroupFile02" name="inputfoto">
          </div>
          <div class="mb-3">
            <label for="inputGroupFile02" class="form-label"><strong>Status Pembayaran</strong></label>
            <table>
              <tr>
                <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusp" value="Lunas" id="lunas" {{ $data->status  == 'Lunas' ? 'checked' : '' }} readonly>
                    <label class="form-check-label" for="flexRadioDefault1">Lunas&emsp;&emsp;</label>
                </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusp" value="Belum-Lunas" id="belumlunas" {{ $data->status  == 'Belum-Lunas' ? 'checked' : '' }} readonly>
                    <label class="form-check-label" for="flexRadioDefault1">Belum Lunas</label>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <br>
          <button type="submit" class="btn btn-primary col-1" value="selesai">Edit</button>
        </form>
                <br><br>
            </section>
        </div>
      </div>
    </div>
@endsection
