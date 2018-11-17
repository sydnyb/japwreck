
<?php echo ipView('_header.php')->render(); ?>
  
      <!-- RD Parallax-->
      <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.35" data-type="media" data-url="images/backgrounds/bg-04-1920x400.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
          
       <!-- Page Content  -->
      <main class="page-content section-top-70 section-md-top-90">
        <section> 
          <div class="shell text-sm-left">
            <h2>
            <?php echo ipSlot('text', array(
            'id' => 'counter',
           'default' => "shortly about us"
          )); ?>


            </h2>
            <hr class="divider divider-lg bg-primary hr-sm-left-0">
            <div class="range range-xs-center range-sm-left offset-top-50">
              <div class="cell-xs-10 cell-sm-5 text-sm-left">
                         
              <?php
                $options = array(
                  'id' => 'aboutpagemain',
                  'width' => '451',
                  'height'=>'304',
                  'class' => 'img-responsive',
                  'default' => ipThemeUrl('assets/images/about-us-01-451x304.jpg')
                  );
                  echo ipSlot('image', $options);
            ?>
           </div>
              
              
              <div class="cell-xs-10 cell-sm-7 offset-top-50 offset-sm-top-0">
                <p><?php echo ipSlot('text', array(
                'id' => 'aboutpage1',
                'default' => "We offer competitive rates for all types of repair. In addition to our unsurpassed MOT (Classes 4, 5 &amp; 7), Servicing and General Repair services we also have our established state-of-the-art Bodyshop, offering facilities and quality that will not be found at any other bodyshop."
                )); ?></p>
               
               <p><?php echo ipSlot('text', array(
                'id' => 'aboutpage2',
                'default' => "Whether you need a larger repair, like a new body panel or bumper, or have a smaller problem that needs fixing like an annoying scratch on a door, choose us for repairs you can trust. Why? Because we have been numerously awarded for our repair and maintenance services. This means we have to meet strict standards recognized industry wide for all parts of the repair process, from the methods, materials and parts we use."
                )); ?></p>
                <div class="offset-top-20"><a href="services-2.html" class="btn btn-primary btn-sm">learn more</a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- counters-->
        <section class="section-65 section-sm-bottom-95 bg-gray-darkest context-dark section-skew section-skew-wide offset-top-110">
          <div class="skew-block"></div>
          <div class="shell text-md-left">
            
          
          
          <h2> 
          <?php echo ipSlot('text', array(
            'id' => 'counter',
           'default' => "counters"
          )); ?>
            </h2>




            <hr class="divider divider-lg bg-white hr-md-left-0">
            <div class="range range-xs-center range-md-left offset-top-50 text-center counters">
              <div class="cell-sm-6 cell-md-3">
                <!-- Counter type 1-->
                <div class="counter-type-1">
                  <div>
                    <div class="h2 font-accent"><span data-step="3000" data-from="0" data-to="1324" class="counter"></span></div>
                  </div>
                  <div class="offset-top-12">
            
            
            <h6 class="text-primary">
               <?php echo ipSlot('text', array(
              'id' => 'counter',
              'default' => "Trusted partners"
              )); ?>
            </h6>

                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-sm-top-0">
                <!-- Counter type 1-->
                <div class="counter-type-1">
                  <div>
                    <div class="h2 font-accent"><span data-step="2500" data-from="0" data-to="65" class="counter"></span></div>
                  </div>
                  <div class="offset-top-12">
                  
                  <h6 class="text-primary">
                   <?php echo ipSlot('text', array(
                       'id' => 'counter',
                        'default' => "Certified technicians"
                       )); ?>
                     </h6>
                  
                  
                    </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                <!-- Counter type 1-->
                <div class="counter-type-1">
                  <div>
                    <div class="h2 font-accent"><span data-step="1500" data-from="0" data-to="268" class="counter"></span></div>
                  </div>
                  <div class="offset-top-12">

                  <h6 class="text-primary">
                   <?php echo ipSlot('text', array(
                       'id' => 'counter',
                        'default' => "Models we serve"
                       )); ?>
                   </h6>



                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                <!-- Counter type 1-->
                <div class="counter-type-1">
                  <div>
                    <div class="h2 font-accent"><span data-step="5300" data-from="0" data-to="2847951" class="counter"></span></div>
                  </div>
                  <div class="offset-top-12">
                    

                     <h6 class="text-primary">
                   <?php echo ipSlot('text', array(
                       'id' => 'counter',
                        'default' => "Happy Clients"
                       )); ?>
                   </h6>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-90 section-lg-bottom-110 section-skew bg-lightest">
          <div class="skew-block"></div>
          <div class="shell text-md-left">
            
            <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "What we offer"
                       )); ?>
            </h2>
            
            <hr class="divider divider-lg bg-gray-base hr-md-left-0">
            <div class="range text-md-left offset-top-50 range-xs-center">
              <div class="cell-sm-8 cell-md-4">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-oil text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">
                      <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "Oil Changes"
                       )); ?></h5>
                    <p>
                      
                    <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "Regularly changing your oil and filter will help the engine work its best."
                       )); ?><
                  
                  </p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-elevator text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">

               <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "Air Conditioning"
                       )); ?>


                    </h5>
                    <p>
                      
                    <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "When driving with your windows down isn't cutting it, it's time to see our air conditioning repair specialists."
                       )); ?>

                    
                    
                    
                    
                    </p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-settings text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">Brakes

  <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "When driving with your windows down isn't cutting it, it's time to see our air conditioning repair specialists."
                       )); ?>
                        </h5>


 <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "Brake maintenance is crucial to keeping your vehicle operating safely. "
                       )); ?>

                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-30">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-lan text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">
                    <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "Transmission Repair "
                       )); ?>
                    </h5>

