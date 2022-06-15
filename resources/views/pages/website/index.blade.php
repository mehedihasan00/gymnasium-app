@extends('layouts.web_master', ['pageName' => 'home'])
@section('main_content')
<!-- Revolution slider start -->
@include('layouts.partials.web_slider')
<!-- Revolution slider end --> 
<main>
  
  <!--What we do Start-->
  <div class="what_we-do_wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="what_we_img"><img src="{{ asset($content->fr_image1) }}" alt=""></div>
          <h3>{{ $content->fr_title1 }}</h3>
        </div>
        <div class="col-lg-4">
          <div class="what_we_img"><img src="{{ asset($content->fr_image2) }}" alt=""></div>
          <h3>{{ $content->fr_title2 }}</h3>
        </div>
        <div class="col-lg-4">
          <div class="what_we_img"><img src="{{ asset($content->fr_image3) }}" alt=""></div>
          <h3>{{ $content->fr_title3 }}</h3>
        </div>
      </div>
    </div>
  </div>
  <!--What we do End--> 
  
  <!--About Start-->
  <div class="about-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="title">
            <h1><span>Welcome To</span> FITNESS PROGRAMME</h1>
          </div>
          <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac magna nec mauris mattis semper. In cursus purus arcu, vitae auctor enim blandit arcu vel.</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat a diam rutrum laoreet. Cras vitae fringilla turpis. In laoreet nunc vel lacinia luctus. Nullam suscipit volutpat magna, vel tempus mauris auctor non. Duis nec orci egestas, hendrerit purus non, egestas diam. Donec viverra arcu quam, vel aliquam libero sagittis ut. Aenean non mauris vel nisl pulvinar malesuada ut non dui. Praesent ante nisi, varius vitae tincidunt rutrum, suscipit id mauris. Nunc et porta quam, et porttitor lorem. In sagittis nisl non quam varius, iaculis scelerisque urna bibendum. </p>
          <div class="readmore"><a href="#">Read More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="col-lg-5">
          <div class="aboutImg"><img src="{{ asset('website/assets/images/aboutImg.jpg') }}"></div>
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
  
  <!--Gallery Section-->
  <div class="gallery-wrap fullwidth style-one">
    <div class="container"> 
      
      <!--Section Title-->
      <div class="title">
        <h1>Our Gallery</h1>
      </div>
      
      <!--Sortable Masonry-->
      <div class="sortable-masonry">
        <div class="auto-container"> 
          <!--Filter-->
          <div class="filters text-center">
            <ul class="filter-tabs filter-btns clearfix">
              <li class="active filter" data-role="button" data-filter=".all"><span class="txt">All</span></li>
              <li class="filter" data-role="button" data-filter=".gym"><span class="txt">Gym</span></li>
              <li class="filter" data-role="button" data-filter=".fitness"><span class="txt">Fitness </span></li>
              <li class="filter" data-role="button" data-filter=".yoga"><span class="txt">Yoga</span></li>
              <li class="filter" data-role="button" data-filter=".running"><span class="txt">Running</span></li>
            </ul>
          </div>
          <div class="items-container clearfix row"> 
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all fitness">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery01.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery01.jpg') }}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all yoga  gym">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery05.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery05.jpg') }}" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all yoga gym">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery03.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery03.jpg') }}" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all running gym yoga">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery04.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery04.jpg') }}" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all fitness running">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery02.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery02.jpg') }}" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
            
            <!--Default Portfolio Item-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all gym yoga">
              <div class="inner-box">
                <div class="image-box"><img src="{{ asset('website/assets/images/gallery06.jpg') }}" alt=""></div>
                <!--Overlay Box-->
                <div class="overlay-box">
                  <div class="overlay-inner">
                    <div class="content">
                      <h3><a href="#">Fiteness Center</a></h3>
                    </div>
                  </div>
                </div>
                <a href="{{ asset('website/assets/images/gallery06.jpg') }}" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Sortable Masonry--> 
      
    </div>
  </div>
  <!--Gallery End--> 
  
  <!--Classes Start-->
  <div class="classes-wrap">
    <div class="container">
      <div class="title center">
        <h1>Our Popular Classes</h1>
      </div>
      <ul class="owl-carousel classessWrp">
        <li class="item">
          <div class="classInfo">
            <div class="classImg"><img src="{{ asset('website/assets/images/weight-lifting.jpg') }}" alt=""></div>
            <h3><a href="class-details.html">Yoga Class</a></h3>
            <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
          </div>
        </li>
        <li class="item">
          <div class="classInfo">
            <div class="classImg"><img src="{{ asset('website/assets/images/running.jpg') }}" alt=""></div>
            <h3><a href="class-details.html">Weight Lifting Class</a></h3>
            <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
          </div>
        </li>
        <li class="item">
          <div class="classInfo">
            <div class="classImg"><img src="{{ asset('website/assets/images/weight.jpg') }}" alt=""></div>
            <h3><a href="class-details.html">Running Class</a></h3>
            <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!--Classes End--> 
  
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
  
  <!--Counter Start-->
  <div id="counter">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <span class="counter-number" data-from="1" data-to="399" data-speed="1000">399</span> <span class="counter-text">Happy Client</span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
            <span class="counter-number" data-from="1" data-to="8312" data-speed="2000">8312</span> <span class="counter-text">Code Line</span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
            <span class="counter-number" data-from="1" data-to="1632" data-speed="3000">1632</span> <span class="counter-text">Project Finished</span> </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
            <span class="counter-number" data-from="1" data-to="206" data-speed="4000">206</span> <span class="counter-text">Awards</span> </div>
        </div>
      </div>
    </div>
  </div>
  <!--Counter End--> 
  
  <!--Blog Start-->
  <div class="blog-wrap">
    <div class="container">
      <div class="title">
        <h1>Our Blog</h1>
      </div>
      <ul class="row">
        <li class="col-lg-4">
          <div class="blogImg"><img src="{{ asset('website/assets/images/blog01.jpg') }}"></div>
          <div class="blogInfo">
            <div class="blog_dete">Jan <span>10</span></div>
            <h3><a href="#">Duis eu tempor urna non lorem</a></h3>
            <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est.</p>
          </div>
        </li>
        <li class="col-lg-4">
          <div class="blogImg"><img src="{{ asset('website/assets/images/blog02.jpg') }}"></div>
          <div class="blogInfo">
            <div class="blog_dete">Jan <span>10</span></div>
            <h3><a href="#">Nam ut diam</a></h3>
            <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
          </div>
        </li>
        <li class="col-lg-4">
          <div class="blogImg"><img src="{{ asset('website/assets/images/blog03.jpg') }}"></div>
          <div class="blogInfo">
            <div class="blog_dete">Jan <span>10</span></div>
            <h3><a href="#">Nulla dignissim porta mauris</a></h3>
            <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!--Blog End-->
</main>
@endsection

