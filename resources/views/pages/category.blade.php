@extends('layout/layout')
@section('title', 'Category')
@push('style')
{{-- price range --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- extra css for price range --}}
<style>
    .noUi-connect {
        background: rgb(234 88 12/1);
    }
</style>
@endpush
@section('content')
<div class="grid grid-cols-5 gap-x-4">
    {{-- filter plate --}}
    <div class="hidden lg:grid grid-cols-1 gap-y-4 h-max">
        <div class="bg-white p-2 rounded">
            <h1 class="text-md">Filter</h1>
        </div>
        <div class="bg-white py-2 rounded">
            <h1 class="text-sm text-gray-400 px-2">Price</h1>
            <div class="border-t border-gray-200 mt-1"></div>
            <div id="slider-range">
                <div class="px-2 mt-4">
                    <div id="slider"></div>
                </div>
                <div id="range-value" class="px-2 mt-4 flex items-center justify-center">
                    <div id="min" class="px-4 py-1 border border-gray-400"></div>
                    <div id="max" class="p-4 py-1 border border-gray-400"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- products display --}}
    <div class="col-span-5 lg:col-span-4">
        {{-- header --}}
        <div class="w-full h-max flex flex-wrap bg-white p-2 rounded justify-between">
            <div id="view" class="flex gap-x-4 text-gray-700">
                {{-- <button title="grid">
                    <i class="fa-solid fa-grip"></i>
                </button>
                <button title="List">
                    <i class="fa-solid fa-list"></i>
                </button> --}}
                <h1 class="text-sm font-[self-font-medium]">Walton</h1>
            </div>
            <div id="sorting" class="flex gap-x-4 items-center">
                <h1 class="text-xs">Sort By: </h1>
                <select id="countries" class="bg-gray-50 border border-gray-300 outline-none  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option selected>Default</option>
                    <option value="High">Price (High > Low)</option>
                    <option value="Low">Price (Low > High)</option>
                    <option value="Highest">Rating (Highest)</option>
                    <option value="Lowest">Rating (Lowest)</option>
                </select>

                <h1 class="text-xs">Show: </h1>
                <select id="countries" class="bg-gray-50 border border-gray-300 outline-none  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="16">16</option>
                    <option value="25" selected>25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        {{-- products --}}
        <div id="products" class="mt-4 product-grid-view">
            @for ($i = 0; $i < 12; $i++)
                <div id="card" class="bg-white rounded-lg drop-shadow-md relative">
                    <div id="save-tag" class="absolute top-2 right-2 bg-orange-600 text-[0.625rem]
                    text-white py-1 px-2 rounded-full font-[self-font-regular]">
                        Save: 1000৳
                    </div>
                    <div id="product-img" class="flex justify-center">
                        <img class="h-[170px] w-[170px] object-contain" src="https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-228x228.jpg" alt="product image">
                    </div>
                    <div class="h-[2px] bg-slate-100 mt-4"></div>
                    <div id="namePrice" class="p-2">
                        <h1 class="text-base"><a href="#" class="hover:text-orange-600 hover:underline">Razer DeathAdder Essential Gaming Mouse</a></h1>
                        <div id="product-price" class="flex justify-center gap-x-4 mt-2">
                            <div class="font-semibold text-orange-600">1,699৳</div>
                            <div class="font-semibold text-gray-400 line-through decoration-[1.2px] font-[self-font-thin]">2,000৳</div>
                        </div>
                    </div>
                    <div id="product-btn-group" class="flex justify-center my-3 gap-x-4">
                        <button title="add to cart" class="font-[self-font-medium] py-1 px-2 bg-orange-200 text-sm text-orange-800 rounded focus:outline-1 focus:outline focus:outline-orange-800">
                            Add To Cart
                        </button>
                        {{-- <button title="view"></button> --}}
                        <button title="wishlist" class="py-1 px-2 bg-orange-200 text-sm text-orange-800 rounded focus:outline-1 focus:outline focus:outline-orange-800">
                            <i class="fa-solid fa-heart-circle-plus"></i>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
        {{-- pagination --}}
        <div class="bg-white p-2 rounded mt-4 flex flex-wrap justify-between items-center">
            <div id="pages">1</div>
            <div class="text-sm">Showing 1 to 16 of 26 (2 Pages)</div>
        </div>
    </div>
</div>
@endsection

@push('script')
{{-- price range --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let slider = document.getElementById('slider');
    noUiSlider.create(slider, {
        start: [10000, 50000],
        connect: true,
        range: {
            'min': 0,
            'max': 75000
        }
    });
    slider.noUiSlider.on('update', function (values, handle) {
        let rangeValue = slider.noUiSlider.get();
        document.getElementById('min').innerHTML = Math.round(rangeValue[0]);
        document.getElementById('max').innerHTML = Math.round(rangeValue[1]);
    });
</script>
@endpush


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function changeHref() {
    var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?arg=1';    
    window.history.pushState({ path: refresh }, '', refresh);
    axios.get(refresh).then(res=> {
        document.body.innerHTML = res.data;
        // console.log(res);
    });
    
}
</script> --}}