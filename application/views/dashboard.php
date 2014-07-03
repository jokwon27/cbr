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
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- custom css -->
    <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">

    <script type="text/javascript">

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
    </script>

  </head>

  <body>

    <!-- Header start -->
    <header>

      <!-- Logo start -->
      <div class="logo">
        S<span>lick</span>
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
          <li class="hidden-sm">
            <a href="maps.html">Dropdown
              <span class="fs1" aria-hidden="true" data-icon="&#xe099;"></span>
              <span class="count-label">7</span>
            </a>
            <ul>
              <li>
                <a href="maps.html"><span class="fs1" aria-hidden="true" data-icon="&#xe042;"></span> Maps</a>
              </li>
              <li>
                <a href="invoice.html"><span class="fs1" aria-hidden="true" data-icon="&#xe004;"></span> Invoice</a>
              </li>
            </ul>
          </li>
          <li class="hidden-sm">
            <a href="maps.html">
              <span class="fs1" aria-hidden="true" data-icon="&#xe042;" ></span>
              <span class="count-label">6</span>
            </a>
            <ul>
              <li>
                <a href="maps.html"><span class="fs1" aria-hidden="true" data-icon="&#xe042;"></span> Maps</a>
              </li>
            </ul>
          </li>
          <li class="hidden-sm">
            <a href="mail.html">
              <span class="fs1" aria-hidden="true" data-icon="&#xe049;" ></span>
              <span class="count-label">5</span>
            </a>
            <ul>
              <li>
                <a href="mail.html"><span class="fs1" aria-hidden="true" data-icon="&#xe049;"></span> Messages</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="login.html">
              <span class="text-label">Mr. John </span><span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
            </a>
            <ul class="user-summary">
              <li>
                <div class="summary">
                  <div class="user-pic">
                    <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="Slick Admin"/>
                  </div>
                  <div class="basic-details">
                    <h4 class="no-margin">Johnny</h4>
                    <h5 class="no-margin">UX Designer</h5>
                    <small>Garabandha, India</small>
                  </div>
                  <div class="profile-progress">
                    <div class="chart-progress" data-percent="68">
                      68%
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                <button class="btn btn-xs btn-danger pull-right" onclick="location.href='login.html'">Logout</button>
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
        <div class="user-profile-pic">
          <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="Slick Admin">
        </div>
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
                <span class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></span>
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

    <script src="<?= base_url() ?>/assets/js/wysiwyg/wysihtml5-0.3.0.js"></script>

    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-ui-1.8.23.custom.min.js"></script>


    <!-- Flot charts -->
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.resize.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/flot/jquery.flot.tooltip.js"></script>

    <!-- Easy pie charts -->
    <script src="<?= base_url() ?>/assets/js/jquery.easy-pie-chart.js"></script>

    <!-- Tiny Scrollbar JS -->
    <script src="<?= base_url() ?>/assets/js/tiny-scrollbar.js"></script>

    <!-- Sparkline JS -->
    <script src="<?= base_url() ?>/assets/js/jquery.sparkline.js"></script>

    <script src="<?= base_url() ?>/assets/js/rating/jquery.raty.js"></script>

    <!-- custom Js -->
    <script src="<?= base_url() ?>/assets/js/custom-index.js"></script>

    <script src="<?= base_url() ?>/assets/js/custom.js"></script>


    
    <script type="text/javascript">
      $(function() {
      $.fn.raty.defaults.path = 'img';

      $('#rate3').raty({ score: 3 });
      $('#rate5').raty({ score: 5 });
      $('#rate1').raty({ score: 1 });
    });
    </script>
  </body>
</html>