@extends('layout.navbar')
@section('navbar')
    <div class="container" style="margin-top:60px;">
        <h2><?= $select['nama_mobil'] ?></h2>
        <p class="text-secondary">Detail Mobil <?= $select['nama_mobil'] ?></p>
      <div class="row">
        <div class="col-6">
            <img style="margin-top:50px; width:350px" src="asset/<?= $select['foto_mobil'] ?>" alt="foto">
        </div>
        <div class="col-6">
        <section id=form>
        <form action="config/Rico_Create.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="NamaMobil" class="form-label"><strong>Nama Mobil</strong></label>
            <input type="text" class="form-control" id="NamaMobil" name="NamaMobil" value="<?= $select['nama_mobil'] ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="NamaPemilik" class="form-label"><strong>Nama Pemilik</strong></label>
            <input type="text" class="form-control" id="NamaPemilik" name="NamaPemilik" value="<?= $select['pemilik_mobil'] ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="Merk" class="form-label"><strong>Merk</strong></label>
            <input type="text" class="form-control" id="Merk" name="Merk" value="<?= $select['merk_mobil']?>" readonly>
          </div>
          <div class="mb-3">
            <label for="tanggal" class="start"><strong>Tanggal Beli</strong></label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" name="tanggal" value="<?= $select['tanggal_beli'] ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><strong>Deskripsi</strong></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Deskripsi" readonly><?= $select['deskripsi'] ?></textarea>
          </div>
          <div class="mb-3">
            <label for="inputGroupFile02" class="form-label"><strong>Foto</strong></label>
            <input type="file" class="form-control" id="inputGroupFile02" name="inputfoto" readonly>
          </div>
          <div class="mb-3">
            <label for="inputGroupFile02" class="form-label"><strong>Status Pembayaran</strong></label>
            <table>
              <tr>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusp" value="lunas" id="lunas" <?php echo $select['status_pembayaran'] == 'lunas' ? 'checked' : '' ?> readonly>
                    <label class="form-check-label" for="flexRadioDefault1">Lunas&emsp;&emsp;</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusp" value="belumlunas" id="belumlunas" <?php echo $select['status_pembayaran'] == 'belumlunas' ? 'checked' : '' ?> readonly>
                    <label class="form-check-label" for="flexRadioDefault1">Belum Lunas</label>
                  </div>  
                </td>
              </tr>
            </table>
          </div>
          <br>
          <a href="RICO_INDEX.php?page=EditItem&id=<?= $select['id_mobil'] ?>" class="btn btn-primary col-1" value="selesai">Edit</a>
        </form>
                <br><br>
            </section>
        </div>
      </div>
    </div>
@endsection