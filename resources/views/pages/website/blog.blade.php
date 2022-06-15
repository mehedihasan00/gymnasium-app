@extends('layouts.web_master', ['pageName' => 'blog'])
@section('main_content')
<div class="inner-heading">
    <div class="container">
      <h1>Our Blogs</h1>
    </div>
</div>
  <!-- Inner Heading end -->
  
<div class="inner-content"> 

<!--Blog Start-->
<div class="blog-wrap">
    <div class="container">
    <div class="row">
        <div class="col-lg-9">
        <ul class="row">
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog01.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Nulla dignissim porta mauris</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog02.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Nam ut diam</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog03.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Nam ut diam</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog02.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Aliquam vitae pulvinar tortor</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog03.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Nam ut diam</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
            <li class="col-lg-6 col-md-6">
            <div class="blogImg"><img src="images/blog01.jpg" alt=""></div>
            <div class="blogInfo">
                <div class="blog_dete">Jan <span>10</span></div>
                <h3><a href="#">Nullam ut risus ut ante placerat</a></h3>
                <p>Cu laoreet repudiare vel, sit no esse meis propriae. Ad quot vidit delectus est, ex semper consequat cum.</p>
                <div class="readmore viewbtn"><a href="#">Read More</a></div>
            </div>
            </li>
        </ul>
        <nav aria-label="...">
            <ul class="pagination">
            <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"> <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a> </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
        </nav>
        </div>
        <div  class="col-lg-3">
        <div class="sidebar">
            <div class="single-sidebar widget">
            <h3 class="widget-title">Search</h3>
            <div class="sidebar-search">
                <input type="text" placeholder="Search here...">
                <span>
                <button type="submit"><i class="fa fa-search"></i></button>
                </span> </div>
            </div>
            <div class="service-details">
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
            <div class="service-details">
            <div class="widget">
                <h3 class="widget-title">Archives</h3>
                <ul class="archive">
                <li><a href="#">June 2015<span>(10)</span></a></li>
                <li><a href="#">May 2015<span>(21)</span></a></li>
                <li><a href="#">April2015 <span>(58)</span></a></li>
                <li><a href="#">March 2015 <span>(25)</span></a></li>
                </ul>
            </div>
            </div>
            <div class="widget">
            <h5 class="widget-title">Tags</h5>
            <ul class="tags">
                <li><a href="#">boxing</a></li>
                <li><a href="#">Event Planner</a></li>
                <li><a href="#">Fitness Class</a></li>
                <li><a href="#">Sport Games</a></li>
                <li><a href="#">Training Courses</a></li>
                <li><a href="#">Trip Planner</a></li>
                <li><a href="#">yoga</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!--Blog End--> 
</div>
@endsection