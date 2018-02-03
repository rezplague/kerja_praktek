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
<<<<<<< HEAD
                  <th>NAMA</th>
                  <th>TEMPAT LAHIR</th>
                  <!-- <th>TANGGAL LAHIR</th>
=======
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
>>>>>>> c402900e7b023c88e25f0c99edd5af3a2ed8153a
                  <th>JK</th>
                  <th>Agama</th>
                  <th>Jabatan</th>
                  <th>TMT Sekolah</th>
                  <th>TMT PNS</th>
<<<<<<< HEAD
                  <th>ALAMAT</th>
                  <th>TELEPON</th>
                  <th>TUGAS TAMBAHAN</th> -->
                  <th>AKSI</th>
=======
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Tugas Tambahan</th>
                  <th>Aksi</th>
>>>>>>> c402900e7b023c88e25f0c99edd5af3a2ed8153a
               </tr>
          </thead>

          <tbody>
<<<<<<< HEAD
            <?php
            foreach ($tampilData as $value) {
            ?>
            <tr>
                <td><?=$value->NIP ?></td>
                <td><?=$value->nama_guru ?></td>
                <td><?=$value->tempat_lahir ?></td>
                  <td>
                    <a href="?page=edit-tenaga-pendidik&nip=<?=$value->NIP ?>">
=======
              <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>
                    <a href="?page=edit-tenaga-pendidik">
>>>>>>> c402900e7b023c88e25f0c99edd5af3a2ed8153a
                      edit
                    </a>
                    <a href="#">hapus</a>
                  </td>
<<<<<<< HEAD
            </tr>
            <?php
            }
            ?>

=======
              </tr>
>>>>>>> c402900e7b023c88e25f0c99edd5af3a2ed8153a
          </tbody>
      </table>
  </div>

  </div>
</main>
