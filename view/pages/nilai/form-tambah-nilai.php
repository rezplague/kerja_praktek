<?php
    include '../src/Nilai.php';

    $nilai = new Nilai();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Nilai</h1>
  </div>

  <form class="" action="pages/nilai/proses-tambah-nilai.php" method="post">

    <div class="form-group row">
      <label for="id_matapelajaran" class="col-2 col-form-label">ID Matapelajaran</label>
      <div class="col-10">
        <select name="id_matapelajaran" class="form-control">
          <?php foreach ($nilai->namaMataPelajaran() as  $value): ?>
            <option value="<?=$value->id_matapelajaran?>">
              <?= $value->id_matapelajaran.' || '.$value->nama_matapelajaran?>
            </option>

          <?php endforeach; ?>

        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="nis" class="col-2 col-form-label">NIS</label>
      <div class="col-10">
        <select name="nis" class="form-control">
          <?php foreach ($nilai->tampilNisNama() as  $value): ?>
            <option value="<?=$value->nis?>">
              <?= $value->nis.' || '.$value->nama_siswa?>
            </option>

          <?php endforeach; ?>

        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="uts" class="col-2 col-form-label">UTS</label>
      <div class="col-10">
        <input class="form-control" type="number" value="" name="uts">
      </div>
    </div>

    <div class="form-group row">
      <label for="us" class="col-2 col-form-label">US</label>
      <div class="col-10">
        <input class="form-control" type="number" value="" name="us">
      </div>
    </div>

    <div class="form-group row">
      <label for="un" class="col-2 col-form-label">UN</label>
      <div class="col-10">
        <input class="form-control" type="number" value="" name="un">
      </div>
    </div>

    <div class="form-group row">
      <label for="keterangan" class="col-2 col-form-label">Keterangan</label>
      <div class="col-10">
        <input class="form-control" type="number" value="" name="keterangan">
      </div>
    </div>

    <div class="form-group row">
      <label for="button" class="col-2 col-form-label"></label>
      <div class="col-10">
        <button class="btn" name="button">Tambah</button>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-10">
      </div>
    </div>


</form>


</main>
