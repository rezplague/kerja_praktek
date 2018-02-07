<?php
   include "../src/Laporan.php";

   $data = new Nilai();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Nilai</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="pages/laporan/cetak-nilai.php" class="btn btn-secondary">Cetak Nilai</a>
  </div>
  </div>


  <div class="table-responsive">

    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>Nama Mata Pelajaran</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>UTS</th>
          <th>US</th>
          <th>UN</th>
          <th>Keterangan</th>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->nama_matapelajaran ?></td>
          <td><?=$value->NIS ?></td>
          <td><?=$value->nama_siswa ?></td>
          <td><?=$value->UTS ?></td>
          <td><?=$value->US ?></td>
          <td><?=$value->UN ?></td>
          <td><?=$value->keterangan ?></td>
        </tr>
        <?php
        }
        ?>
        </tr>

      </tbody>
    </table>

  </div>
</main>
