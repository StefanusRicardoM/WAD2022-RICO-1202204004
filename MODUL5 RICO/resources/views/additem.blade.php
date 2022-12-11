@extends('layout.navbar')
@section('navbar')
  <body>
    <br><br>
    <div class="container" style="margin-top:30px;">
      <h2>Tambah Mobil</h2>
      <p class="text-secondary">Tambah Mobil Baru Anda Ke List Show Room</p>
      <section id=form>
        <form action="{{route('item.add')}}" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="NamaMobil" class="form-label"><strong>Nama Mobil</strong></label>
            <input type="text" class="form-control" id="NamaMobil" name="NamaMobil">
          </div>
          <div class= "mb-3">
            <label for="NamaPemilik" class="form-label"><strong>Nama Pemilik</strong></label>
            <input type="text" class="form-control" id="NamaPemilik" name="NamaPemilik">
          </div>
          <div class="mb-3">
            <label for="Merk" class="form-label"><strong>Merk</strong></label>
            <input type="text" class="form-control" id="Merk" name="Merk">
          </div>
          <div class="mb-3">
            <label for="tanggal" class="start"><strong>Tanggal Beli</strong></label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><strong>Deskripsi</strong></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Deskripsi"></textarea>
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
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusp" value="lunas" id="lunas">
                    <label class="form-check-label" for="flexRadioDefault1">Lunas&emsp;&emsp;</label>
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusp" value="belumlunas" id="belumlunask">
                    <label class="form-check-label" for="flexRadioDefault1">Belum Lunas</label>
                  </div>  
                </td>
              </tr>
            </table>
          </div>
          <br>
          <button type="submit" class="btn btn-primary col-1" value="selesai">Selesai</button>
        </form>
      </section>
      <br><br><br>
    </div>
@endsection  
