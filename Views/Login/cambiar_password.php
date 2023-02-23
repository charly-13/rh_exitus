<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= media(); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= media(); ?>/img/icon_exitus.jpg">
  <title>
  <?= $data['page_tag']; ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= media(); ?>/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= media(); ?>/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= media(); ?>/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= media(); ?>/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="<?= media();?>/css/mis_estilos.css">
</head>

<body class="">
  <!-- Navbar -->

  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
      style="background-image: url('<?= media() ?>/img/curved-images/curved9.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenido</h1>
            <p class="text-lead text-white">Exitus Capital</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="mt-2 position-relative text-center">
                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                  Cambio de credenciales
                </p>
              </div>
            </div>
            <div class="card-body">
            <div id="divLoading">
              <div>
                <img src="<?= media(); ?>/img/loading.svg" alt="Loading">
              </div>
            </div>
              <form role="form" id="formCambiarPass" name="formCambiarPass">
                <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required>
                <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required>
                <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Nueva contraseña"
                    aria-label="Nueva contraseña" id="txtPassword" name="txtPassword">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirmar contraseña"
                    aria-label="Confirmar contraseña" id="txtPasswordConfirm" name="txtPasswordConfirm">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">REINICIAR</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script>
        const base_url = "<?= base_url(); ?>";
    </script>
  <script src="<?= media() ?>/js/core/popper.min.js"></script>
  <script src="<?= media() ?>/js/core/bootstrap.min.js"></script>
  <script src="<?= media() ?>/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= media() ?>/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="<?= media() ?>/js/plugins/dragula/dragula.min.js"></script>
  <script src="<?= media() ?>/js/plugins/jkanban/jkanban.js"></script>

  <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= media() ?>/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>