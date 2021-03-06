<?php
   include "../src/PesertaDidik.php";

   $data = new PesertaDidik();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Peserta Didik</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="?page=tambah-peserta-didik" class="btn btn-secondary">Tambah Peserta Didik</a>
    </div>
  </div>


  <div class="table-responsive">

    <table class="table table-hover table-inverse">
      <thead class="table-secondary">
        <tr>
          <th>NIS</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>JK</th>
          <th>AGAMA</th>
          <th>Alamat</th>
          <th>Jenis Kelainan</th>
          <th>Nama Ayah</th>
          <th>Nama Ibu</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($tampilData as $value) {
        ?>
        <tr>
          <td><?=$value->NIS ?></td>
          <td><?=$value->NISN ?></td>
          <td><?=$value->nama_siswa ?></td>
          <td><?=$value->tempat_lahir ?></td>
          <td><?=$value->tanggal_lahir ?></td>
          <td><?=$value->jenis_kelamin ?></td>
          <td><?=$value->agama ?></td>
          <td><?=$value->alamat_siswa ?></td>
          <td><?=$value->jenis_kelainan ?></td>
          <td><?=$value->nama_ayah ?></td>
          <td><?=$value->nama_ibu ?></td>
          <td>
            <a href="?page=edit-peserta-didik&nis=<?=$value->NIS ?>">
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

  </div>
</main>
