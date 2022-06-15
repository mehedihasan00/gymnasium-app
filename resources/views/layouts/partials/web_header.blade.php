<div class="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('website/assets/images/logo.png') }}" alt=""></a></div>
          <div class="navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          </div>
        </div>
        <div class="col-lg-8"> 
          
          <!--Navegation Start-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container"> <a class="navbar-brand" href="#">Menu</a>
              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item @php($pageName == 'home'? 'active': '')@endphp"> <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    {{-- <ul class="submenu">
                      <li><a href="index.html">Home 01 Slider</a></li>
                      <li><a href="index2.html">Home 02 Video bg</a></li>
                      <li><a href="index-one-page.html">Home 03 one page</a></li>
                      <li><a href="index-video-one-page.html">Home 04 one page</a></li>
                    </ul> --}}
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('gallery') }}">Gallery</a> </li>
                  <li class="nav-item {{($pageName == 'class'? 'active': '') }}"> <a class="nav-link" href="{{ route('class') }}">Classes</a>
                  {{-- <i class="fa fa-caret-down" aria-hidden="true"></i>
                    <ul class="submenu">
                      <li><a href="classes.html">Classes</a></li>
                      <li><a href="class-details.html">Singal Classes</a></li>
                    </ul> --}}
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="#.">Pages</a>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                    <ul class="submenu">
                      {{-- <li><a href="{{ route('about') }}">About</a> </li> --}}
                      {{-- <li><a href="{{ route('trainers') }}">Our Experts</a></li> --}}
                      <li><a href="{{ route('pricing_table') }}">Our Pricing</a></li>
                      <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                      <li><a href="{{ route('faq') }}">FAQs</a></li>
                      {{-- <li><a href="typoghrapy.html">Typoghrapy</a></li> --}}
                      {{-- <li><a href="404-page.html">404</a></li> --}}
                    </ul>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('trainers') }}">Trainers</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                  {{-- <i class="fa fa-caret-down" aria-hidden="true"></i>
                    <ul class="submenu">
                      <li><a href="blog.html">Blog with Sidebar</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul> --}}
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Contact</a> </li>
                </ul>
              </div>
            </div>
          </nav>
          
          <!--Navegation End--> 
        </div>
      </div>
    </div>
  </div>