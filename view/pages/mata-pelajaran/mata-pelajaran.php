<?php
   include "../src/MataPelajaran.php";

   $data = new MataPelajaran();
   $tampilData = $data->tampilData();

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Mata Pelajaran</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="?page=tambah-mata-pelajaran" class="btn btn-secondary">Tambah Mata Pelajaran</a>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>ID Mata Pelajaran</th>
          <th>Nama Mata Pelajaran</th>
          <th>SKBM</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->id_matapelajaran ?></td>
          <td><?=$value->nama_matapelajaran ?></td>
          <td><?=$value->SKBM ?></td>
          <td>
            <a href="?page=edit-mata-pelajaran&id_matapelajaran=<?=$value->id_matapelajaran ?>">
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
