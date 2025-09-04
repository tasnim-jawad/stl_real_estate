<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent--- gradient-color-4---">
    <!-- ltn__header-top-area start -->
    @php
        // Helper function to get the first value or null
        function get_setting_value($setting) {
            return $setting?->values?->first()?->value ?? '';
        }

        // basic info
        $phone_value = get_setting_value($settingTitles->where('title', 'phone_numbers')->first());
        $email_value = get_setting_value($settingTitles->where('title', 'emails')->first());
        $address_value = get_setting_value($settingTitles->where('title', 'address')->first());
        // social links
        $facebook_value = get_setting_value($settingTitles->where('title', 'facebook')->first());
        $instagram_value = get_setting_value($settingTitles->where('title', 'instagram')->first());
        $twitter_value = get_setting_value($settingTitles->where('title', 'twitter')->first());
        $linkedin_value = get_setting_value($settingTitles->where('title', 'linkedin')->first());
        $youtube_value = get_setting_value($settingTitles->where('title', 'youtube')->first());
        // logos
        $header_logo_value = get_setting_value($settingTitles->where('title', 'header_logo')->first());

        // @dd($phone_value, $email_value, $address_value, $facebook_value, $instagram_value, $twitter_value)
    @endphp
    <div class="ltn__header-top-area section-bg-6">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="javascript:void(0)" class="text-white fw-normal"><i class="icon-mail"></i> {{$email_value ?? 'starlithomesltd@gmail.com'}}</a></li>
                            <li><a href="javascript:void(0)" class="text-white fw-normal"><i class="icon-placeholder"></i> {{$address_value ?? "Mirpur DOHS, Dhaka-1216"}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                {{-- <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media-header">
                                        <ul>
                                            <li><a href="{{$facebook_value}}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$twitter_value}}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$youtube_value}}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="{{$instagram_value}}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{$linkedin_value}}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->
    
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ route('home') }}"><img class="h-100" src="{{ asset($header_logo_value ?? 'uploads/default.jpg') }}" alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:+{{$phone_value}}">{{$phone_value}}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu font_size">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>

                                    <li class=""><a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="menu-icon"><a href="{{ route('properties') }}">Property</a>
                                        <ul id="property_category">
                                            
                                            {{-- <li><a href="{{ route('properties.luxury') }}">Luxury</a></li>
                                            <li><a href="{{ route('properties.classic') }}">Classic</a></li>
                                            <li><a href="{{ route('properties.wellness') }}">Welmess Communities</a></li>
                                            <li><a href="{{ route('properties.comercial') }}">Comercial</a></li>
                                            <li><a href="{{ route('properties.ongoing') }}">Ongoing</a></li>
                                            <li><a href="{{ route('properties.upcoming') }}">upcoming</a></li>
                                            <li><a href="{{ route('properties.completed') }}">Completed</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="{{ route('gallery') }}">gallery</a>
                                        <ul>
                                            <li><a href="{{ route('gallery.image') }}">Image gallery</a></li>
                                            <li><a href="{{ route('gallery.video') }}">Video gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('news') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li class="special-link">
                                        <a href="/login">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col--- ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->

<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/frontend') }}/img/product/1.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/frontend') }}/img/product/2.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">3 Rooms Manhattan</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/frontend') }}/img/product/3.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">OE Replica Wheels</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/frontend') }}/img/product/4.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Shock Mount Insulator</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img class="h-100" src="{{ asset('assets/frontend') }}/img/logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li class="active"><a  href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('properties') }}">Property</a>
                    <ul class="sub-menu" id="property_category_2nd">
                        {{-- <li><a href="{{ route('properties.ongoing') }}">Ongoing</a></li>
                        <li><a href="{{ route('properties.luxury') }}">Luxury</a></li>
                        <li><a href="{{ route('properties.comercial') }}">Comercial</a></li>
                        <li><a href="{{ route('properties.wellness') }}">Welmess Communities</a></li>
                        <li><a href="{{ route('properties.classic') }}">Classic</a></li> --}}
                    </ul>
                </li>
                <li><a href="{{ route('gallery') }}">gallery</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('gallery.image') }}">Image gallery</a></li>
                        <li><a href="{{ route('gallery.video') }}">Video gallery</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('news') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li class="special-link mt-2 ms-0">
                    <a href="/login">Login</a>
                </li>
            </ul>
        </div>
       
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="{{$facebook_value}}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{$twitter_value}}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{$youtube_value}}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                <li><a href="{{$instagram_value}}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{$linkedin_value}}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->
@push('js_start')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('/properties/categories')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('property_category');
            const container_2nd = document.getElementById('property_category_2nd');
            container.innerHTML = ''; // Clear existing content if any
            console.log(data);
            
            data?.data.forEach(category => {
                const li1 = document.createElement('li');
                li1.innerHTML = `<a href="/properties/category-wise/${category.name}">${category.name}</a>`;
                container.appendChild(li1);

                const li2 = document.createElement('li');
                li2.innerHTML = `<a href="/properties/category-wise/${category.name}">${category.name}</a>`;
                container_2nd.appendChild(li2);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    });
</script>
@endpush