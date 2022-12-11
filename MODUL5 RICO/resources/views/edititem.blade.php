@extends('layout.navbar')
@section('navbar')
<div class="container" style="margin-top:60px;">
    <h2>Edit</h2>
    <p class="text-secondary">Edit Mobil</p>
    <div class="row">
        <div class="col-6">
            <img style="margin-top:50px; width:350px" src="" alt="foto">
        </div>
        <div class="col-6">
            <section id=form>
                <form>
                    <div class="mb-3">
                        <label for="NamaMobil" class="form-label"><strong>Nama Mobil</strong></label>
                        <input type="text" class="form-control" id="NamaMobil" name="NamaMobil" value="">
                    </div>
                    <div class="mb-3">
                        <label for="NamaPemilik" class="form-label"><strong>Nama Pemilik</strong></label>
                        <input type="text" class="form-control" id="NamaPemilik" name="NamaPemilik" value="">
                    </div>
                    <div class="mb-3">
                        <label for="Merk" class="form-label"><strong>Merk</strong></label>
                        <input type="text" class="form-control" id="Merk" name="Merk" value="">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="start"><strong>Tanggal Beli</strong></label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" name="tanggal" value="">
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
                                        <input class="form-check-input" type="radio" name="statusp" value="lunas">
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
                    <input type="submit" class="btn btn-primary col-2" value="edit"></input>
                </form>
                <br><br>
            </section>
        </div>
    </div>
</div>
@endsection