 <!-- FEATURE AREA START ( Feature - 6) -->
 <div class="container">
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Main Goal</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center px-3">
            @foreach ($our_services as $item)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <a href="{{ asset($item?->image ?? 'uploads/default.jpg') }}" data-rel="lightcase:myCollection">
                                <img class="service_img_custom" src="{{ asset($item?->image ?? 'uploads/default.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="/properties">{{ $item?->title}}</a></h3>
                            <p>{{$item?->description }}</p>
                            <a class="ltn__service-btn" href="{{$item?->url}}">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{ asset('assets/frontend') }}/img/icons/icon-img/21.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Buy a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{ asset('assets/frontend') }}/img/icons/icon-img/22.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Rent a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{ asset('assets/frontend') }}/img/icons/icon-img/23.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Sell a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div> 
 </div>
<!-- FEATURE AREA END -->