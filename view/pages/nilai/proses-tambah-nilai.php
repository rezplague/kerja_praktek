<?php
  include "../../../src/Nilai.php";

  if (isset($_POST) && sizeof($_POST) > 0){
      $data = new Nilai();

      $data->tambahData($_POST);

      header("Location: ../../?page=nilai");

      exit;
  }


  // var_dump($_POST);
?>
