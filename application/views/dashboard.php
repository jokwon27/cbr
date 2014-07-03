<!DOCTYPE html>

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Farmagitech</title>
    <meta name="author" content="John">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Clinical App">
    <meta name="keywords" content="Clinical system, Clinic, Klinik, Apotek, Farmasi, Pharmacy">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>" />

    <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
    <!-- Scripts -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap-modalmanager.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.multilevelpushmenu.js"></script>
    <script src="<?= base_url() ?>assets/js/bootbox.js"></script>
    <script src="<?= base_url() ?>assets/js/library.js"></script>
    <script src="<?= base_url() ?>assets/js/select2.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.treetable.js"></script>
    <script src="<?= base_url('assets/highchart/highcharts.js') ?>"></script>
    <script src="<?= base_url('assets/highchart/themes/grid.js') ?>"></script>
    <script src="<?= base_url('assets/highchart/modules/exporting.js') ?>"></script>

    <script src="<?= base_url('assets/pnotify/jquery.pnotify.min.js') ?>"></script>

    <script type="text/javascript">
        var dWidth = $(window).width();
        var dHeight= $(window).height();
        var x = screen.width/2 - dWidth/2;
        var y = screen.height/2 - dHeight/2;
        
        function show_ajax_indicator(){
          $('body').block({ 
                message: '<h1><img src="<?= base_url() ?>assets/img/loading_.gif" /> Loading...</h1>', 
                css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: '#000', 
                    '-webkit-border-radius': '10px', 
                    '-moz-border-radius': '10px', 
                    opacity: .5, 
                    color: '#fff' 
                } 
            }); 
        }

        function hide_ajax_indicator(){
            $('body').unblock(); 
        }


        $(function(){

            $('body').ajaxError(function(e, jqxhr, settings, exception) {
                var url = settings.url;
                var res = jqxhr.responseText;
                var status = jqxhr.statusText;
                var status_code = jqxhr.status;
                var menu = localStorage.getItem("dc_nama_menu");
                //console.log($(res).find('body'));

                $.each( $.parseHTML(res), function( i, el ) {
                  if (el.nodeName == 'DIV') {
                    res = $(el).html();
                  };
                  
                });

                if(status_code === 401){
                  // un authoized
                  bootbox.dialog({
                    message: "Session login anda habis, silahkan login lagi",
                    title: "Session Timeout",
                    buttons: {
                      ok: {
                        label: '<i class="fa fa-check"></i> OK',
                        className: "btn-primary",
                        callback: function() {
                          location.reload();
                        }
                      }
                    }
                  });
                  return false;
                }

                if (status_code !== 404) {

                    $.ajax({
                      type : 'POST',
                      url: '<?= base_url("api/sistem/log") ?>',               
                      data: "url="+url+"&response="+res+"&status="+status+"&menu="+menu,
                      cache: false,
                      success: function(data) {
                         // location.reload();
                      }
                  }); 
                }else{
                 // message_custom('info', 'Informase', 'Data tidak ditemukan','');
                }
                   
            });

            $('#menu').multilevelpushmenu({ 
              containersToPush: [$( '#pushobj' )],
              backText: 'Kembali'
            });

            if (localStorage.getItem("dc_modul") !== '') {
              $('#menu').multilevelpushmenu('expand', localStorage.getItem("dc_modul"));
            };
            

            if ('<?= $active ?>' == '') {
              localStorage.setItem("dc_menu",'');
              localStorage.setItem("dc_nama_menu", '');
              localStorage.setItem("dc_modul", '');
            };
            

            var height = $(window).height();
            $('.dashboard-wrapper').css('min-height',height-55+ 'px');
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

        function load_modul(url){
            localStorage.setItem("dc_menu",'');
            localStorage.setItem("dc_nama_menu", '');
            location.href = url;            
        }

        function gotohome(){
          localStorage.setItem("dc_modul", '');
          location.href = '<?= base_url() ?>';
        }

        function load_menu(url,nama_modul, modul, menu) {
            localStorage.setItem("dc_menu", '<?= base_url("'+url+'") ?>');
            localStorage.setItem("dc_nama_menu", menu);
            localStorage.setItem("dc_modul", nama_modul);
            set_title_page(menu);
            if (modul != '') {
                // Pindah modul
                modul = modul.replace(' ','');
                location.href = '<?= base_url("'+modul+'") ?>';
            }else{
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

        }

        function set_title_page(menu){
          $('#title_menu').html(menu);
          $('#breadcumb_menu').html("<li>/</li><li>"+menu+"</li>");
        }

        function ganti_password(){
           $.ajax({
              url:'<?= base_url("app/ganti_password") ?>',
              cache: false,
              success: function(data) {
                  //$('form').remove();
                  $('#breadcumb_menu').html('')
                  $('#title_menu, #modul_aktif').html('Ganti Password');
                  $('#main_content').empty();
                  $('#main_content').html(data);                        
              }
          });
        }
    </script>
  </head>

  <body>

    <!-- Header start -->
    <header>

      <!-- Logo start -->
      <img src="<?= base_url('assets/img/company.png') ?>" width="45px" class="logoimage" align="left" />
      <div class="logo">
          FARMA<span>GITECHS</span><br/>
      </div>
      <div class="company-name"><?= $clinic->nama ?></div>
      <!-- Logo end -->

      <!-- Optional Dropdown start -->

      <!-- Optional Dropdown end -->

      <!-- Search bar start
      <div class="custom-search">
        <input type="text" class="search-query">
        <button> <span class="fs1" aria-hidden="true" data-icon="&#xe07f;"></span></button>
      </div>
       Search bar end -->

      <!-- Mini navigation start -->
      <div id="mini-nav">
        <ul>
            <li class="hidden-sm">
                <a href="#">
                    <span class="fa fa-globe fa-1p5x"></span>
                    <span class="count-label">3</span>
                </a>
                <ul class="user-summary">
                    <li>
                        <div class="summary">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe042;"></span> Maps</a>
                        </div>
                    </li>
                </ul>
            </li>
          <li>
            <?php
            $name = explode(' ', $this->session->userdata('nama'));
            ?>
            <a>
                <span class="text-label"><?= $name[0] ?> </span><span class="fa fa-home fa-1p5x"></span>
            </a>
            <ul class="user-summary">
              <li>
                <div class="summary">
                  <div class="user-pic">
                    <img src="<?= base_url() ?>assets/img/avatar-1.png" alt="Slick Admin"/>
                  </div>
                  <div class="basic-details">
                    <h4 class="no-margin"><?= $this->session->userdata('nama') ?></h4>
                    <h5 class="no-margin"><?= $this->session->userdata('profesi') ?> | Shift <?= $this->session->userdata('shift') ?></h5>
                    <h5 class="no-margin">Unit <?= $this->session->userdata('unit') ?></h5>
                    <small><?= $this->session->userdata('alamat') ?></small>
                  </div>
                  <div class="profile-progress">
                    <div class="chart-progress" data-percent="68">
                        
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                  <button class="btn btn-xs btn-danger pull-right" onclick="location.href='<?= base_url('users/logout') ?>'">Logout</button>
                  <button class="btn btn-xs btn-danger pull-right" onclick="ganti_password()">Ganti Password</button>
                  <span class="clearfix"></span>
              </li>
            </ul>
          </li>

        </ul>
      </div>
      <!-- Mini navigation end -->

    </header>
    <!-- Header end -->



      <!-- Dashboard wrapper start -->
      <div class="dashboard-wrapper">
              <!-- Main navigation start -->
        <div id="menu">
            <nav>
                <!-- <h2><i class="fa fa-bars"></i>Menu Utama</h2>-->
                <!--<h3>Menu</h3>-->
                
                <ul>
                  <li>
                      <a onclick="gotohome()" <?= ($active == '')?'':''?> ><b>HOME</b><br/>
                          <span style="font-size: 10px;">Halaman Pertama Sistem</span>
                      </a>
                  </li>
                    <?php foreach ($module as $key => $mod): ?>
                    <?php
                        $activ = "";
                        $modul = "";
                        $current = "";
                        if($active == $mod->nama){
                            $activ = '';
                            
                        }else{
                            $modul = strtolower($mod->nama);
                        }
                        $privileges = $this->m_app->get_data_privileges($this->session->userdata('id_group'),$mod->id);
                        $module_url = str_replace(' ', '', strtolower($mod->nama));
                    ?>
                        <li>
                            <a href="#"><b><?= strtoupper($mod->nama) ?></b><br/>
                                <span style="font-size: 10px;"><?= $mod->keterangan ?></span>
                            </a>
                            <h2 class=""><i class="fa <?= $mod->icon ?>"></i><?= $mod->nama ?></h2>
                            <?php if(sizeof($privileges) > 0): ?>
                            <ul>
                              <?php foreach ($privileges as $key2 => $value2): ?>
                              <li>
                                  <a onclick="load_menu('<?= $value2->url ?>', '<?= $mod->nama ?>','<?= $modul ?>', '<?= $value2->menu ?>')"><i class="fa <?= $value2->icon ?>"></i> <?= $value2->menu ?></a>
                              </li>
                              <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
          <!-- Main Container start -->
          
        <div id="pushobj">
        
          <!-- Page title start -->
          <div class="row page-title">
            <h2>
              <span id="title_menu"><?= $title ?></span>
              <small>
                <li>Home</li>
                <li>/</li>
                <li id="modul_aktif"><?= $active ?></li>
                <span id="breadcumb_menu"></span>
              </small>
            </h2>
            
          </div>
          <!-- Page title end -->

          <!-- Row start -->
          <div class="row" id="main_content">
              <img src="" width="100%" />
            <?php 
            if (isset($page)) {
              $this->load->view($page);
            }
            ?>
          </div>
          <!-- Row end -->
        
        </div>
        
      <!-- Main navigation end -->


    
      <!-- Dashboard wrapper end -->
    
    </div>
    <!-- Main Container end -->

  </body>
</html>