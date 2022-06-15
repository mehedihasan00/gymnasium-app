@extends('layouts.web_master', ['pageName' => 'classDetail'])
@section('main_content')
<!-- Inner Heading start -->
<div class="inner-heading">
    <div class="container">
      <h1>Class Details</h1>
    </div>
  </div>
  <!-- Inner Heading end -->
  
  <div class="inner-content"> 
    
    <!--Classes Start-->
    <div class="classes-wrap">
      <div class="container">
        <div class="row service-details">
          <div class="col-md-3 col-sm-4">
            <div class="single-sidebar widget">
              <h3 class="widget-title">Search</h3>
              <div class="sidebar-search">
                <input type="text" placeholder="Search here...">
                <span>
                <button type="submit"><i class="fa fa-search"></i></button>
                </span> </div>
            </div>
            <div class="widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="service-menu">
                <li><a href="#" class="active">Fitness Classes</a></li>
                <li><a href="#">Body Building</a></li>
                <li><a href="#">Trainer</a></li>
                <li><a href="#">Running</a></li>
                <li><a href="#">Yoga</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="serviceWrp">
              <div class="serviceImg"><img src="images/new_slider02.jpg" alt=""></div>
              <div class="classInfo">
                <h3><a href="#">Running Class</a></h3>
                <div class="author"> <span><i class="fa fa-user" aria-hidden="true"></i> Jhon Carry</span> <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM</span> </div>
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel odio mi. Sed malesuada laoreet odio nec molestie. Praesent quis odio augue. Duis eleifend diam quis lectus aliquam ornare. Integer sed ligula metus. Donec in ante cursus, sagittis orci at, bibendum risus. Ut non maximus diam.</strong> <br>
                  Aliquam dignissim dui at aliquam efficitur. Maecenas sed egestas orci. Integer imperdiet laoreet quam, a mollis nibh pretium vitae. Sed vel lacus maximus metus varius rhoncus sed a magna. Vivamus vitae augue dui. Nulla orci dolor, euismod quis nisi viverra, ullamcorper mollis tortor. Quisque feugiat enim augue, id varius elit facilisis non. Cras suscipit nisi eu elit dignissim molestie. Aliquam et mi sit amet nisl dictum suscipit nec ac orci. Vivamus euismod nulla ex, sit amet varius augue tristique quis. Donec finibus est vel hendrerit feugiat. Nam malesuada augue non tellus malesuada, ut convallis quam euismod. Quisque sit amet ex sit amet metus tempus ornare at vitae dui. Pellentesque molestie est nulla, in porta ante sollicitudin ut.</p>
                <h3>Pellentesque semper euismod tempor</h3>
                <p>Phasellus malesuada laoreet sem, ac varius libero rutrum sed. Mauris justo sapien, pharetra id pretium at, ornare pretium magna. Duis tellus nunc, imperdiet in ornare id, accumsan eu nunc. Maecenas at iaculis eros. In gravida semper malesuada. In tellus mauris, tempor et eleifend at, suscipit eu arcu. Proin id risus sapien. Donec vel auctor enim. Nam eu libero ac lacus euismod porta sed ut ante.</p>
                <ul class="list-service">
                  <li>Nunc ut dictum diam at eleifend nibh</li>
                  <li>Quisque sit amet ex sit amet metus tempus ornare</li>
                  <li>Vestibulum massa lacus, porttitor non tortor quis</li>
                  <li>Maecenas at iaculis eros in gravida semper malesuada</li>
                  <li>Aliquam dignissim dui at aliquam efficitur</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Classes End--> 
  </div>
</main>
@endsection