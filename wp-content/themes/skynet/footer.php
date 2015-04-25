      <!-- footer -->
      <footer class="footer" role="contentinfo">

        <div id="social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
       <ul>
         <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
           <a href="#" data-toggle="modal" data-target="#contact-modal">Contact Us</a>
         </li>
        </ul>
        <p class="small smaller">&copy; <?php echo date('Y'); ?> Skynet Integrations - All rights reserved</p>
      </footer>
      <!-- /footer -->

    </div>
    <!-- /wrapper -->

    <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <h2 class="darkblue">Kickstart Your Security Now</h2>
              <p>Skynet Security Integrations is eager to answer any of your questions about our catalog of security systems. Please call our offices direct at (813) 618-5888 to speak with one of our customer service professionals about your needs. Our regular business hours: 9:00am to 5:00pm Monday through Friday, but you are also able to leave a voicemail after hours for a prompt next business day return call.</p>
              <p>For after-hours emergency service requests, please call (813) 618-5888 and follow the voice prompts to get through to our on call technician for after- hours emergency service.</p>
              <p>For general inquiries, please fill out the form below and one of our customer service professionals will follow up with you.</p>
            
              <div id="contact-form">
                  <form class="form-horizontal" method="post" action="<?php echo get_template_directory_uri(); ?>/process.php">
                    <div class="row">
                      <div class="col-md-12">
                        <h5>Contact Information</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number*" required>
                      </div>
                      <div class="col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code*" required>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <h5>What services are you interested in</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="burglar-alarms" value="true">
                            Burglar Alarms
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="video-surveillance" value="true">
                            Video Surveillance
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="access-control" value="true">
                            Access Control
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <textarea name="message" id="message" class="form-control" placeholder="Please provide us with any additional information about your interest."></textarea>
                      </div>
                    </div>
                    
                    <div class="row">
                      <button type="submit" class="cta-btn">Enter</button>
                    </div>
                    
                  </form>
              </div>
            </div>
￼￼￼￼￼￼
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>

    <!-- analytics -->
    <script>
    (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
    (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
    l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
    </script>

  </body>
</html>