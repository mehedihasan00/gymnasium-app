@extends('layouts.web_master', ["pageName" => "about"])
@section('main_content')
<main>
<!-- Inner Heading start -->
<div class="inner-heading">
    <div class="container">
        <h1>About Us</h1>
    </div>
</div>
<!-- Inner Heading end --> 
<!--About Start-->
<div class="about-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="title">
            <h1><span>Welcome To</span> FITNESS PROGRAMME</h1>
          </div>
          <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac magna nec mauris mattis semper. In cursus purus arcu, vitae auctor enim blandit arcu vel.</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae sollicitudin mi. Nunc viverra turpis nibh, sit amet luctus ipsum sagittis eget. Etiam at maximus nisl. Ut fringilla, metus at lacinia gravida, lorem lacus auctor urna, quis cursus velit ipsum non justo. Nam ipsum ligula, pulvinar ac posuere vel, ullamcorper sit amet neque. Morbi quam velit, ornare eget efficitur at, dignissim a eros. Mauris laoreet, leo vehicula ullamcorper pulvinar, justo nisi malesuada sapien, eget vulputate justo enim vel felis. Cras convallis lacus libero, ac gravida sapien ultrices id. Nullam a turpis commodo, efficitur ante a, porta nisi. Phasellus lorem leo, scelerisque vel convallis non, ultricies nec metus. Nullam at justo sollicitudin, porta ex ut, hendrerit turpis. Aenean vitae justo eget enim tincidunt facilisis.</p>
        </div>
        <div class="col-lg-5">
          <div class="aboutImg"><img src="{{ asset('website/assets/images/aboutImg.jpg') }}" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <!--About End--> 
  
  <!--Join Start-->
  <div class="join-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="title">
            <h1>Join Us Today!</h1>
          </div>
          <p>Aenean non mauris vel nisl pulvinar malesuada ut non dui. Praesent ante nisi, varius vitae tincidunt rutrum, suscipit id mauris. Nunc et porta quam, et porttitor lorem. In sagittis nisl non quam varius, iaculis scelerisque urna bibendum. Pellentesque molestie, felis suscipit maximus ultricies.</p>
        </div>
        <div class="col-lg-3">
          <div class="readmore"><a href="#">Join Us Now <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
        </div>
      </div>
    </div>
  </div>
  <!--Join End--> 
  
  <!--Pricing Table Start-->
  <div class="pricing-wrap">
    <div class="container">
      <div class="title">
        <h1>Our Pricing Table</h1>
      </div>
      <ul class="row pricing-table">
        <li class="col-lg-4">
          <div class="pricingWrp">
            <h3>Basic</h3>
            <div class="dollarPrice">99/-<span> Month</span></div>
            <ul class="tableList">
              <li>Gym Fitness</li>
              <li>Yoga</li>
              <li>Running</li>
              <li>Body Building</li>
            </ul>
            <div class="readmore viewbtn"><a href="#">View Details</a></div>
          </div>
        </li>
        <li class="col-lg-4">
          <div class="pricingWrp">
            <h3>Standard</h3>
            <div class="dollarPrice">99/-<span> Month</span></div>
            <ul class="tableList">
              <li>Gym Fitness</li>
              <li>Yoga</li>
              <li>Running</li>
              <li>Body Building</li>
            </ul>
            <div class="readmore viewbtn"><a href="#">View Details</a></div>
          </div>
        </li>
        <li class="col-lg-4">
          <div class="pricingWrp">
            <h3>Premium</h3>
            <div class="dollarPrice">99/-<span> Month</span></div>
            <ul class="tableList">
              <li>Gym Fitness</li>
              <li>Yoga</li>
              <li>Running</li>
              <li>Body Building</li>
            </ul>
            <div class="readmore viewbtn"><a href="#">View Details</a></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!--Pricing Table Start--> 
  
  <!--Expert Start-->
  <div class="expert-wrap">
    <div class="container">
      <div class="title">
        <h1>Our Expert Trainers</h1>
      </div>
      <ul class="row">
        <li class="col-lg-4">
          <div class="expertImg"><img src="{{ asset('website/assets/images/expert02.jpg') }}" alt="">
            <div class="overlay">
              <h2> <a href="#">View Bio</a> </h2>
              <div class="social-media">
                <ul>
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-skype"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>John Doe <span>Fitness Trainer</span></h3>
        </li>
        <li class="col-lg-4">
          <div class="expertImg"><img src="{{ asset('website/assets/images/expert01.jpg') }}" alt="">
            <div class="overlay">
              <h2> <a href="#">View Bio</a> </h2>
              <div class="social-media">
                <ul>
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-skype"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>Selina Stuart <span>Fitness Trainer</span></h3>
        </li>
        <li class="col-lg-4">
          <div class="expertImg"><img src="{{ asset('website/assets/images/expert03.jpg') }}" alt="">
            <div class="overlay">
              <h2> <a href="#">View Bio</a> </h2>
              <div class="social-media">
                <ul>
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-skype"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>Williamson <span>Fitness Trainer</span></h3>
        </li>
      </ul>
    </div>
  </div>
  <!--Expert Start--> 
</main>
@endsection