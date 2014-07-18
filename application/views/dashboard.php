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
    <title>Sistem Rekomendasi</title>
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
    <link href="<?= base_url('assets/css/bootstrap-dialog.css')?>" rel="stylesheet">

    <!-- custom css -->
    <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/pnotify/jquery.pnotify.default.css') ?>" media="all" rel="stylesheet" type="text/css" />

    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/js/library.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-ui-1.8.23.custom.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap-dialog.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/pnotify/jquery.pnotify.min.js') ?>"></script>

    <script type="text/javascript">

      $(function(){
        var dc_menu = localStorage.getItem("dc_menu");
        var dc_nama_menu = localStorage.getItem("dc_nama_menu");
        if(dc_nama_menu !== ''){
          set_title_page(dc_nama_menu);
        }else{
          //set_title_page('');
        }
        if (dc_menu !== '') {
            $.ajax({
                url:dc_menu,
                data: '',
                cache: false,
                success: function(data) {
                    $('#main_content').empty();
                    $('#main_content').html(data);                        
                }
            });
        }
      });

      function load_menu(url,menu) {
            localStorage.setItem("dc_menu", '<?= base_url("'+url+'") ?>');
            localStorage.setItem("dc_nama_menu", menu);
            set_title_page(menu);
       
            $.ajax({
                url:'<?= base_url("'+url+'") ?>',
                data: '',
                cache: false,
                success: function(data) {
                    //$('form').remove();
                    $('#main_content').empty();
                    $('#main_content').html(data);                        
                }
            });
            

        }

        function set_title_page(menu){
          $('#title_menu').html(menu);
          $('#breadcumb_menu').html(menu);
        }

        function logout(){
          location.href="<?= base_url('app/logout') ?>";
        }
    </script>

  </head>

  <body>

    <!-- Header start -->
    <header>

      <!-- Logo start -->
      <div class="logo">
        C<span>BR</span>
      </div>
      <!-- Logo end -->

      <!-- Optional Dropdown start -->
      <div id="optional-dropdown">
        <ul>
          <li>
            <a href="index.html">
              <span class="fs1" aria-hidden="true" data-icon="&#xe000;" ></span>
            </a>
          </li>
          <li>
            <a href="invoice.html">
              <span class="fs1" aria-hidden="true" data-icon="&#xe099;"></span>
              <span class="count-label"></span>
            </a>
            <ul>
              <li>
                <a href="invoice.html"><span class="fs1" aria-hidden="true" data-icon="&#xe004;"></span> Invoice</a>
              </li>
              <li>
                <a href="maps.html"><span class="fs1" aria-hidden="true" data-icon="&#xe042;"></span> Maps</a>
              </li>
              <li>
                <a href="profile.html"><span class="fs1" aria-hidden="true" data-icon="&#xe074;"></span> Profile</a>
              </li>
              <li>
                <a href="typography.html"> <span class="fs1" aria-hidden="true" data-icon="&#xe141;"></span> Typography</a>
              </li>
              <li>
                <a href="calendar.html"><span class="fs1" aria-hidden="true" data-icon="&#xe052;"></span> Calendar</a>
              </li>
              <li>
                <a href="mail.html"><span class="fs1" aria-hidden="true" data-icon="&#xe004;"></span> Messages</a>
              </li>
              <li>
                <a href="icons.html"><span class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></span> Icons</a>
              </li>
              <li>
                <a href="grid.html"><span class="fs1" aria-hidden="true" data-icon="&#xe14c;"></span> Grid</a>
              </li>
              <li>
                <a href="error.html"><span class="fs1" aria-hidden="true" data-icon="&#xe0f4;"></span> 404</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="mail.html">
              <span class="fs1" aria-hidden="true" data-icon="&#xe040;" ></span>
              <span class="count-label"></span>
            </a>
          </li>
        </ul>
      </div>
      <!-- Optional Dropdown end -->

      <!-- Search bar start -->
      <div class="custom-search">
        <input type="text" class="search-query">
        <button> <span class="fs1" aria-hidden="true" data-icon="&#xe07f;"></span></button>
      </div>
      <!-- Search bar end -->

      <!-- Mini navigation start -->
      <div id="mini-nav">
        <ul>
         
    

          <li>
            <a href="login.html">
              <span class="text-label"><?= $this->session->userdata('user') ?> </span><span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
            </a>
            <ul class="user-summary">
              <li>
                <div class="summary">
                  <div class="user-pic">
                    <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="Slick Admin"/>
                  </div>
                  <div class="basic-details">
                    <h4 class="no-margin"><?= $this->session->userdata('nama') ?></h4>
                    <h5 class="no-margin"><?= $this->session->userdata('profesi') ?></h5>
                    <small></small>
                  </div>
                  <div class="profile-progress">
                   
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                <button class="btn btn-xs btn-danger pull-right" onclick="logout()">Logout</button>
                <span class="clearfix"></span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Mini navigation end -->

    </header>
    <!-- Header end -->

    <!-- Main Container start -->
    <div class="main-container">

      <!-- Mian navigation start -->
      <div id="mainnav">
        
        <!-- User pic start -->
        
        <!-- User pic end -->

        <ul>
          <li class="active">
            <span class="current-arrow">&nbsp;</span>
            <a href="<?= base_url() ?>">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a2;"></span>
              </div>
              Home
            </a>
          </li>

          <?php foreach ($menu as $key => $m): ?>
          <li>
            <a onclick="load_menu('<?= $m->url?>', '<?= $m->nama?>')" style="cursor:pointer;">
              <div class="icon">
                <span class="fs1 <?= $m->icon ?>" aria-hidden="true"></span>
              </div>
              <?= $m->nama ?>
            </a>
          </li>

          <?php endforeach; ?>

      
        </ul>
      </div>
      <!-- Mian navigation end -->

      <!-- Dashboard wrapper start -->
      <div class="dashboard-wrapper">

        <!-- Page title start -->
        <div class="row page-title">
          <h2>
            <span id="title_menu">Home</span>
            <small>
              <li>Home</li>
              <li>/</li>
              <li id="breadcumb_menu"></li>
            </small>
          </h2>
         
        </div>
        <!-- Page title end -->
          
        <div id="main_content">Main page</div>


      
      </div>
      <!-- Dashboard wrapper end -->
    
    </div>
    <!-- Main Container end -->


    <!-- Scripts -->

    <!--<script src="<?= base_url() ?>/assets/js/wysiwyg/wysihtml5-0.3.0.js"></script> -->


    <!-- Flot charts 
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.resize.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.tooltip.js"></script>
    -->
    <!-- Easy pie charts 
    <script src="<?= base_url() ?>/assets/js/jquery.easy-pie-chart.js"></script> -->

    <!-- Tiny Scrollbar JS 
    <script src="<?= base_url() ?>/assets/js/tiny-scrollbar.js"></script> -->

    <!-- Sparkline JS 
    <script src="<?= base_url() ?>/assets/js/jquery.sparkline.js"></script> -->

    <!-- <script src="<?= base_url() ?>/assets/js/rating/jquery.raty.js"></script> -->




    
   
  </body>
</html>