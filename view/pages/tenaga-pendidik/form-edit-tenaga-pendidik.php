<?php
  include "../src/TenagaPendidik.php";

  $data = new TenagaPendidik();
  $tampilNIP = $data->dataNIP($_GET['nip']);



?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Tenaga Pendidik</h1>
  </div>

  <form class="" action="pages/tenaga-pendidik/proses-edit-tenaga-pendidik.php" method="post">

    <div class="form-group row">
      <label for="nip" class="col-2 col-form-label">NIP</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->NIP ?>" name="nip" disabled>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama" class="col-2 col-form-label">Nama</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->nama_guru ?>" name="nama">
      </div>
    </div>

    <div class="form-group row">
      <label for="tempat_lahir" class="col-2 col-form-label">Tempat Lahir</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->tempat_lahir ?>" name="tempat_lahir">
      </div>
    </div>

    <div class="form-group row">
      <label for="tanggal_lahir" class="col-2 col-form-label">Tanggal Lahir</label>
      <div class="col-10">
        <input class="form-control" type="date" value="<?=$tampilNIP->tanggal_lahir ?>" name="tanggal_lahir">
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis_kelamin" class="col-2 col-form-label">Jenis Kelamin</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilNIP->jenis_kelamin ?>" name="jenis_kelamin">
          <option>L</option>
          <option>P</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="agama" class="col-2 col-form-label">Agama</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilNIP->agama ?>" name="agama">
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
      <label for="jabatan" class="col-2 col-form-label">Jabatan</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->jabatan ?>" name="jabatan">
      </div>
    </div>

    <div class="form-group row">
      <label for="tmt_sekolah" class="col-2 col-form-label">TMT Sekolah</label>
      <div class="col-10">
        <input class="form-control" type="date" value="<?=$tampilNIP->TMT_sekolah ?>" name="tmt_sekolah">
      </div>
    </div>

    <div class="form-group row">
      <label for="tmt_pns" class="col-2 col-form-label">TMT PNS</label>
      <div class="col-10">
        <input class="form-control" type="date" value="<?=$tampilNIP->TMT_pns ?>" name="tmt_pns">
      </div>
    </div>

    <div class="form-group row">
      <label for="alamat" class="col-2 col-form-label">Alamat</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->alamat_guru ?>" name="alamat">
      </div>
    </div>

    <div class="form-group row">
      <label for="telp" class="col-2 col-form-label">Telepon</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->telp ?>" name="telp">
      </div>
    </div>

    <div class="form-group row">
      <label for="tugas_tambahan" class="col-2 col-form-label">Tugas Tambahan</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNIP->tugas_tambahan ?>" name="tugas_tambahan">
      </div>
    </div>

    <div class="form-group row">
      <label for="button" class="col-2 col-form-label"></label>
      <div class="col-10">
        <input type="submit" class="btn" name="" value="Simpan">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-10">
      </div>
    </div>


</form>


</main>
