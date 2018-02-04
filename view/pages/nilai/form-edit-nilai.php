<?php
  include "../src/Nilai.php";

  $data = new Nilai();
  $tampilNilai = $data->dataNilai($_GET['id_matapelajaran']);



?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Nilai</h1>
  </div>

  <form class="" action="index.html" method="post">

    <div class="form-group row">
      <label for="id_matapelajaran" class="col-2 col-form-label">ID Matapelajaran</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNilai->id_matapelajaran ?>" name="id_matapelajaran">
      </div>
    </div>

    <div class="form-group row">
      <label for="NIS" class="col-2 col-form-label">NIS</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilNilai->NIS ?>" name="NIS">
      </div>
    </div>

    <div class="form-group row">
      <label for="UTS" class="col-2 col-form-label">UTS</label>
      <div class="col-10">
        <input class="form-control" type="number" value="<?=$tampilNilai->UTS ?>" name="UTS">
      </div>
    </div>

    <div class="form-group row">
      <label for="US" class="col-2 col-form-label">US</label>
      <div class="col-10">
        <input class="form-control" type="number" value="<?=$tampilNilai->US ?>" name="US">
      </div>
    </div>

    <div class="form-group row">
      <label for="UN" class="col-2 col-form-label">UN</label>
      <div class="col-10">
        <input class="form-control" type="number" value="<?=$tampilNilai->UN ?>" name="UN">
      </div>
    </div>

    <div class="form-group row">
      <label for="keterangan" class="col-2 col-form-label">Keterangan</label>
      <div class="col-10">
        <input class="form-control" type="number" value="<?=$tampilNilai->keterangan ?>" name="keterangan">
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
