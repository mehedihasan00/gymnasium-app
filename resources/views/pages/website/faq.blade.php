@extends('layouts.web_master', ['pageName' => 'faq'])
@section('main_content')
<main>
<!-- Inner Heading start -->
<div class="inner-heading">
<div class="container">
    <h1>FAQs</h1>
</div>
</div>
<!-- Inner Heading end -->
  
<div class="inner-content">
    <div class="container"> 
        <!--FAQs Start-->
        <div class="title">
        <h1>General</h1>
        </div>
        <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0 panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Duis aute irure dolor in reprehenderit <i class="fa fa-plus collape-plus"></i> </a> </h5>
            </div>
            <div id="collapseOne" class="collapse show bg-custom" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non 
                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on 
                it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic 
                synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0 panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Duis aute irure dolor in reprehenderit <i class="fa fa-plus collape-plus"></i> </a> </h5>
            </div>
            <div id="collapseTwo" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non 
                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on 
                it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic 
                synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0 panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Duis aute irure dolor in reprehenderit <i class="fa fa-plus collape-plus"></i> </a> </h5>
            </div>
            <div id="collapseThree" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non 
                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on 
                it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic 
                synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
            </div>
        </div>
        <!--FAQs End--> 
        </div>
    </div>
</div>
</main>
@endsection