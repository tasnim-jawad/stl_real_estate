<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pt-50 pb-50 plr--7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Gallery</h6>
                    <h1 class="section-title">Image Gallery</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active-full-width-d">
            <!-- ltn__product-item -->
            @foreach ($images as $image)
                <div class="col-lg-4">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                          <a href="{{ asset($image?->image ?? 'uploads/default.jpg') }}" data-rel="lightcase:myCollection">
                                <img class="gallery_img_custom" src="{{ asset($image?->image ?? 'uploads/default.jpg') }}" alt="image gallery">
                            </a>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="javascript:void(0)">{{$image?->title}}</a></h2>
                        </div>
                    </div>
                </div>
                
            @endforeach
            <!-- ltn__product-item -->
            {{-- <div class="col-lg-4">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <img src="{{ asset('assets/frontend') }}/img/product-3/2.jpg" alt="#">
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-4">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <img src="{{ asset('assets/frontend') }}/img/product-3/3.jpg" alt="#">
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                    </div>
                </div>
            </div>  --}}
            <!--  -->
        </div>
        <div>
            <ul>
                <li class="special-link show_button">
                    <a href="{{ route('gallery.image') }}">Show more</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->