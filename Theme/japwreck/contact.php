<?php echo ipView('_header.php')->render(); ?>


      <!-- Page Content-->
      <main class="page-content">
        <section class="section-70 section-md-90">
          <div class="shell text-md-left">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-md-8">
                <h2>Get in Touch</h2>
                <hr class="divider divider-lg bg-gray-base hr-sm-left-0">
                <div class="offset-top-50">
                  <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
                  <p>Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.</p>
                </div>
                <div class="offset-top-50">
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
                    <div class="range range-narrow">
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label for="contact-me-name" class="form-label">Your first name</label>
                          <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control form-validation-inside">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-10 offset-lg-top-0">
                        <div class="form-group">
                          <label for="contact-me-phone" class="form-label">Your last name</label>
                          <input id="contact-me-phone" type="text" name="last-name" data-constraints="@Required" class="form-control form-validation-inside">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-10">
                        <div class="form-group">
                          <label for="contact-me-email" class="form-label">Your e-mail</label>
                          <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-validation-inside">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-10">
                        <div class="form-group">
                          <label for="contact-me-message" class="form-label">Message</label>
                          <textarea id="contact-me-message" name="message" data-constraints="@Required" style="height: 160px" class="form-control form-validation-inside"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="text-center text-lg-left offset-top-10">
                      <button type="submit" class="btn btn-sm btn-primary">send message</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0">
                <div class="inset-md-left-30">
                  <div class="unit unit-md unit-md-horizontal text-md-left">
                    <div class="unit-left"><span style="font-size: 24px; line-height:24px" class="icon icon-xs mdi mdi-share-variant text-middle"></span></div>
                    <div class="unit-body">
                      <h5>Follow Us</h5>
                      <ul class="list-inline">
                        <li><a href="#" class="icon icon-xxs fa-facebook text-middle"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-twitter text-middle"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-pinterest text-middle"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-vimeo text-middle"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-google text-middle"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-rss text-middle"></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-40">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><span style="font-size: 24px; line-height:26px" class="icon icon-xxs icon-primary mdi mdi-email"></span></div>
                      <div class="unit-body contact-info">
                        <h5>Post Address</h5>
                        <address><a href="#">9863 - 9867 Mill Road,<br> Cambridge, MG09 99HT.</a></address>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-50">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><span style="font-size: 24px; line-height:24px" class="icon icon-xxs icon-primary mdi mdi-phone"></span></div>
                      <div class="unit-body contact-info">
                        <h5>Phones</h5>
                        <dl>
                          <dt>Phone:</dt>
                          <dd><a href="callto:#" class="text-light">+1 800 603 6035</a></dd>
                        </dl>
                        <dl>
                          <dt>Fax:</dt>
                          <dd><a href="callto:#" class="inset-sm-left-20 text-light">+1 800 889 9898</a></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-50">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><span style="font-size: 24px; line-height:26px" class="icon icon-xxs icon-primary mdi mdi-email-open"></span></div>
                      <div class="unit-body">
                        <h5>Email</h5>
                        <div class="offset-top-10"><a href="mailto:#" class="text-primary text-light">info@demolink.org</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-50">
                    <div class="unit unit-md unit-md-horizontal text-md-left">
                      <div class="unit-left"><span style="font-size: 24px; line-height:24px" class="icon icon-xxs icon-primary mdi mdi-alarm"></span></div>
                      <div class="unit-body">
                        <h5>Opening Hours</h5>
                        <p>8:00 - 18:00 Mon - Sat</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-dark-blue bg-white">
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <div id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles='[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}]' class="rd-google-map__model rd-google-map__model-2"></div>
            <ul class="rd-google-map__locations">
              <li data-x="-73.9874068" data-y="40.643180">
                <p>9870 St Vincent Place, Glasgow</p>
              </li>
            </ul>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <?php echo ipView('_footer.php')->render(); ?>
