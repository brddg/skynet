      <!-- footer -->
      <footer class="footer" role="contentinfo">

        <div id="social">
          <a target="_blank" href="https://www.facebook.com/pages/Skynet-Security-Integrations/238875869615953"><i class="fa fa-facebook"></i></a>
          <a target="_blank" href="https://twitter.com/SkynetSI"><i class="fa fa-twitter"></i></a>
          <a target="_blank" href="https://google.com/+SkynetSecurityIntegrationNewPortRichey"><i class="fa fa-google-plus"></i></a>
          <a target="_blank" href="https://www.linkedin.com/company/9323215"><i class="fa fa-linkedin"></i></a>
        </div>


         <?php html5blank_nav('footer-menu'); ?>


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
              <p>Skynet Security Integrations is eager to answer any of your questions about our catalog of security systems. Please call our offices direct at <strong>(813) 618-5888</strong> to speak with one of our customer service professionals about your needs. Our regular business hours: 9:00am to 5:00pm Monday through Friday, but you are also able to leave a voicemail after hours for a prompt next business day return call.</p>
              <p>For after-hours emergency service requests, please call <strong>(813) 618-5888</strong> and follow the voice prompts to get through to our on call technician for after- hours emergency service.</p>
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
                        <div>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                        </div>
                        <div>
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number*" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                        </div>
                        <div>
                          <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code*" required>
                        </div>
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
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="data-comm" value="true">
                            Data Communications
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
                      <div class="col-md-12" style="padding-bottom: 20px;">
                        <div id="recaptcha-help-text" style="display:none;color:red;">Please check the box</div>
                        <div class="g-recaptcha" data-sitekey="6LfrtBETAAAAAPfSbhbYdzkbOVEh47MiwARPoo6-"></div>
                      </div>
                    </div>

                    <div class="row">
                      <button type="submit" class="cta-btn">Enter</button>
                    </div>

                  </form>
              </div>
            </div>
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
    ga('create', 'UA-56059535-1', 'skynetintegrations.com');
    ga('send', 'pageview');
    </script>

  </body>
</html>
