<?php
   include "../src/TenagaPendidik.php";

   $data = new TenagaPendidik();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap
              align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Pendidik</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="?page=tambah-tenaga-pendidik" class="btn btn-secondary">
        Tambah Tenaga Pendidik
      </a>
    </div>
  </div>

  <div class="table-responsive">
      <table class="table table-hover table-inverse">
          <thead class="table-secondary">
              <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>TEMPAT LAHIR</th>
                  <!-- <th>TANGGAL LAHIR</th>
                  <th>JK</th>
                  <th>AGAMA</th>
                  <th>JABATAN</th>
                  <th>TMT SEKOLAH</th>
                  <th>TMT PNS</th>
                  <th>ALAMAT</th>
                  <th>TELEPON</th>
                  <th>TUGAS TAMBAHAN</th> -->
                  <th>AKSI</th>
               </tr>
          </thead>

          <tbody>
            <?php
            foreach ($tampilData as $value) {
            ?>
            <tr>
                <td><?=$value->NIP ?></td>
                <td><?=$value->nama_guru ?></td>
                <td><?=$value->tempat_lahir ?></td>
                  <td>
                    <a href="?page=edit-tenaga-pendidik&nip=<?=$value->NIP ?>">
                      edit
                    </a>
                    <a href="#">hapus</a>
                  </td>
            </tr>
            <?php
            }
            ?>

          </tbody>
      </table>
  </div>

  </div>
</main>
