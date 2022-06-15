@extends('layouts.web_master', ['pageName' => 'contact'])
@section('main_content')
<main>
<!-- Inner Heading start -->
<div class="inner-heading">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>
  <!-- Inner Heading end -->
  <div class="inner-content">
    <div class="container"> 
      <!--Contact Start-->  
      <div class="contact-wrap">
        <div class="row contactInfo">
          <div class="col-md-12">
            <h3>KEEP IN TOUCH</h3>
            <p class="lead"> Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit cursus. tellus eget condimentum rhoncus sem quam semper libero. </p>
          </div>
          <div class="col-sm-4"> <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:01981-800200">+88 01981-800200</a> </div>
          <div class="col-sm-4"> <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="mt-15"> Begum Rokeya Avenue, Mirpur 10 Roundabout, <br/>
              Dhaka 1216 </p>
          </div>
          <div class="col-sm-4"> <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@linktechbd.com">mail@linktechbd.com</a> </div>
        </div>
        <div class="contact-form">
          <div class="row">
            <div class="col-sm-12">
              <h3>CONTACT FORM</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nibh ante, varius non tincidunt at, malesuada eget mauris. Phasellus consequat suscipit quam ut malesuada. </p>
              <!-- Contact FORM -->
              <form id="contact">
                
                <!-- END IF MAIL SENT SUCCESSFULLY -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="name" name="form-name" placeholder="Your Name">
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" id="email" name="form-email" placeholder="Email">
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" name="form-subject" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <textarea class="form-control" placeholder="Your Message"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12 mt-30">
                    <input type="submit" value="Submit Now" class="sub">
                  </div>
                </div>
              </form>
              <!-- END Contact FORM --> 
            </div>
          </div>
        </div>
      </div>
      
      <!--Contact End--> 
    </div>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3383266745946!2d90.36699521429803!3d23.806565392546872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1654948722749!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</main>
@endsection