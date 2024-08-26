</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Library - List</title>
    <link href="<?= base_url("css/style.css") ?>" rel="stylesheet">
    <link href="<?= base_url("vendor-coreui/datatables.net-bs4/css/dataTables.bootstrap4.css") ?>" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </script>
</head>
<body class="c-app">
    <?php
        $this->load->view("template-dashboard/sidebar.php");
    ?>
    <div class="c-wrapper c-fixed-components">
        <?php
            $this->load->view("template-dashboard/topbar.php");
        ?>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="row justify-content-start">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="float-start display-3 me-4">404</h1>
                        <h4 class="pt-3">Oops! You're lost.</h4>
                        <p class="text-medium-emphasis">The page you are looking for was not found.</p>
                    </div>
                </div>
            </div>
          </div>
        </main>
        <?php
            $this->load->view("template-dashboard/footer");
        ?>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?= base_url("vendor-coreui/@coreui/coreui-pro/js/coreui.bundle.min.js") ?>"></script>
    <!--[if IE]><!-->
    <script src="<?= base_url("vendor-coreui/@coreui/icons/js/svgxuse.min.js") ?>"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    
    <script src="<?= base_url("vendor-coreui/datatables.net/js/jquery.dataTables.js") ?>"></script>
    <script src="<?= base_url("vendor-coreui/datatables.net-bs4/js/dataTables.bootstrap4.min.js") ?>"></script>
    <script src="<?= base_url("js/datatables.js") ?>"></script>
    <script>var table = $("#table-form-pekerjaan").DataTable();</script>
  </body>

</html>

