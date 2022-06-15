@extends('layouts.web_master', ['pageName' => 'class'])
@section('main_content')
<main>
<div class="inner-heading">
    <div class="container">
      <h1>Classes</h1>
    </div>
  </div>
  <!-- Inner Heading end -->
  
  <div class="inner-content"> 
    
    <!--Classes Start-->
    <div class="classes-wrap">
      <div class="container">
        <ul class="classessWrp row">
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/weight-lifting.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Yoga Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/running.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Running Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/weight.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Weight Lifting Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/running.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Running Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/weight.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Weight Lifting Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="classInfo">
              <div class="classImg"><img src="{{ asset('website/assets/images/weight-lifting.jpg') }}" alt=""></div>
              <h3><a href="class-details.html">Yoga Class</a></h3>
              <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--Classes End-->   
  </div>
</main>
@endsection