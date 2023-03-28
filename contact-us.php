<?php include ('header.php')?>

    <!-- Start Page Header -->
    <div class="page-header banner bg2 bnr">
<div class="heading">
                <div class="section-title"><span class="txclr">Contact</span><span> Us </span></div>
            </div>
    </div>	  
    <!-- End Page Header -->      

    <!-- Start Content Section -->
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
           
            <div id="error_div" style="display:none;">
              <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Oops!</strong> <span id="error_div_text"></span>.
              </div>
            </div>
            <div id="success_div" style="display:none;">
              <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <span id="success_div_text"></span>
              </div>
            </div>
            <!-- Form -->
            <form id="contact_form" class="contact-form" role="form">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" class="form-control" name="usr_name" id="usr_name" placeholder="Your Name">
                </div>
                <div class="col-md-4">
                  <input type="email" class="form-control" name="usr_email" id="usr_email" placeholder="Your Email">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="usr_phone" id="usr_phone" placeholder="Phone( with country code )" maxlength="15" onkeypress="return restrictCharacters(this, event, digitsOnly);">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="usr_subject" id="usr_subject" placeholder="Subject">
                </div>                    
                <div class="col-md-12">
                  <textarea class="form-control" placeholder="Your Requirement" id="usr_message" name="usr_message" rows="9"></textarea>
                </div>
                <div class="col-md-4">
                  <select  class="form-control" name="usr_budget" id="usr_budget">
                    <option value="">Your budget</option>
                    <option value="Less than 1000 USD">&lt;1000 USD</option>
                    <option value="Less than 2000 USD">&lt;2000 USD</option>
                    <option value="Less than 3000 USD">&lt;3000 USD</option>
                    <option value="Less than 4000 USD">&lt;4000 USD</option>
                    <option value="Less than 5000 USD">&lt;5000 USD</option>
                    <option value="Do Not Know">Do Not Know</option>

                  </select>
                </div>
                <div class="col-md-4">
                  <select  class="form-control" name="usr_duration" id="usr_duration">
                    <option value="">Your Start Duration Of Project</option>
                    <option value="0-1 Week">0-1 Week</option>
                    <option value="After 2 Weeks">After 2 Weeks</option>
                    <option value="After A Month">After A Month</option>
                    <option value="Do Not Know">Do Not Know</option>

                  </select>
                </div>
                <div class="col-md-4">
                  <select  class="form-control" name="usr_packages" id="usr_packages">
                    <option value="">Do You require Packages Cross-Sell Services</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="What is this">What is this</option>

                  </select>
                </div>
                <div class="col-md-6">
                  <!--                    <button type="submit" id="submit" class="btn btn-effect" onclick="return doValidate();"><i class="fa fa-check"></i> Send Message</button>-->
                  <input type="button" name="submit" value="Send Message" id="send_message" class="btn btn-effect" onclick="return doValidate();">
                  <span id="login_progress" style="display:none;"><img src="assets/images/login_loder.gif"></span>
                </div>
              </div> 
            </form>
          </div>
          <div class="col-md-3 bor_cc">
            <h2 class="big-title">Corporate Office :</h2>   
            <div class="information">              
              <div class="contact-datails">
                <p>Sia-Smtech Solutions Pvt.Ltd.</p>
                <p><i class="icon-pointer"></i> Survey No.60/4,3rd Floor, Environ towers, </p>
                <p>  Konappana Agrahara, Electronic City, </p>
                <p> Bangalore - 560100</p>
                <p><i class="icon-call-out"></i> +91-9789639143</p>
                <p><i class="icon-envelope"></i> info@sia-smtechsolutions.com </p>
              </div>
            </div>
          </div>
			 <!----<div class="col-md-3">
              <h2 class="big-title">Nigeria Office :</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p><i class="icon-pointer"></i>A/2 Wushishi Road By,</p>
                  <p>Logos Street,Kaduna,Nigeria, </p>
				  <p><i class="icon-call-out"></i> +2348034534894</p>
                </div>
              </div>
            </div>----->
            <div class="col-md-3 bor_cc">
              <h2 class="big-title">Kenya office :</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p><i class="icon-pointer"></i>Dubai 2012,</p>
                  <p>Moi Drive,Kenya,Nairobi, </p>
                  <p><i class="icon-call-out"></i> +254722867700</p>
                  <p><i class="icon-envelope"></i> info@sia-smtechsolutions.com </p>
                  <p><i class="icon-envelope"></i> sia-smtechsolutions.com </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Content Section  -->

      <!-- Start Map Section -->
<!--      <div class="map-area">      
        <div class="map">        
		
          <iframe src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=400&amp;hl=en&amp;q=DLF%20New%20Town%2C%20Akshaya%20Nagar%2CYelenahalli%20Bus%20Stop%2C%20Bengaluru%20-5600114+(AJT%20Software%20Labs%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" style="border:0" allowfullscreen="" frameborder="0" height="400" width="100%">
          </iframe> 
         </div>
       </div>-->
       <!-- End Map Section -->

       <?php include ('footer.php')?>
