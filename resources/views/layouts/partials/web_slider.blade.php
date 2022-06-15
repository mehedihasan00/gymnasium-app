<div class="tp-banner-container sliderWraper">
    <div class="tp-banner">
      <ul>
        @foreach ($slider as $item)
          <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="{{ asset('website/assets/images/dummy.png') }}" data-lazyload="{{ asset($item->image) }}">
            <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="235" data-speed="600" data-start="1000"> {{ $item->slogan }}</div>
            <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="270" data-speed="600" data-start="1600"> {{ $item->headerline }} </div>
            <div class="caption lft large-title tp-resizeme slidertext3" data-x="center" data-y="380" data-speed="600" data-start="2200">{{ $item->description }}<br/>
              some text</div>
            <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="440" data-speed="600" data-start="2800"><a href="#" class="slidebtn">Join Us <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
          </li>
        @endforeach
      </ul>
    </div>
</div>