<?php
   include "../src/TenagaPendidik.php";

   $data = new TenagaPendidik();
   $tampilData = $data->tampilData();

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap
              align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Tenaga Pendidik</h1>
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
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>JK</th>
                  <th>Agama</th>
                  <th>Jabatan</th>
                  <th>TMT Sekolah</th>
                  <th>TMT PNS</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Tugas Tambahan</th>
                  <th>Aksi</th>
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
                <td><?=$value->tanggal_lahir ?></td>
                <td><?=$value->jenis_kelamin ?></td>
                <td><?=$value->agama ?></td>
                <td><?=$value->jabatan ?></td>
                <td><?=$value->TMT_sekolah ?></td>
                <td><?=$value->TMT_pns ?></td>
                <td><?=$value->alamat_guru ?></td>
                <td><?=$value->telp ?></td>
                <td><?=$value->tugas_tambahan ?></td>
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
            </tr>

          </tbody>
      </table>
  </div>

  </div>
</main>
