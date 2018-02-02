<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SLB ABC Muhammadiyah</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <!-- Header -->
    <?php
      include "header.php";
    ?>

    <div class="container-fluid">
      <div class="row">

        <!-- Side-nav -->
        <?php
          include "sidenav.php";
        ?>

        <!-- Content -->
        <?php
          if (empty($_GET)){
             include "pages/dashboard/dashboard.php";
             exit;
          }


          # Tenaga Pendidik
          # ====================================================================
          if ($_GET['page'] == 'tenaga-pendidik'){
              include "pages/tenaga-pendidik/tenaga-pendidik.php";
          }

          if ($_GET['page'] == 'tambah-tenaga-pendidik'){
              include "pages/tenaga-pendidik/form-tambah-tenaga-pendidik.php";
          }

          if ($_GET['page'] == 'edit-tenaga-pendidik'){
              include "pages/tenaga-pendidik/form-edit-tenaga-pendidik.php";
          }
          # ====================================================================

          # Peserta Didik
          # ====================================================================
          if ($_GET['page'] == 'peserta-didik'){
              include "pages/peserta-didik/peserta-didik.php";
          }

          if ($_GET['page'] == 'tambah-peserta-didik'){
              include "pages/peserta-didik/form-tambah-peserta-didik.php";
          }

          if ($_GET['page'] == 'edit-peserta-didik'){
              include "pages/peserta-didik/form-edit-peserta-didik.php";
          }
          # ====================================================================

          # Mata Pelajaran
          # ====================================================================
          if ($_GET['page'] == 'mata-pelajaran'){
              include "pages/mata-pelajaran/mata-pelajaran.php";
          }

          if ($_GET['page'] == 'tambah-mata-pelajaran'){
              include "pages/mata-pelajaran/form-tambah-mata-pelajaran.php";
          }

          if ($_GET['page'] == 'edit-mata-pelajaran'){
              include "pages/mata-pelajaran/form-edit-mata-pelajaran.php";
          }
          # ====================================================================

          if ($_GET['page'] == 'kelas'){
              include "pages/kelas/kelas.php";
          }







        ?>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
