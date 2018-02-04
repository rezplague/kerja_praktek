<?php
   include "../src/Pengguna.php";

   $data = new Pengguna();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengguna</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="?page=tambah-pengguna" class="btn btn-secondary">Tambah Pengguna</a>
  </div>
</div>


  <div class="table-responsive">

    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>Nama Pengguna</th>
          <th>Password</th>
          <th>Level</th>
          <th>NIP</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->username ?></td>
          <td><?=$value->password ?></td>
          <td><?=$value->level ?></td>
          <td><?=$value->NIP ?></td>
          <td>
            <a href="?page=edit-pengguna&username=<?=$value->username ?>">
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
