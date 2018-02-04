<?php
  include "../src/Pengguna.php";

  $data = new Pengguna();
  $tampilPengguna = $data->dataPengguna($_GET['username']);



?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pengguna</h1>
  </div>

  <form class="" action="pages/pengguna/proses-edit-pengguna.php" method="post">

    <div class="form-group row">
      <label for="username" class="col-2 col-form-label">Nama Pengguna</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilPengguna->username ?>" name="username">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-2 col-form-label">Password</label>
      <div class="col-10">
        <input class="form-control" type="password" value="<?=$tampilPengguna->password ?>" name="password">
      </div>
    </div>

    <div class="form-group row">
      <label for="level" class="col-2 col-form-label">Level</label>
      <div class="col-10">
        <select class="form-control" type="options" value="<?=$tampilPengguna->level ?>" name="level">
          <option>USER</option>
          <option>SUPER USER</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="nip" class="col-2 col-form-label">NIP</label>
      <div class="col-10">
        <input class="form-control" type="text" value="<?=$tampilPengguna->NIP ?>" name="nip" disabled>
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
