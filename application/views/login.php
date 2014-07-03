<!DOCTYPE html>

  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Login | Farmagitechs</title>
    <meta name="author" content="John">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Clinical App">
    <meta name="keywords" content="Clinical system, Clinic, Klinik, Apotek, Farmasi, Pharmacy">
    <script src="<?= base_url('assets/js/html5-trunk.js') ?>"></script>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>" />
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

    <style type="text/css">
    body{
        background: #2b2b2b;
      }
    </style>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>


    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/bootbox.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#username').focus();
        localStorage.setItem("dc_menu", '');
        localStorage.setItem("dc_nama_menu", '');
        localStorage.setItem("dc_modul", '');

        $('#logmein ').submit(function(){
          cek_shift();
        });
    });

    function cek_shift(){
      var shift_now = $('#shift').val();
      $.ajax({
            url: '<?= base_url("app/cek_shift") ?>/'+shift_now,
            dataType: 'json',
            success: function(data) {
                var message = data.message;

                if (data.status === false) {
                  bootbox.dialog({
                    message: message,
                    title: "Informasi",
                    buttons: {
                      batal: {
                        label: '<i class="fa fa-refresh"></i> Sesuaikan dengan shift sekarang',
                        className: "btn-default",
                        callback: function() {
                          $('#shift').val(data.shift);
                        }
                      },
                      hapus: {
                        label: '<i class="fa fa-trash-o"></i>  Lanjutkan',
                        className: "btn-primary",
                        callback: function() {
                          logmein();
                        }
                      }
                    }
                  });

                }else{
                  logmein();
                }
            }
        });
    }
    function logmein() {
        $.ajax({
            url: '<?= base_url("users/logmein") ?>',
            data: $('#logmein').serialize(),
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if (data.status === true) {
                    location.reload();
                } else {
                    location.reload();
                }
            }
        });
    }
    </script>
  </head>

  <body>
    
    <!-- Main Container start -->
    <div class="main-container">
      <div class="row">
        <form class="login-wrapper" id="logmein" method="post">
          <div class="header">
            <div class="row">
              <div class="col-md-12">
                <h3>Login<img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Logo" class="pull-right"></h3>
                <p>Isikan Username dan password untuk login.</p>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <input class="input col-md-12 col-sm-12 email" id="username" name="username" placeholder="Username" required="required" type="text" value="" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <input class="input col-md-12 col-sm-12 password" id="password" name="password" placeholder="Password" required="required" type="password" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <?= form_dropdown('shift', $shift, $shift_now , 'id=shift class="input col-md-12 col-sm-12"') ?>
              </div>
            </div>
          </div>
          <div class="actions">
                <input type="button" class="btn btn-danger" onclick="cek_shift();" value="Log In" />
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
    <!-- Main Container end -->
  </body>
</html>