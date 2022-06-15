@extends('layouts.web_master', ['pageName' => 'gallery'])
@section('main_content')
<main>
    <!-- Inner Heading start -->
    <div class="inner-heading">
        <div class="container">
        <h1>Gallery</h1>
        </div>
    </div>
    <!-- Inner Heading end -->
    <div class="inner-content">
        <div class="container"> 
          <!--Sortable Masonry-->
          <div class="sortable-masonry">
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
                  <a href="images/gallery01.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery05.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery03.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
              </div>
              
              <!--Default Portfolio Item-->
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all running gym yoga">
                <div class="inner-box">
                  <div class="image-box"><img src="{{ asset('website/assets/images/gallery04.jp') }}g" alt=""></div>
                  <!--Overlay Box-->
                  <div class="overlay-box">
                    <div class="overlay-inner">
                      <div class="content">
                        <h3><a href="#">Fiteness Center</a></h3>
                      </div>
                    </div>
                  </div>
                  <a href="images/gallery04.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery02.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery06.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery05.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
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
                  <a href="images/gallery03.jpg" class="image-link fancybox" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
              </div>
              
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
                  <a href="images/gallery01.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Sortable Masonry--> 
        
    </div>
    {{-- gallery end --}}
</main>
@endsection
