<?php
  include "../../../src/Pengguna.php";

  if (isset($_POST) && sizeof($_POST) > 0){
      $data = new Pengguna();

      $data->tambahData($_POST);

      header("Location: ../../?page=pengguna");

      exit;
  }


  // var_dump($_POST);
?>
