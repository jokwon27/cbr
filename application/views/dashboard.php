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
            <a href="index.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a2;"></span>
              </div>
              Dashboard
            </a>
          </li>
          <li>
            <a href="ui-elements.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></span>
              </div>
              UI Elements
            </a>
          </li>
          <li>
            <a href="forms.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span>
              </div>
              Forms
            </a>
          </li>
          <li>
            <a href="charts.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe096;"></span>
              </div>
              Charts
            </a>
          </li>
          <li>
            <a href="invoice.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe099;"></span>
              </div>
              Bonus UI
            </a>
            <ul>
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="maps.html">Maps</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="typography.html">Typography</a>
              </li>
              <li>
                <a href="mail.html">Mail</a>
              </li>
              <li>
                <a href="calendar.html">Calendar</a>
              </li>
              <li>
                <a href="icons.html">Icons</a>
              </li>
              <li>
                <a href="grid.html">Grid</a>
              </li>
              <li>
                <a href="error.html">404</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="tables.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
              </div>
              Tables
            </a>
          </li>
          <li>
            <a href="gallery.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe00d;"></span>
              </div>
              Gallery
            </a>
          </li>
          <li>
            <a href="login.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
              </div>
              Login
            </a>
          </li>
        </ul>
      </div>
      <!-- Mian navigation end -->

      <!-- Dashboard wrapper start -->
      <div class="dashboard-wrapper">

        <!-- Page title start -->
        <div class="row page-title">
          <h2>
            Slick Dashboard 
            <small>
              <li>Home</li>
              <li>/</li>
              <li>Dashboard</li>
            </small>
          </h2>
          <ul class="stats hidden-xs">
            <li class="ruby-red-bg">
              <span id="currentSale" class="graph">
                2, 4, 8, 2, 4, 1
              </span>
              <div class="details">
                <span class="big">$8,597</span>
                <span class="small">Current Sale</span>
              </div>
            </li>
            <li class="light-grey-bg">
              <span id="currentBalance" class="graph">
                5, 2, 4, 9, 2, 3
              </span>
              <div class="details">
                <span class="big">$21,345</span>
                <span class="small">Current Balance</span>
              </div>
            </li>
          </ul>
        </div>
        <!-- Page title end -->
          


        <!-- Row start -->
        <div class="row">

          <!-- Span2 start -->
          <div class="col-md-2 col-sm-4">
            <div class="pie-chart">
              <div class="chart1" data-percent="48">
                6,144
              </div>
              <p class="name">
                Visits
              </p>
            </div>
          </div>
          <!-- Span2 end -->

          <!-- Span2 start -->
          <div class="col-md-2 col-sm-4">
            <div class="pie-chart">
              <div class="chart2" data-percent="62">
                33,175
              </div>
              <p class="name">
                Pageviews
              </p>
            </div>
          </div>
          <!-- Span2 end -->

          <!-- Span2 start -->
          <div class="col-md-2 col-sm-4">
            <div class="pie-chart">
              <div class="chart3" data-percent="29">
                00:04:12
              </div>
              <p class="name">
                Avg Time
              </p>
            </div>
          </div>
          <!-- Span2 end -->

          <!-- Span2 start -->
          <div class="col-md-2 col-sm-4">
            <div class="pie-chart">
              <div class="chart4" data-percent="48">
                61.51%
              </div>
              <p class="name">
                New Visits
              </p>
            </div>
          </div>
          <!-- Span2 end -->

          <!-- Span2 start -->
          <div class="col-md-4 col-sm-8">
            <div class="widget">
              <div class="widget-body">
                <div class="browser-stats">
                  <div class="big">
                    <img src="<?= base_url() ?>/assets/img/chrome.png" />
                    <span>48%</span>
                  </div>
                  <div class="big">
                    <img src="<?= base_url() ?>/assets/img/firefox.png" />
                    <span>32%</span>
                  </div>
                  <div class="small">
                    <img src="<?= base_url() ?>/assets/img/ie.png" />
                    <span>10%</span>
                  </div>
                  <div class="small">
                    <img src="<?= base_url() ?>/assets/img/safari.png" />
                    <span>7%</span>
                  </div>
                  <div class="small">
                    <img src="<?= base_url() ?>/assets/img/opera.png" />
                    <span>3%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Span2 end -->
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
          <div class="col-md-12">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe098;"></span> Statistics
                </div>
              </div>
              <div class="widget-body">
                <div id="social-stats" style="height:160px"></div>
                <hr>
                <ul class="statistics">
                  <li>
                    <div class="main-info">
                      <a href="#" class="jet-blue-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>12,476</strong>
                    </div>
                    <span>Comments</span>
                  </li>
                  <li>
                    <div class="main-info">
                      <a href="#" class="go-green-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>2289</strong>
                    </div>
                    <span>Locations</span>
                  </li>
                  <li>
                    <div class="main-info">
                      <a href="#" class="nagpur-orange-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>1679</strong>
                    </div>
                    <span>Orders</span>
                  </li>
                  <li>
                    <div class="main-info">
                      <a href="#" class="sea-green-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>$45,360</strong>
                    </div>
                    <span>Balance</span>
                  </li>
                  <li>
                    <div class="main-info">
                      <a href="#" class="light-red-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>649K</strong>
                    </div>
                    <span>Fans</span>
                  </li>
                  <li>
                    <div class="main-info">
                      <a href="#" class="light-grey-bg" data-original-title="">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                      </a>
                      <strong>36,290+</strong>
                    </div>
                    <span>Downloads</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Row end -->
        
        <!-- Row start -->
        <div class="row">
          <div class="col-md-8">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe071;"></span>Comments with Rating
                </div>
              </div>
              <div class="widget-body">
                <ul class="yelp-wrapper">
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="rating">
                        <div class="stars" id="rate3"></div>
                        <small>30 mins ago</small>
                      </div>
                      <p class="comment">900 Bayson, why must you be located in an industrial area far away from my home? </p>
                    </div>
                  </li>
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-2.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="rating">
                        <div class="stars" id="rate5"></div>
                        <small>2 hours ago</small>
                      </div>
                      <p class="comment">Caught myself throughout the whole time I was eating saying "mmm" and "soooo good!</p>
                    </div>
                  </li>
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-3.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="rating">
                        <div class="stars" id="rate1"></div>
                        <small>3 days ago</small>
                      </div>
                      <p class="comment">There's no better way to do chicken and waffles than the way you like it...</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe071;"></span>Demography
                </div>
              </div>
              <div class="widget-body">
                <div class="row demography">
                  <div class="col-md-4 col-sm-4">
                    <div class="show-total">
                      <div class="male">
                        <span class="icon"><img src="<?= base_url() ?>/assets/img/male.png"></span> 68%
                      </div>
                      <div class="female">
                        <span class="icon"><img src="<?= base_url() ?>/assets/img/female.png"></span> 32%
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                    <div id="demography" style="height: 150px"></div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">

          <div class="col-md-4">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe06a;"></span> Comments
                </div>
              </div>
              <div class="widget-body">
                <ul class="comments">
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-8.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="name">
                        <a href="#">john</a>
                      </div>
                      <div class="time">
                        <i class="icon-time"></i>
                        <span>2 min</span>
                      </div>
                      <small>Lorem ipsum commodo quis.</small>
                    </div>
                  </li>
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="name">
                        <a href="#">Andy</a>
                      </div>
                      <div class="time">
                        <i class="icon-time"></i>
                        <span>8 min</span>
                      </div>
                      <small>Dolor voluptate et in Excepteur.</small>
                    </div>
                  </li>
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-5.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="name">
                        <a href="#">Henrik</a>
                      </div>
                      <div class="time">
                        <i class="icon-time"></i>
                        <span>17 min</span>
                      </div>
                      <small>Commodo voluptate et in Excepteur.</small>
                    </div>
                  </li>
                  <li>
                    <div class="user pull-left">
                      <img src="<?= base_url() ?>/assets/img/avatar-5.png" alt="user">
                    </div>
                    <div class="info">
                      <div class="name">
                        <a href="#">Selva Kumar</a>
                      </div>
                      <div class="time">
                        <i class="icon-time"></i>
                        <span>23 min</span>
                      </div>
                      <small>Terry richardson ex squid.</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe074;"></span> Team
                </div>
              </div>
              <div class="widget-body">
                <ul class="nav nav-tabs no-margin myTabBeauty">
                  <li class="active">
                    <a data-toggle="tab" href="#designers" data-original-title="">
                      <span class="fs1 text-error" aria-hidden="true" data-icon="&#xe196;"></span> Developers
                    </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#managers" data-original-title="">
                      <span class="fs1 text-success" aria-hidden="true" data-icon="&#xe06a;"></span> Context
                    </a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div id="designers" class="tab-pane fade active in">
                    <ul class="developers">
                      <li>
                        <div class="user pull-left">
                          <img src="<?= base_url() ?>/assets/img/avatar-8.png" alt="user">
                        </div>
                        <div class="info">
                          <h6>Johnny</h6>
                          <small>Last Logged In: 08/08/2013 2:21pm</small>
                        </div>
                      </li>
                      <li>
                        <div class="user pull-left">
                          <img src="<?= base_url() ?>/assets/img/avatar-7.png" alt="user">
                        </div>
                        <div class="info">
                          <h6>John</h6>
                          <small>Last Logged In: 04/19/2013 1:46pm</small>
                        </div>
                      </li>
                      <li>
                        <div class="user pull-left">
                          <img src="<?= base_url() ?>/assets/img/avatar-3.png" alt="user">
                        </div>
                        <div class="info">
                          <h6>Ruchita</h6>
                          <small>Last Logged In: 05/21/2013 3:54pm</small>
                        </div>
                      </li>
                      <li>
                        <div class="user pull-left">
                          <img src="<?= base_url() ?>/assets/img/avatar-1.png" alt="user">
                        </div>
                        <div class="info">
                          <h6>Naresh Maddela</h6>
                          <small>Last Logged In: 08/01/2013 6:28pm</small>
                        </div>
                      </li>
                    </ul>
                  </div>
                  
                  <div id="managers" class="tab-pane fade">
                    <h4>Raw denim you</h4>
                    <p>
                      Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                    </p>
                    <p class="no-margin">
                      Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth. Cosby Reprehenderit butcher retro keffiyeh dreamcatcher synt mi, qui irure terry richardson ex squid.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe0b3;"></span> Tasks
                </div>
              </div>
              <div class="widget-body">
                <section class="todo">
                  <fieldset class="todo-list">
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_1" value="1" class="todo-list-cb" checked>
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Take a break</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_2" value="2" class="todo-list-cb">
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Fix all IE bugs</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_3" value="3" class="todo-list-cb">
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Watch Movie</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_4" value="4" class="todo-list-cb" checked>
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Create new theme</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_5" value="5" class="todo-list-cb">
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Play Football</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_6" value="6" class="todo-list-cb" >
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Learn new technology</span>
                    </label>
                    <label class="todo-list-item">
                      <input type="checkbox" name="task_7" value="7" class="todo-list-cb" checked>
                      <span class="todo-list-mark"></span>
                      <span class="todo-list-desc">Meeting @4pm</span>
                    </label>
                  </fieldset>
                </section>
              </div>
            </div>
          </div>

        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">

          <!-- Span9 start -->
          <div class="col-md-8">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe06f;"></span> Chats
                </div>
              </div>
              <div class="widget-body">
                <div id="scrollbar-one">
                  <div class="scrollbar">
                    <div class="track">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview">
                      <ul class="chats">
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-1.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Johnny
                            </a>
                            <span class="date-time">
                              at Jul 12th, 2013 12:21
                            </span>
                            <span class="body">
                              Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-4.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Johnny
                            </a>
                            <span class="date-time">
                              at July 10th, 2013 09:37
                            </span>
                            <span class="body">
                              Next level keffiyeh you probably haven't heard of fixie sustainable quinoa 8-bit american apparel have a terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-8.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Kelly
                            </a>
                            <span class="date-time">
                              at June 8th, 2013 04:21
                            </span>
                            <span class="body">
                              Beard stumptown, cardigans banh mi lomo thundercats. whatever keytar, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-2.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Seenu
                            </a>
                            <span class="date-time">
                              at June 29th, 2013 08:10
                            </span>
                            <span class="body">
                              Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-7.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Sam
                            </a>
                            <span class="date-time">
                              at Aug 12th, 2013 06:43
                            </span>
                            <span class="body">
                              Tight pants next level keffiyeh you probably haven't heard of fixie sustainable quinoa 8-bit american apparel have a terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-3.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Batman
                            </a>
                            <span class="date-time">
                              at Aug 09th, 2013 01:19
                            </span>
                            <span class="body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-5.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Ganggyy
                            </a>
                            <span class="date-time">
                              at Jan 03, 2013 09:09
                            </span>
                            <span class="body">
                              Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-1.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Cowboy
                            </a>
                            <span class="date-time">
                              at Jan 01, 2013 07:49
                            </span>
                            <span class="body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-3.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Cockoo
                            </a>
                            <span class="date-time">
                              at Dec 28, 2012 02:39
                            </span>
                            <span class="body">
                              Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit,  
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-7.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Batman
                            </a>
                            <span class="date-time">
                              at Jan 09, 2013 01:19
                            </span>
                            <span class="body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-5.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Ganggyy
                            </a>
                            <span class="date-time">
                              at Jan 03, 2013 09:09
                            </span>
                            <span class="body">
                              Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="out">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-6.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Cowboy
                            </a>
                            <span class="date-time">
                              at Jan 01, 2013 07:49
                            </span>
                            <span class="body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                            </span>
                          </div>
                        </li>
                        <li class="in">
                          <img class="avatar" alt="" src="<?= base_url() ?>/assets/img/avatar-4.png">
                          <div class="message">
                            <span class="arrow">
                            </span>
                            <a href="#" class="name">
                              Cockoo
                            </a>
                            <span class="date-time">
                              at Dec 28, 2012 02:39
                            </span>
                            <span class="body">
                              Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit,  
                            </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Span9 end -->

          <!-- span3 start -->
          <div class="col-md-4">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe06a;"></span> Recent Articles
                </div>
              </div>
              <div class="widget-body">
                <div id="scrollbar">
                  <div class="scrollbar">
                    <div class="track">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview">
                      <div class="featured-articles">
                        <div class="articles">
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Nesciunt tofu stumptown
                            <span class="date">21st Aug @4pm / 3 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Third has both tick
                            <span class="date">20th Aug @7:55 / 4 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Serialized objects of this
                            <span class="date">18th Aug @9:26am / 32 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            The first is a plain one
                             <span class="date">18th Aug @2:24am  / 9 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            jQuery Slider is easy
                             <span class="date">16th Aug @1:39pm  / 12 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            A component that lets
                             <span class="date">14th Aug @2:10pm  / 9 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Compatible with future
                            <span class="date">14th Aug @12:32pm  / 12 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Raw denim you probably
                            <span class="date">12th Aug @1:45am  / 8 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Reprehenderit butcher
                            <span class="date">11th Aug @3:21pm  / 21 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Skateboard dolor brunch
                            <span class="date">11th Aug @11:19am  / 15 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            accusam  / 3 Commentsus terry richardson
                            <span class="date">10th Aug @8:12am  / 13 Comments</span>

                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Mashups experiences
                            <span class="date">09th Aug @1:59pm  / 12 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Terry richardson ad squid
                            <span class="date">6th Aug @10:44am  / 16 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Reinvent cutting
                            <span class="date">2nd Aug @11:19am  / 1 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            partnerships 24/7
                            <span class="date">2nd Aug @11:19am  / 19 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Eyeballs frictionless
                            <span class="date">1st Aug @9:19am  / 21 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Deliver innovate
                            <span class="date">1st Aug @8:19pm  / 11 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Portals technologies
                            <span class="date">29th July @12:19am  / 7 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Collaborative innovate
                            <span class="date">29th July @3:31am  / 5 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Mashups experiences
                            <span class="date">27th July @12:19am  / 2 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Need some interesting
                            <span class="date">26th July @2:33am  / 9 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Portals technologies
                            <span class="date">25th July @9:37pm  / 3 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Collaborative innovate
                            <span class="date">25th July @12:19am  / 7 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Mashups experiences
                            <span class="date">23rd July @8:39am  / 43 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            B2B plug and play
                            <span class="date">22nd July @7:19pm  / 21 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Need interesting
                            <span class="date">20th July @1:19am  / 13 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Portals technologies
                            <span class="date">20th July @6:55am  / 22 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Collaborative innovate
                            <span class="date">19th July @9:47am  / 36 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Portals technologies
                            <span class="date">17th July @3:57pm  / 4 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Collaborative innovate
                            <span class="date">16th July @12:19am  / 8 Comments</span>
                          </a>
                          <a href="#">
                            <span class="label-bullet">
                              &nbsp;
                            </span>
                            Mashups experiences
                            <span class="date">12th July @8:22am  / 1 Comments</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Span3 end -->

        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
          <div class="col-md-12">
            <div class="widget">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe00d;"></span> Gallery
                </div>
              </div>
              <div class="widget-body">
                <div class="row gallery">
                  <div class="col-md-3 col-sm-6">
                    <div class="visual">
                      <img src="https://lh3.googleusercontent.com/-2bwVLxkBp4s/UhQgsPWp4sI/AAAAAAAAAow/ONJkUXwK094/w816-h612-no/DSC05914.JPG" alt="Slick Admin"/>
                      <div class="mask">
                        <h4>Hover Style</h4>
                        <p>" A room without books is like a body without a soul. "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="visual">
                      <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-ash3/1044333_568385483212358_1782121117_n.jpg" alt="Slick Admin"/>
                      <div class="mask">
                        <h4>Hover Style</h4>
                        <p>" No one can make you feel inferior without your consent. "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="visual">
                      <img src="https://lh3.googleusercontent.com/-Ogzm_G380UU/UhQeaYYEmrI/AAAAAAAAAoE/_gkyiYmhvXk/w816-h612-no/DSC05804.JPG" alt="Slick Admin"/>
                      <div class="mask">
                        <h4>Hover Style</h4>
                        <p>" A friend is someone who knows all about you and still loves you. "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="visual">
                      <img src="https://lh5.googleusercontent.com/-qd7ZXSodT7c/UhQhRkkZK3I/AAAAAAAAApQ/eAAkY4eBc-o/w816-h612-no/DSC05369.JPG" alt="Slick Admin"/>
                      <div class="mask">
                        <h4>Hover Style</h4>
                        <p>" To love oneself is the beginning of a lifelong romance. "</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">

          <!-- Span12 start -->
          <div class="col-md-12">
            <div class="widget no-margin">
              <div class="widget-header">
                <div class="title">
                  <span class="fs1" aria-hidden="true" data-icon=""></span> Notifications
                </div>
              </div>
              <div class="widget-body">
                <div class="alert alert-block alert-danger fade in">
                  <button data-dismiss="alert" class="close" type="button">
                    ×
                  </button>
                  <p>
                    Learn by examples! At W3Schools you will find a lot of jQuery examples to edit and test yourself. At W3Schools you will find a complete reference of all jQuery objects and methods.
                  </p>
                </div>
                <div class="alert alert-block alert-warning fade in">
                  <button data-dismiss="alert" class="close" type="button">
                    ×
                  </button>
                  <p>
                    Wix makes it easier than ever to create a stunning website for free by giving you all the essentials. Choose from 100s of designer-made HTML5 templates.
                  </p>
                </div>
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button">
                    ×
                  </button>
                  <p>
                    Enhance your website by adding popular web Apps & Services like Facebook Comments, Instagram, Google Maps & SoundCloud.
                  </p>
                </div>
                <div class="alert alert-block alert-info fade in no-margin">
                  <button data-dismiss="alert" class="close" type="button">
                    ×
                  </button>
                  <p>
                    So whether you’re a designer, programmer, musician, artist or small business owner, Wix has something for everyone.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Span12 end -->

        </div>
        <!-- Row end -->
      
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