<?php echo ipView('_header.php')->render(); ?>
<!-- <?php //echo ipBlock('main')->exampleContent(' '); ?>-->
<!-- Page Content-->
<main class="page-content">
  <section class="context-dark bg-dark-blue">
    <!-- Swiper-->
    <div data-height="35.5%" data-loop="false" data-dragable="false" data-min-height="480px" data-slide-effect="true"
      data-autoplay="true" data-autoplay-stop-on-last="false" class="swiper-container swiper-slider">
      <div class="swiper-wrapper">
        <div data-slide-bg=<?php echo ipThemeUrl("assets/images/backgrounds/bg-01-1920x60.jpg") ?>
          style="background-position: center center" class="swiper-slide">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-left">
                <div class="cell-lg-7 text-lg-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100">
                    <h1 class="text-bold"><a href="about-us.html">Service and Repair</a></h1>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-30">
                    <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">ACR Auto is committed to
                      earning your trust by providing the expertise, value and responsiveness you expect.</h4>
                    <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Car Repair</h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="200" class="offset-top-20"><a href="about-us.html"
                      class="btn btn-default btn-sm veil reveal-lg-inline-block">learn more</a><a href="#"
                      data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slide-bg=<?php echo ipThemeUrl("assets/images/backgrounds/bg-02-1920x660.jpg") ?>
          style="background-position: center center" class="swiper-slide">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-left">
                <div class="cell-lg-7 text-lg-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100">
                    <h1 class="text-bold"><a href="about-us.html">Wheel Alignments</a></h1>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-30">
                    <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">
                      <?php echo ipSlot('text', array(

   'id' => 'offertext',

   'default' => "We offer a variety of services to help you get back on the road and keep your life safer."

)); ?>
                    </h4>
                    <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Car Repair</h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="200" class="offset-top-20"><a href="about-us.html"
                      class="btn btn-default btn-sm veil reveal-lg-inline-block">learn more</a><a href="#"
                      data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slide-bg=<?php echo ipThemeUrl("assets/images/backgrounds/bg-03-1920x660.jpg") ?>
          style="background-position: center center" class="swiper-slide">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-center range-lg-left">
                <div class="cell-lg-7 text-lg-left cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="200">
                    <h1 class="text-bold"><a href="about-us.html">Cooling System Service</a></h1>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="300" class="offset-top-30">
                    <h4 class="font-default text-light text-spacing-20 veil reveal-sm-block">Cooling System Pressure
                      Test Inspection of Belts and Hoses Machine Flush Cooling System New Coolant </h4>
                    <h4 class="font-default text-light text-spacing-20 veil-sm">Learn more about Car Repair</h4>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="500" class="offset-top-20"><a href="about-us.html"
                      class="btn btn-default btn-sm veil reveal-lg-inline-block"> learn more</a><a href="#"
                      data-custom-toggle="quote-form" class="btn btn-primary btn-sm veil-lg">Request a Quote</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
      <div id="quote-form" class="quote-form">
        <div class="container">
          <!-- <div class="range range-xs-center range-lg-right">
            <div class="cell-xs-10 cell-sm-8 cell-lg-5 text-left offset-top-0">
              <div class="inset-lg-left-70">
                <div class="quote-form-body"><a href="" data-custom-toggle="quote-form" class="close icon icon-xxs fa-close text-white"></a>
                  <div>
                    <h3 class="text-bold">Request a Quote</h3>
                  </div>
                  <div class="offset-top-25">
                    <p>Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
                  </div>
                  <div class="offset-top-20">
                    <div class="form-group">
                      <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                        <option>Car make</option>
                        <option value="2">San Francisco</option>
                        <option value="3">New York</option>
                        <option value="4">Las Vegas</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                        <option>Car model</option>
                        <option value="2">San Francisco</option>
                        <option value="3">New York</option>
                        <option value="4">Las Vegas</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                        <option>Car year</option>
                        <option value="1">By road</option>
                        <option value="2">By water</option>
                        <option value="3">By train</option>
                      </select>
                    </div><a href="calculate.html" class="btn btn-sm btn-primary">Get started</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Our Mission-->
  <section class="section-60 section-md-98">
    <div class="shell text-sm-left">
      <h2>
        <?php echo ipSlot('text', array(

   'id' => 'homeHeadText',

   'default' => "Welcome Japwrack"

)); ?>
      </h2>
      <hr class="divider divider-lg bg-gray-darkest hr-sm-left-0">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-sm-6">
          <p>
            <?php echo ipSlot('text', array(

   'id' => 'home_box_left1',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

)); ?>
          </p>

          <p>
            <?php echo ipSlot('text', array(

   'id' => 'home_box_left2',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

)); ?>
            .</p>


          <p>
            <?php echo ipSlot('text', array(

   'id' => 'home_box_left3',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

      )); ?>
        </div>
        <div class="cell-xs-10 cell-sm-6 offset-top-15 offset-sm-top-0">
          <p>
            <p>
              <?php echo ipSlot('text', array(

   'id' => 'home_box_right1',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

      )); ?>
              <p>
                <p>
                  <?php echo ipSlot('text', array(

   'id' => 'home_box_right2',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

      )); ?>

                  <p>
                    <p>
                      <?php echo ipSlot('text', array(

   'id' => 'home_box_right3',

   'default' => "ACR Auto is a full service auto and truck preventive maintenance and auto repair center in the city area.
            We specialize in vehicle maintenance service, electrical service, transmission services, heavy duty
            services and much more"

      )); ?>
        </div>
      </div>
      <div class="offset-top-20"><a href="about-us.html" class="btn btn-primary btn-sm">learn more</a></div>
    </div>
  </section>
  <!-- Why choose us-->
  <section class="section-80 section-md-top-65 section-md-bottom-120 bg-gray-darkest context-dark section-skew section-skew-wide">
    <div class="skew-block"></div>
    <div class="shell text-md-left">
      <h2>
        <?php echo ipSlot('text', array(
             'id' => 'homeHeadText',
              'default' => "WHY CHOOSE US"

)); ?>
      </h2>
      <hr class="divider divider-lg bg-white hr-md-left-0">
      <div class="range text-md-left offset-top-50 range-xs-center">
        <div class="cell-sm-8 cell-md-4">
          <div class="unit unit-md unit-md-horizontal text-md-left">
            <div class="unit-left"><span class="icon icon-lg mdi mdi-star text-primary"></span></div>
            <div class="unit-body">
              <h5>We are fair and affordable</h5>
              <p>Customers come back when they are treated right and billed a fair amount for our work. Other places
                try to overcharge, betting you will never come back.</p>
            </div>
          </div>
        </div>
        <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
          <div class="unit unit-md unit-md-horizontal text-md-left">
            <div class="unit-left"><span class="icon icon-lg mdi mdi-fire text-primary"></span></div>
            <div class="unit-body">
              <h5>Good reputation</h5>
              <p>This is not a large chain shop. We are an independent automotive repair shop and our name is on the
                building; lackluster workmanship is not an option.</p>
            </div>
          </div>
        </div>
        <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
          <div class="unit unit-md unit-md-horizontal text-md-left">
            <div class="unit-left"><span class="icon icon-lg mdi mdi-flag-variant text-primary"></span></div>
            <div class="unit-body">
              <h5>Our experience</h5>
              <p>Our service professionals with years of experience are highly trained, so they know what they are
                doing, learning and adapting to changing automotive platforms.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Classic Thumbnail-->
  <section class="section-80 section-lg-top-90 section-lg-bottom-120 section-skew bg-lightest">
    <div class="skew-block"></div>
    <div class="shell text-sm-left">
      <h2>our services</h2>
      <hr class="divider divider-lg bg-gray-darkest hr-sm-left-0">
      <div class="range range-xs-center range-sm-left offset-top-50">
        <div class="cell-xs-10 cell-sm-8">
          <p>We offer a variety of services to help you get back on the road and keep your life safer </p>
        </div>
      </div>
      <div class="range text-left range-xs-center offset-top-50">
        <div class="cell-xs-8 cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="services.html" target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("assets/images/services/service-01-370x250.jpg")
                ?> alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Oil Changes</h6>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0"><a class="thumbnail-classic" href="services.html#undefined2"
            target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("assets/images/services/service-02-370x250.jpg")
                ?> alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Brakes</h6>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0"><a class="thumbnail-classic" href="services.html#undefined3"
            target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("assets/images/services/service-03-370x250.jpg")
                ?> alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Transmission</h6>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined4"
            target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("assets/images/services/service-04-370x250.jpg")
                ?> alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Tires & Wheels</h6>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined5"
            target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("assets/images/services/service-05-370x250.jpg")?>
                alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">A/C</h6>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30"><a class="thumbnail-classic" href="services.html#undefined6"
            target="_self">
            <figure><img width="370" height="250" src=<?php echo ipThemeUrl("images/services/service-06-370x250.jpg")?>
                alt="">
              <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light">Engine Performance</h6>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>
      <div class="offset-top-50"><a href="services-1.html" class="btn btn-default btn-sm">view all services</a></div>
    </div>
  </section>
  <!-- Classic Thumbnail-->
  <!-- Latest news-->
  <section class="section-80 section-md-bottom-120">
    <div class="shell text-md-left">
      <h2>latest news</h2>
      <hr class="divider divider-lg bg-gray-darkest hr-md-left-0">
      <div class="range text-md-left offset-top-50 range-xs-center">
        <div class="cell-sm-8 cell-md-4">
          <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
              <figure><img width="370" height="270" src="images/blog/news-01-370x270.jpg" alt="" class="img-responsive"></figure><span
                class="icon icon-xxs fa-link"></span>
            </a>
            <div class="offset-top-10">
              <h5 class="text-primary"><a href="blog-post-page.html" class="post-news-title">Expensive oil changes are
                  here to stay </a></h5>
            </div>
            <div class="offset-top-15">
              <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle text-regular">26 January 2016,
                  15:34</time>
              </div>
            </div>
            <p>Oil changes may be more expensive with the required 0W-20 weight oil compared to oil, but only having to
              service the car once or twice a year keeps annual costs to nearly a wash. </p>
          </article>
        </div>
        <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
          <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
              <figure><img width="370" height="270" src=<?php ipThemeUrl("assets/images/blog/news-02-370x270.jpg") ?>
                alt=""
                class="img-responsive"></figure><span class="icon icon-xxs fa-link"></span>
            </a>
            <div class="offset-top-10">
              <h5 class="text-primary"><a href="blog-post-page.html" class="post-news-title">What's included in a
                  tuneup?</a></h5>
            </div>
            <div class="offset-top-15">
              <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle text-regular">26 January 2016,
                  14:03</time>
              </div>
            </div>
            <p>Actually, there is no such thing as a tuneup in the traditional sense of replacing parts to bring the
              ignition and fuel systems up to specs for maximum performance and efficiency... </p>
          </article>
        </div>
        <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
          <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
              <figure><img width="370" height="270" src=<?php ipThemeUrl("assets/images/blog/news-03-370x270.jpg") ?>
                alt="" class="img-responsive"></figure><span class="icon icon-xxs fa-link"></span>
            </a>
            <div class="offset-top-10">
              <h5 class="text-primary"><a href="blog-post-page.html" class="post-news-title">Do you really need to
                  change your oil every 3,000 miles? </a></h5>
            </div>
            <div class="offset-top-15">
              <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
                <time datetime="2016-01-01" class="text-gray inset-left-5 text-middle text-regular">26 January 2016,
                  14:03</time>
              </div>
            </div>
            <p>No, you don't, according to every auto manufacturer we've talked to. The main advocates of the
              3,000-mile oil change ...</p>
          </article>
        </div>
      </div>
      <div class="offset-top-50"><a href="blog-archive.html" class="btn btn-primary btn-sm">view all news</a></div>
    </div>
  </section>
  <!-- Testimonials-->
  <section class="section-80 section-md-top-65 section-md-bottom-100 bg-gray-darkest context-dark section-skew section-skew-wide">
    <div class="skew-block"></div>
    <div class="shell text-md-left">
      <h2>Testimonials</h2>
      <hr class="divider divider-lg bg-white hr-md-left-0">
      <div class="offset-top-50">
        <div data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-sm-items="2" data-nav="false"
          data-margin="30" class="owl-carousel owl-carousel-default">
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-evelyn-fisher-140x140.jpg" width="140" height="140"
                    alt="" class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>We have used 'ACR Auto' exclusively for 12 years now. They have serviced 10 different vehicles
                        for us in that time, and have always been fast, efficient, fair, honest, and trustworthy!</q>
                    </p>
                    <p>
                      <cite>Evelyn Fisher</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-lawrence-sims-140x140.jpg" width="140" height="140"
                    alt="" class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>The folks at ACR Auto are the best. I have been there with all of my vehicles with issues
                        ranging from a bad transmission to brake jobs. They are always honest and do a great job.</q>
                    </p>
                    <p>
                      <cite>Lawrence Sims</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-cristal-smith-270x270.jpg" width="140" height="140"
                    alt="" class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>These guys do a great work. I’m pretty picky when it comes to my car! Mark is very
                        knowledgeable and friendly, what a great guy! This is a great place for anyone to get quality
                        work done.</q>
                    </p>
                    <p>
                      <cite>Cristal Smith</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-patrick-pool-170x170.jpg" width="140" height="140"
                    alt="" class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>We have used 'ACR Auto' exclusively for 12 years now. They have serviced 10 different vehicles
                        for us in that time, and have always been fast, efficient, fair, honest, and trustworthy!</q>
                    </p>
                    <p>
                      <cite>Patrick Pool</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-sam-kromstain-270x270.jpg" width="140" height="140"
                    alt="" class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>The folks at ACR Auto are the best. I have been there with all of my vehicles with issues
                        ranging from a bad transmission to brake jobs. They are always honest and do a great job.</q>
                    </p>
                    <p>
                      <cite>Sam Kromstain</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="quote">
              <div class="unit unit-md unit-md-horizontal text-md-left">
                <div class="unit-left"><img src="images/users/user-eva-pool-270x270.jpg" width="140" height="140" alt=""
                    class="img-responsive reveal-inline-block img-circle"></div>
                <div class="unit-body">
                  <div class="inset-md-right-40">
                    <p>
                      <q>These guys do a great work. I’m pretty picky when it comes to my car! Mark is very
                        knowledgeable and friendly, what a great guy! This is a great place for anyone to get quality
                        work done.</q>
                    </p>
                    <p>
                      <cite>Eva Pool</cite>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Java script-->
<?php echo ipView('_footer.php')->render(); ?>