<p>

  <?php echo ipSlot('text', array(
                       'id' => 'offer',
                        'default' => "A well maintained transmission can save you from problems later in your vehicle's life.  "
                       )); ?>

</p>

                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-30">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-headset text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">
  
  <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "24/7 Support  "
                       )); ?>
                    </h5>
                  
                  
                  
                    <p>

<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Our ACR Auto experts work day and night to solve all your car-related problems.  "
                       )); ?>
                  



                    </p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-30">
                <div class="unit unit-md unit-md-horizontal text-md-left">
                  <div class="unit-left"><span style="font-size: 70px" class="icon icon-lg mdi mdi-multiplication-box text-primary"></span></div>
                  <div class="unit-body">
                    <h5 class="text-regular">

<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Cooling System "
                       )); ?>
                  

                    </h5>



                    <p>
                      
                    
<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => " Summer is just around the corner, make sure your cooling system is ready! 
                "
                       )); ?>
                    
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-85 section-md-top-65 section-skew section-skew-wide bg-white">
          <div class="skew-block"></div>
          <div class="shell text-sm-left">
            <h2>

<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Professional team"
                       )); ?>

            </h2>
            <hr class="divider divider-lg bg-gray-darkest hr-sm-left-0">
            <div class="range range-xs-center range-sm-left offset-top-50">
              <div class="cell-xs-10 cell-sm-6 cell-md-3"><img src="images/users/user-mark-johnson-270x270.jpg" width="270" height="270" alt="" class="img-responsive reveal-inline-block">
                <div class="offset-top-20">
                  <h5 class="text-primary"><a href="team-member.html"></a>
                
                
<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Mark Johnson"
                       )); ?>

                </h5>
                </div>
                <p class="offset-top-5 text-silver text-regular">

<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Service Advisor"
                       )); ?>


                </p>
                <p>

<?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "His rich experience includes car sales, rental car management, and service advising."
                       )); ?>


                </p>
                <div class="offset-top-20">
                  <ul class="list-inline list-inline-dark list-inline-sm">
                    <li><a href="#" class="icon icon-xxs fa-facebook text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google text-middle"></a></li>
                  </ul>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-50 offset-sm-top-0"><img src="images/users/user-eva-pool-270x270.jpg" width="270" height="270" alt="" class="img-responsive reveal-inline-block">
                <div class="offset-top-20">
                  <h5 class="text-primary"><a href="team-member.html">

                  <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Eva Pool"
                       )); ?>

                  </a></h5>
                </div>
                <p class="offset-top-5 text-silver text-regular">

     <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Service Advisor"
                       )); ?>

                </p>
                <p>


  <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Her goal is to help you make a wise investment decision regarding your vehicle needs."
                       )); ?>


                </p>
                <div class="offset-top-20">
                  <ul class="list-inline list-inline-dark list-inline-sm">
                    <li><a href="#" class="icon icon-xxs fa-facebook text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google text-middle"></a></li>
                  </ul>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0"><img src="images/users/user-sam-kromstain-270x270.jpg" width="270" height="270" alt="" class="img-responsive reveal-inline-block">
                <div class="offset-top-20">
                  <h5 class="text-primary"><a href="team-member.html">

    <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Sam Kromstain"
                       )); ?>

                  </a></h5>
                </div>
                <p class="offset-top-5 text-silver text-regular">

    <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Certified Technician"
                       )); ?>


                </p>
                <p>
    <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Everyone enjoys his expertise as a technician and a great personality around the shop."
                       )); ?>



                </p>
                <div class="offset-top-20">
                  <ul class="list-inline list-inline-dark list-inline-sm">
                    <li><a href="#" class="icon icon-xxs fa-facebook text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google text-middle"></a></li>
                  </ul>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0"><img src="images/users/user-cristal-smith-270x270.jpg" width="270" height="270" alt="" class="img-responsive reveal-inline-block">
                <div class="offset-top-20">
                  <h5 class="text-primary"><a href="team-member.html">

                      <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Cristal Smith"
                       )); ?>
                  </a></h5>
                </div>
                <p class="offset-top-5 text-silver text-regular">
              
              <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Owner/Partner"
                       )); ?>



                </p>
                <p> <?php echo ipSlot('text', array(
                'id' => 'offer',
                'default' => "Cristal is a leader in providing each of our customers with the excellent customer service"
                       )); ?>
.</p>
                <div class="offset-top-20">
                  <ul class="list-inline list-inline-dark list-inline-sm">
                    <li><a href="#" class="icon icon-xxs fa-facebook text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter text-middle"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google text-middle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
            <?php echo ipView('_footer.php')->render(); ?>
