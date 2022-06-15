@extends('layouts.web_master', ['pageName' => 'pricing-table'])
@section('main_content')
<main>
<!-- Inner Heading start -->
  <div class="inner-heading">
    <div class="container">
      <h1>Pricing Table</h1>
    </div>
  </div>
  <!-- Inner Heading end -->
  
  <div class="inner-content">
    <div class="container"> 
      
      <!--Pricing Table Start-->
      <div class="pricing-wrap">
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
      <!--Pricing Table Start--> 
      
    </div>
  </div>
</main>
@endsection