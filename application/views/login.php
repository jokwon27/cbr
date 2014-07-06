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
    <title>Slick Admin</title>
    <meta name="author" content="John">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Slick Admin Admin UI">
    <meta name="keywords" content="Slick Admin, Admin UI, Admin Dashboard, John">
    
    <script src="<?= base_url() ?>/assets/js/html5-trunk.js"></script>
    
    <link href="<?= base_url() ?>/assets/icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- custom css -->
    <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(function(){
      $('#formsign').submit(function(){
        
        $.ajax({
              url: '<?= base_url("app/login") ?>',
              type: 'POST',
              dataType: 'json',
              data: $('#formsign').serialize(),
              cache: false,
              success: function(data) {
                console.log(data)
                 location.href = "<?= base_url('')?>";
              }
          });

        return false;
      });

      $('#formsign').hide();
      $('#formsign').show('slow');
    });
  

    </script>
  </head>

  <body>
    
    <!-- Main Container start -->
    <div class="main-container">
      <div class="row">
        
        <?= form_open('','id=formsign class="login-wrapper"') ?>
          <div class="header">
            <div class="row">
              <div class="col-md-12">
                <h3>Login <!--<img src="<?= base_url() ?>/assets/img/logo.png" alt="Logo" class="pull-right"> --></h3>
                <p>Fill out the form below to login.</p>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <input name="username" class="input col-md-12 col-sm-12 email" id="" name="" placeholder="Username" required="required" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <input name="password" class="input col-md-12 col-sm-12 password" id="" name="" placeholder="********" required="required" type="password">
              </div>
            </div>
          </div>
          <div class="actions">
            <button type="submit" class="btn btn-danger">Login</button>
            <!-- <a class="link" href="#">Forgot Password?</a> -->
            <div class="clearfix"></div>
          </div>
        <?= form_close() ?>
      </div>
    </div>
    <!-- Main Container end -->
  </body>
</html>