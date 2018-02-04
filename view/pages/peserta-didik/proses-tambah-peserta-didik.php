<?php
  include "../../../src/PesertaDidik.php";

  if (isset($_POST) && sizeof($_POST) > 0){
      $data = new PesertaDidik();

      $data->tambahData($_POST);

      header("Location: ../../?page=peserta-didik");

      exit;
  }


  // var_dump($_POST);
?>
