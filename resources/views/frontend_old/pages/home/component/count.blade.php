  <!-- COUNTER UP AREA START -->
  <div class="container">
    <div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
        <div class="row">
            @foreach ($at_a_glance as $item)
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            {{-- <i class="flaticon-select"></i> --}}
                            <a href="{{ asset($item?->icon ?? 'uploads/default.jpg') }}" data-rel="lightcase:myCollection">
                                <img class="at_aglance_image" src="{{ asset($item?->icon ?? 'uploads/default.jpg') }}" alt="icon">

                            </a>
                        </div>
                        <h1><span class="counter">{{$item?->number}}</span><span class="counterUp-icon">+</span> </h1>
                        <h6>{{$item?->title}}</h6>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-excavator"></i>
                    </div>
                    <h1><span class="counter">12</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Project Ongoing</h6>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-office"></i>
                    </div>
                    <h1><span class="counter">166</span><span class="counterUp-letter"></span><span class="counterUp-icon">+</span> </h1>
                    <h6>Happy customers</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-armchair"></i>
                    </div>
                    <h1><span class="counter">17</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Years of experience</h6>
                </div>
            </div> --}}
        </div>
    </div>
  </div>
<!-- COUNTER UP AREA END -->