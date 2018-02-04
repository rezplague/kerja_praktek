<?php
  include "../src/MataPelajaran.php";

  $data = new MataPelajaran();
  $tampilMapel = $data->dataMapel($_GET['id_matapelajaran']);



?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Mata Pelajaran</h1>
  </div>

  <form class="" action="pages/mata-pelajaran/proses-edit-mata-pelajaran.php" method="post">

    <div class="form-group row">
      <label for="id_matapelajaran" class="col-2 col-form-label">ID Mata Pelajaran</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilMapel->id_matapelajaran ?>" name="id_matapelajaran" disabled>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_matapelajaran" class="col-2 col-form-label">Nama Mata Pelajaran</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilMapel->nama_matapelajaran ?>" name="nama_matapelajaran">
      </div>
    </div>

    <div class="form-group row">
      <label for="SKBM" class="col-2 col-form-label">SKBM</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilMapel->SKBM ?>" name="SKBM">
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
