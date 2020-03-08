    <!DOCTYPE html>

    <head>
      <title>IndiGeo</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Belajar Geografi">
      <meta name="author" content="Lulu Iwana">
      <meta name="keyword" content="Geografi, geografis, wilayah, indonesia">
      <link rel="shortcut icon" href="img/favicon.png">

      <!-- Bootstrap CSS -->
      <link href="<?php echo base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="<?php echo base_url('css/bootstrap-theme.css') ?>" rel="stylesheet">
      <!--external css-->
      <!-- font icon -->
      <link href="<?php echo base_url('css/elegant-icons-style.css') ?>" rel="stylesheet" />
      <link href="<?php echo base_url('css/font-awesome.min.css') ?>" rel="stylesheet" />
      <!-- full calendar css-->
      <link href="<?php echo base_url('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') ?>" rel="stylesheet" />
      <link href="<?php echo base_url('assets/fullcalendar/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" />
      <!-- easy pie chart-->
      <link href="<?php echo base_url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') ?>" rel="stylesheet" type="text/css" media="screen" />
      <!-- owl carousel -->
      <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
      <link href="<?php echo base_url('css/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet">
      <!-- Custom styles -->
      <link rel="stylesheet" href="css/fullcalendar.css">
      <link href="<?php echo base_url('css/widgets.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('/css/style.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('css/style-responsive.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('css/xcharts.min.css') ?>" rel=" stylesheet">
      <link href="<?php echo base_url('css/jquery-ui-1.10.4.min.css') ?>" rel="stylesheet">
	  
      <style>
        #materigeografi {
          color: white;
          font-size: 18px;
          height: 60px;
          padding-top: 13px;
          padding-left: 13px;
          font-weight: bold;
          order-bottom: 1px solid #00abff;
        }

        .side {
          font-weight: bold;
          color: white;
          font-size: 13;
          padding-right: 9px;
        }

        .submenu {
          color: white;
          font-size: 12px;
        }

        .ikon-sidebar {
          width: 20px;
        }
      </style>
    </head>

    <body>
      <div>



        <header class="header dark-bg">
          <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Pilih Materi" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>
          <!--logo start-->
          <!-- <a href="index.html" class="logo">Belajar <span class="lite">Geografi</span></a> -->
		  <h3>IndiGeo</h3>
          <!--logo end-->
        </header>

        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse" style="margin-left: 0px;">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
              <li>
                <a href="<?php echo base_url('') ?>" id="materigeografi">
                  <span>MATERI GEOGRAFI</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <img src="<?php echo base_url('img/icon-posisi.png') ?>" class="ikon-sidebar" />
                  <span class="side">Posisi Wilayah Indonesia</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('home/letakwilayah') ?>" class="submenu">
                      Letak Wilayah Indonesia
                    </a>
                  </li>
                  <li><a href="<?php echo base_url('home/luasbatas') ?>" class="submenu">Luas dan Batas Wilayah Indonesia</a></li>
                  <li><a href="<?php echo base_url('home/bentukwilayah') ?>" class="submenu">Bentuk Wilayah Indonesia</a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <img src="<?php echo base_url('img/icon-perairan.png') ?>" class="ikon-sidebar" />
                  <span class="side">Perairan Laut</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('home/perairan') ?>" class="submenu">
                      Perairan Laut Indonesia
                    </a>
                  </li>
                  <li><a href="<?php echo base_url('home/potensilaut') ?>" class="submenu">Potensi Laut Indonesia</a></li>

                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <img src="<?php echo base_url('img/icon-posisi.png') ?>" class="ikon-sidebar" />
                  <span class="side">Sistem Transportasi Laut</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="submenu">
                  <li><a href="<?php echo base_url('home/transportasilaut') ?>" class="submenu">Transportasi Laut Indonesia</a></li>
                  <li><a href="<?php echo base_url('home/tollaut') ?>" class="submenu">TOL Laut Indonesia</a></li>
                </ul>
              </li>;
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
      </div>
    </body>

    <!--sidebar end-->
    <!-- javascripts -->
    <script src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery-ui-1.10.4.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery-1.8.3.min.js') ?>"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js')?>"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url('js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.nicescroll.js" type="text/javascript') ?>"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url('assets/jquery-knob/js/jquery.knob.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.sparkline.js" type="text/javascript') ?>"></script>
    <script src="<?php echo base_url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>"></script>
    <script src="<?php echo base_url('js/owl.carousel.js') ?>"></script>
    <!-- jQuery full calendar -->
    <script src="<?php echo base_url('js/fullcalendar.min.js') ?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets/fullcalendar/fullcalendar/fullcalendar.js') ?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('js/calendar-custom.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.rateit.min.js') ?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('js/jquery.customSelect.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/chart-master/Chart.js') ?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('js/scripts.js') ?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('js/sparkline-chart.js') ?>"></script>
    <script src="<?php echo base_url('js/easy-pie-chart.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery-jvectormap-1.2.2.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('js/xcharts.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.autosize.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.placeholder.min.js') ?>"></script>
    <script src="<?php echo base_url('js/gdp-data.js') ?>"></script>
    <script src="<?php echo base_url('js/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('js/sparklines.js') ?>"></script>
    <script src="<?php echo base_url('js/charts.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.slimscroll.min.js') ?>"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

    </html>