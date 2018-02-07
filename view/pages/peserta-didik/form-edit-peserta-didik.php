<?php
  include "../src/PesertaDidik.php";

  $data = new PesertaDidik();
  $tampilNIS = $data->dataNIS($_GET['nis']);



?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Peserta didik</h1>
  </div>

  <form class="" action="pages/peserta-didik/proses-edit-peserta-didik.php" method="post">

    <div class="form-group row">
      <label for="nis" class="col-2 col-form-label">NIS</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->NIS ?>" name="nis" readonly>
      </div>
    </div>

    <div class="form-group row">
      <label for="nisn" class="col-2 col-form-label">NISN</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->NISN ?>" name="nisn">
      </div>
    </div>

    <div class="form-group row">
      <label for="nama" class="col-2 col-form-label">Nama</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->nama_siswa ?>" name="nama">
      </div>
    </div>

    <div class="form-group row">
      <label for="tempat_lahir" class="col-2 col-form-label">Tempat Lahir</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->tempat_lahir ?>" name="tempat_lahir">
      </div>
    </div>

    <div class="form-group row">
      <label for="tanggal_lahir" class="col-2 col-form-label">Tanggal Lahir</label>
      <div class="col-10">
        <input class="form-control" type="date" value="<?=$tampilNIS->tanggal_lahir ?>" name="tanggal_lahir">
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis_kelamin" class="col-2 col-form-label">Jenis Kelamin</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilNIS->jenis_kelamin ?>" name="jenis_kelamin">
          <option>L</option>
          <option>P</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="agama" class="col-2 col-form-label">Agama</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilNIS->agama ?>" name="agama">
          <option>ISLAM</option>
          <option>KRISTEN</option>
          <option>KATOLIK</option>
          <option>HINDU</option>
          <option>BUDDHA</option>
          <option>KONG HU CU</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="alamat" class="col-2 col-form-label">Alamat</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->alamat_siswa ?>" name="alamat">
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis_kelainan" class="col-2 col-form-label">Jenis Kelainan</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilNIS->jenis_kelainan ?>" name="jenis_kelainan">
          <option>A</option>
          <option>B</option>
          <option>C</option>
          <option>AUTIS</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_ayah" class="col-2 col-form-label">Nama Ayah</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->nama_ayah ?>" name="nama_ayah">
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_ibu" class="col-2 col-form-label">Nama Ibu</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIS->nama_ibu ?>" name="nama_ibu">
      </div>
    </div>

    <div class="form-group row">
      <label for="button" class="col-2 col-form-label"></label>
      <div class="col-10">
        <button class="btn" name="button">Simpan</button>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-10">
      </div>
    </div>


</form>


</main>
