<?php
  include "../../../src/TenagaPendidik.php";

  if (isset($_POST) && sizeof($_POST) > 0){
      $data = new TenagaPendidik();

      $data->tambahData($_POST);

      header("Location: ../../?page=tenaga-pendidik");

      exit;
  }


  // var_dump($_POST);
?>
