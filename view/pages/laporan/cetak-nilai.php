<?php
   include "../../../src/Laporan.php";

   $data = new Nilai();
   $tampilData = $data->tampilData();

 ?>
<center>
  <h4>Laporan Data Nilai</h4>
</center>

<hr>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

<table  width="100%" border="4" cellspacing="0" cellpadding="0" class="table table-bordered">
<thead>
  <th width="5%" align="center" valign="top"><span class="style5">Mata Pelajaran</span></th>
  <th width="12%" align="center" valign="top"><span class="style5">NIS</span></th>
  <th width="10%" align="center" valign="top"><span class="style5">Nama</span></th>
  <th width="13%" align="center" valign="top"><span class="style5">UTS</span></th>
  <th width="9%" align="center" valign="top"><span class="style5">US</span></th>
  <th width="7%" align="center" valign="top"><span class="style5">UN</span></th>
  <th width="10%" align="center" valign="top"><span class="style5">Keterangan</span></th>
</thead>

  <?php
  foreach ($tampilData as $value) {
  ?>
  <tr>
    <td align="center" valign="top"><span class="style5"><?=$value->nama_matapelajaran ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->NIS ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->nama_siswa ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->UTS ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->US ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->UN ?></span></td>
    <td align="center" valign="top"><span class="style5"><?=$value->keterangan ?></span></td>
  </tr>
<?php } ?>
 </table>
