@extends('layout/layout')
@section('title', 'Home')
@push('style')
    {{-- swiper slider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    {{-- animate on scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- extra css for swiper --}}
    <style>
        .swiper-pagination-bullet-active {
            background: transparent !important;
            border: 2px solid white;
        }
        .swiper-pagination-bullet {
            height: 20px;
            width: 20px;
            background: white;
            opacity: 1;         
        }
        .swiper {
            margin-left: 0px;
        }
    </style>
@endpush
@section('content')
    <div id="slider-part" class="block lg:flex lg:gap-x-4">
        <div class="lg:w-[70%]">
            <div id="hero-slider" class="swiper rounded-[0.875rem]">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img class="w-full object-cover" src="{{asset('images/s-1_1920x.webp')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full object-cover" src="{{asset('images/s-2_1920x.webp')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full object-cover" src="{{asset('images/s-3_1920x.webp')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full object-cover" src="{{asset('images/s-4_1920x.webp')}}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            {{-- data-aos="fade-up" --}}
            <div class="flex justify-between gap-x-4 mt-4">
                <div class="overflow-hidden rounded-[0.875rem]"><img class=" cursor-pointer hover:scale-110 duration-[2s]" src="{{asset('images/below-slider/img-1_285x.webp')}}" alt=""></div>
                <div class="overflow-hidden rounded-[0.875rem]"><img class=" cursor-pointer hover:scale-110 duration-[2s]" src="{{asset('images/below-slider/img-2_285x.webp')}}" alt=""></div>
                <div class="overflow-hidden rounded-[0.875rem]"><img class=" cursor-pointer hover:scale-110 duration-[2s]" src="{{asset('images/below-slider/img-3_285x.webp')}}" alt=""></div>
            </div>
        </div>
        <div id="flash-deals" class="hidden lg:block w-[30%]">Coming</div>
        {{-- <div id="flash-deals" class=" w-[25%]">asdf</div> --}}
    </div>

    {{-- shipping content --}}
    <div data-aos="fade-up" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 bg-white rounded-lg mt-4">
        <div class="h-24 lg:h-[7.5rem] flex items-center gap-x-4 px-5">
            <div class="min-h-[60px] min-w-[60px] 
            bg-gray-200 rounded-full flex items-center justify-center">
                <img  class="object-contain" src="{{asset('images/shipping-icon/p-1_120x.png')}}" alt="">
            </div>
            <div class="text-xs">
                <h1 class="inline font-bold">FREE SHIPPING</h1>
                <p class="inline">for US customers ( including Alaska and Hawaii ) or orders over $200</p>
            </div>
        </div>
        <div class="h-24 lg:h-[7.5rem] flex items-center gap-x-4 px-5">
            <div class="min-h-[60px] min-w-[60px] 
            bg-gray-200 rounded-[50%] flex items-center justify-center">
                <img class="object-contain" src="{{asset('images/shipping-icon/p-2_120x.png')}}" alt="">
            </div>
            <div class="text-xs">
                <h1 class="inline font-bold">CREDIT CARDS :</h1>
                <p class="inline"> We accept Visa, American Express, Mastercard and Discover</p>
            </div>
        </div>
        <div class="h-24 lg:h-[7.5rem] flex items-center gap-x-4 px-5">
            <div class="min-h-[60px] min-w-[60px] 
            bg-gray-200 rounded-[50%] flex items-center justify-center">
                <img class="object-contain" src="{{asset('images/shipping-icon/p-3_120x.png')}}" alt="">
            </div>
            <div class="text-xs">
                <h1 class="inline font-bold">FRRETURN POLICY :</h1>
                <p class="inline"> You can return your online order within 30 days of receiving your order</p>
            </div>
        </div>
        <div class="h-24 lg:h-[7.5rem] flex items-center gap-x-4 px-5">
            <div class="min-h-[60px] min-w-[60px] 
            bg-gray-200 rounded-[50%] flex items-center justify-center">
                <img class="object-contain" src="{{asset('images/shipping-icon/p-4_120x.png')}}" alt="">
            </div>
            <div class="text-xs">
                <h1 class="inline font-bold">EXCHANGE POLICY :</h1>
                <p class="inline"> You can exchange your online order within 30 days of receiving your order.</p>
            </div>
        </div>
    </div>

    {{-- category part --}}
    <div data-aos="fade-up" class="mt-4">
        <div id="product-header">
            <h1 class="text-center text-2xl font-bold">Featured Category</h1>
            <p class="text-center text-xs">Get Your Desired Product from Featured Category!</p>
        </div>
        <div id="products" class="mt-4 grid grid-cols-8 gap-3">
            @for ($i = 0; $i < 16; $i++)
                <a href="#" class="hover:text-orange-600">
                    <div id="cat-card" class="bg-white rounded-lg drop-shadow-md p-2">
                        <div id="product-img" class="flex justify-center">
                            <img class="h-[100px] w-[100px] object-contain" src="https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-228x228.jpg" alt="product image">
                        </div>
                        <p class="text-sm font-semibold text-center">Mouse</p>
                    </div>
                </a>
            @endfor
        </div>
    </div>    
    {{-- products part --}}
    <div data-aos="fade-up" class="mt-4">
        <div id="product-header">
            <h1 class="text-center text-2xl font-bold">Featured Products</h1>
            <p class="text-center text-xs">Check & Get Your Desired Product !</p>
        </div>
        <div id="products" class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3">
            @for ($i = 0; $i < 10; $i++)
                <div id="card" class="bg-white rounded-lg drop-shadow-md">
                    <div id="product-img" class="flex justify-center">
                        <img class="h-[230px] w-[230px] object-contain" src="https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-228x228.jpg" alt="product image">
                    </div>
                    <div class="h-[2px] bg-slate-100 mt-4"></div>
                    <div id="namePrice" class="p-4">
                        <h1 class=" text-base"><a href="#" class="hover:text-orange-700 hover:underline">Razer DeathAdder Essential Gaming Mouse</a></h1>
                        <div class="text-base font-bold mt-6 text-orange-700">1,699 <span class=" text-2xl">৳</span></div>
                    </div>
                </div>
            @endfor
        </div>
    </div>


    {{-- products part --}}
    <div data-aos="fade-up" class="mt-4">
        <div id="product-header">
            <h1 class="text-center text-2xl font-bold">New Arrivals</h1>
            <p class="text-center text-xs">Check & Get Your Desired Product !</p>
        </div>
        <div id="products" class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3">
            @for ($i = 0; $i < 10; $i++)
                <div id="card" class="bg-white rounded-lg drop-shadow-md">
                    <div id="product-img" class="flex justify-center">
                        <img class="h-[230px] w-[230px] object-contain" src="https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-228x228.jpg" alt="product image">
                    </div>
                    <div class="h-[2px] bg-slate-100 mt-4"></div>
                    <div id="namePrice" class="p-4">
                        <h1 class=" text-base"><a href="#" class="hover:text-orange-700 hover:underline">Razer DeathAdder Essential Gaming Mouse</a></h1>
                        <div class="text-base font-bold mt-6 text-orange-700">1,699 <span class=" text-2xl">৳</span></div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- description plate --}}
    <div data-aos="fade-up" class="mt-4 rounded-lg p-5 bg-white">
        <div>
            <h1 class="text-sm font-bold">
                SHOPPING AND SALES ONLINE SIMPLE, FAST AND SAFE
            </h1>
            <p class="text-xs mt-4">
                Morbi et justo at enim rutrum molestie sit amet a purus. Quisque vel justo et diam dapibus viverra id vitae ligula. Cras pharetra arcu semper, interdum purus sed, molestie mauris. Phasellus gravida molestie pulvinar. Pellentesque suscipit vulputate diam luctus egestas. Nam dapibus felis ipsum, rutrum fermentum augue bibendum a. Vinovathemes sem. Quisque ac turpis velit. Pellentesque scelerisque condimentum diam, et ultrices tellus aliquam vitae. Proin ut purus pellentesque, porta arcu sit amet, consequat eros. Praesent feugiat, arcu in porta euismod, lorem magna mattis erat
            </p>
            <p class="text-xs mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum tellus non tempor viverra. Pellentesque et libero eget leo tristique tincidunt quis in ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id neque sit amet sem semper cursus. Nunc elementum ligula sed justo viverra, ac rutrum neque pulvinar
            </p>
        </div>
        <div class="mt-4">
            <h1 class="text-sm font-bold">
                SHOPPING AND SALES ONLINE SIMPLE, FAST AND SAFE
            </h1>
            <ul class="text-xs mt-4 list-disc list-inside">
                <li>
                    Morbi et justo at enim rutrum molestie sit amet a purus.
                </li>
                <li>
                    Quisque vel justo et diam dapibus viverra id vitae ligula. Cras pharetra arcu semper, interdum purus sed, molestie mauris.
                </li>
                <li>
                    Phasellus gravida molestie pulvinar pellentesque suscipit vulputate diam luctus egestas.
                </li>
            </ul>
        </div>
        <div class="mt-4">
            <h1 class="text-sm font-bold">
                SHOPPING AND SALES ONLINE SIMPLE, FAST AND SAFE
            </h1>
            <p class="text-xs mt-4">
                Morbi et justo at enim rutrum molestie sit amet a purus. Quisque vel justo et diam dapibus viverra id vitae ligula. Cras pharetra arcu semper, interdum purus sed, molestie mauris. Phasellus gravida molestie pulvinar. Pellentesque suscipit vulputate diam luctus egestas. Nam dapibus felis ipsum, rutrum fermentum augue bibendum a. Vinovathemes sem. Quisque ac turpis velit. Pellentesque scelerisque condimentum diam, et ultrices tellus aliquam vitae. Proin ut purus pellentesque, porta arcu sit amet, consequat eros. Praesent feugiat, arcu in porta euismod, lorem magna mattis erat
            </p>
            <p class="text-xs mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum tellus non tempor viverra. Pellentesque et libero eget leo tristique tincidunt quis in ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id neque sit amet sem semper cursus. Nunc elementum ligula sed justo viverra, ac rutrum neque pulvinar
            </p>
        </div>
    </div>
@endsection



@push('script')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    const swiper = new Swiper(".swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        

        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
</script>
@endpush
