<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

  <head>
    <link rel="icon" href=<?php echo ipThemeUrl("images/favicon.ico"); ?> type="image/x-icon">
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
                        <div class="rd-navbar-brand"><a href="index.html"><img width="147" height="75" src="http://localhost/japwreck/Theme/japwreck/assets/images/logo-light-141x75.png"
                              alt=""></a></div>
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
                      <li class="active"><a href="index.html">Home</a>
                      </li>
                      <li class=""><a href="about.html">About</a>
                      </li>
                      <li><a href="gallery.html">Vehicle Gallery</a>
                        <!-- <ul class="rd-navbar-dropdown">
                              <li><a href="gallery-masonry.html">Masonry Grid</a>
                              </li>
                              <li><a href="gallery-grid-3-columns.html">Grid With Padding</a>
                              </li>
                              <li><a href="gallery-grid-3-columns-fullwidth.html">Grid With No Padding</a>
                              </li>
                              <li><a href="gallery-cobbles.html">Cobbles Grid</a>
                              </li>
                            </ul> -->
                      </li>
                      <li><a href="services.html">Services</a>
                        <!-- <ul class="rd-navbar-dropdown">
                              <li><a href="services.html#0">AC Performance Check</a>
                              </li>
                              <li><a href="services.html#1">Brake Repair</a>
                              </li>
                              <li><a href="services.html#2">Battery, Starting and Repair</a>
                              </li>
                              <li><a href="services.html#3">Engine Repair</a>
                              </li>
                              <li><a href="services.html#4">Radiator Service</a>
                              </li>
                              <li><a href="services.html#5">Wheel Alignment</a>
                              </li>
                            </ul> -->
                      </li>
                      <!-- <li><a href="#">Pages</a>
                            <div class="rd-navbar-megamenu">
                              <div class="row section-relative"><img src="images/megamenu-img-01-380x370.jpg" width="360" height="370" alt="" style="position:absolute; bottom:0; left:0" class="img-responsive veil reveal-lg-block"/>
                                <div class="col-lg-3"></div>
                                <div></div>
                                <ul class="col-lg-3">
                                  <li>
                                    <h6><span class="small">Pages</span></h6>
                                    <ul class="list-unstyled offset-lg-top-25">
                                      <li><a href="about-us.html">About Us</a></li>
                                      <li><a href="prices.html">Prices</a></li>
                                      <li><a href="calculate.html">Calculate</a></li>
                                      <li><a href="team.html">Our Team</a></li>
                                      <li><a href="services-1.html">Services 1</a></li>
                                      <li><a href="services-2.html">Services 2</a></li>
                                      <li><a href="team-member.html">Team Member Profile</a></li>
                                      <li><a href="404.html">404</a></li>
                                      <li><a href="maintenance.html">Maintenance</a></li>
                                      <li><a href="comming-soon.html">Coming Soon</a></li>
                                      <li><a href="faq.html">FAQs</a></li>
                                      <li><a href="clients.html">Clients</a></li>
                                    </ul>
                                  </li>
                                </ul>
                                <ul class="col-lg-3">
                                  <li>
                                    <h6><span class="small">Additional Pages</span></h6>
                                    <ul class="list-unstyled offset-lg-top-25">
                                      <li><a href="tabs-and-accordions.html">Tabs &amp; Accordions</a></li>
                                      <li><a href="typography.html">Typography</a></li>
                                      <li><a href="forms.html">Forms</a></li>
                                      <li><a href="buttons.html">Buttons</a></li>
                                      <li><a href="grid.html">Grid</a></li>
                                      <li><a href="icons.html">Icons</a></li>
                                      <li><a href="tables.html">Tables</a></li>
                                      <li><a href="progress-bars.html">Progress bars</a></li>
                                    </ul>
                                  </li>
                                </ul>
                                <ul class="col-lg-3">
                                  <li>
                                    <h6><span class="small">Elements</span></h6>
                                    <ul class="list-unstyled offset-lg-top-25">
                                      <li><a href="header-transparent.html">Header Transparent</a></li>
                                      <li><a href="header-center-footer-light.html">Header Center, Footer Light</a></li>
                                      <li><a href="header-minimal-footer-corporate.html">Header Minimal, Footer Corporate</a></li>
                                      <li><a href="header-corporate.html">Header Corporate</a></li>
                                      <li><a href="header-hamburger-menu.html">Header Hamburger Menu</a></li>
                                      <li><a href="footer-center-dark.html">Footer Center Dark</a></li>
                                      <li><a href="footer-center-light.html">Footer Center Light</a></li>
                                      <li><a href="footer-minimal-dark.html">Footer Minimal Dark</a></li>
                                      <li><a href="footer-widget-light.html">Footer Widget Light</a></li>
                                      <li><a href="footer-widget-dark.html">Footer Widget Dark</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li> -->
                      <!-- <li><a href="blog-default.html">Blog</a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="blog-archive.html">Archive Page</a>
                              </li>
                              <li><a href="blog-2-columns-layout.html">2 Columns Layout</a>
                              </li>
                              <li><a href="blog-3-column-layout.html">3 Columns Grid Layout</a>
                              </li>
                              <li><a href="blog-default.html">Default Blog</a>
                              </li>
                              <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                              </li>
                              <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                              </li>
                              <li><a href="blog-timeline.html">Timeline</a>
                              </li>
                              <li><a href="blog-post-page.html">Post Page</a>
                              </li>
                            </ul>
                          </li> -->
                      <li><a href="clearance-item.html">Clearance Item</a>

                      </li>
                      <li><a href="contacts.html">Contacts</a>

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