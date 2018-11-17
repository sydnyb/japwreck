<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

  <head>
    <link rel="icon" href=<?php echo ipThemeUrl("assets/images/favicon.ico"); ?> type="image/x-icon">
    <?php ipAddCss("//fonts.googleapis.com/css?family=Roboto:400,700,300");?>
    <?php ipAddCss("assets/css/style.css"); ?>
    <?php ipAddCss("assets/css/main.css"); ?>
    <?php ipAddCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"); ?>
    <?php echo ipHead(); ?>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>

  <body>
    <div class="page text-center">
      <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap" style="height: 144px;">
          <nav data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="95"
            class="rd-navbar rd-navbar-default rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-static"
            data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <div class="rd-navbar-panel-title veil-md reveal-inline-block">
                  <h4>Header Corporate</h4>
                </div>
                <!-- RD Navbar Right Side Toggle-->
                <button data-rd-navbar-toggle=".right-side" class="rd-navbar-right-side-toggle veil-md"><span></span></button>
                <div class="shell">
                  <div class="range range-md-middle range-lg-top">
                    <div class="cell-md-3 left-side">
                      <div class="clearfix text-lg-left text-center">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="index.html"><?php echo ipSlot('logo'); ?><img width="147" height="75"></a></div>
                      </div>
                    </div>
                    <div class="cell-md-9 text-md-right right-side">
                      <ul class="offset-lg-top-15 list-unstyled">
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-envelope-o text-middle icon-primary"></span><a
                            href="mailto:#" class="inset-left-10 text-middle">info@demolink.org</a></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-clock-o text-middle icon-primary"></span><span
                            class="inset-left-10 text-middle">Mon–Sat: 7:00–19:00</span></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-phone text-middle icon-primary"></span><a
                            href="callto:#" class="inset-left-10 text-middle">1-800-1234-567</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <!--RD Navbar Mobile Search-->
                      <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                        <form action="search-results.html" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                          <div class="form-group">
                            <label for="rd-navbar-mobile-search-form-input" class="form-label rd-input-label">Search</label>
                            <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"
                              class="rd-navbar-search-form-input form-control form-control-gray-lightest">
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                    <?php
                      $menuOption=array(
                        'items'=>'menu1',
                          'attributes'=>array('class'=>'rd-navbar-nav')
                             );
                        echo ipSlot('menu',$menuOption);
                    ?>
                      
                      </li>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label rd-input-label">Search</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest">
                      <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>