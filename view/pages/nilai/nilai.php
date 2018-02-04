<?php
   include "../src/Nilai.php";

   $data = new Nilai();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Nilai</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="?page=tambah-nilai" class="btn btn-secondary">Tambah Nilai</a>
  </div>
  </div>


  <div class="table-responsive">

    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>Mata Pelajaran</th>
          <th>NIS</th>
          <th>UTS</th>
          <th>US</th>
          <th>UN</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->id_matapelajaran ?></td>
          <td><?=$value->NIS ?></td>
          <td><?=$value->UTS ?></td>
          <td><?=$value->US ?></td>
          <td><?=$value->UN ?></td>
          <td><?=$value->keterangan ?></td>
          <td>
            <a href="?page=edit-nilai&id_matapelajaran=<?=$value->id_matapelajaran ?>">
              edit
            </a>
            <a href="#">hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
        </tr>

      </tbody>
    </table>

  </div>
</main>
