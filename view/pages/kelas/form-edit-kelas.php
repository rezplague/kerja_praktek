<?php
  include "../src/Kelas.php";

  $data = new Kelas();
  $tampilKelas = $data->dataKelas($_GET['id_kelas']);



?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kelas</h1>
  </div>

  <form class="" action="pages/kelas/proses-edit-kelas.php" method="post">

    <div class="form-group row">
      <label for="id_kelas" class="col-2 col-form-label">ID Kelas</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilKelas->id_kelas ?>" name="id_kelas" disabled>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_kelas" class="col-2 col-form-label">Nama Kelas</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilKelas->nama_kelas ?>" nama="nama_kelas">
      </div>
    </div>

    <div class="form-group row">
      <label for="tahun_ajaran" class="col-2 col-form-label">Tahun Ajaran</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilKelas->tahun_ajaran ?>" name="tahun_ajaran">
      </div>
    </div>

    <div class="form-group row">
      <label for="semester" class="col-2 col-form-label">Semester</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilKelas->semester ?>" name="semester">
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
