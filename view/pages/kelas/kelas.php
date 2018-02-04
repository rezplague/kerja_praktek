<?php
   include "../src/Kelas.php";

   $data = new Kelas();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelas</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="?page=tambah-kelas" class="btn btn-secondary">Tambah Kelas</a>
    </div>
  </div>


  <div class="table-responsive">

    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>ID Kelas</th>
          <th>Nama Kelas</th>
          <th>Tahun Ajaran</th>
          <th>Semester</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->id_kelas ?></td>
          <td><?=$value->nama_kelas ?></td>
          <td><?=$value->tahun_ajaran ?></td>
          <td><?=$value->semester ?></td>
          <td>
            <a href="?page=edit-kelas&id_kelas=<?=$value->id_kelas ?>">
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
