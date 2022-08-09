<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'E-commerce')</title>
 
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css" integrity="sha512-nS1/hdh2b0U8SeA8tlo7QblY6rY6C+MgkZIeRzJQQvMsFfMQFUKp+cgMN2Uuy+OtbQ4RoLMIlO2iF7bIEY3Oyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css" integrity="sha512-EvFBzDO3WBynQTyPJI+wLCiV0DFXzOazn6aoy/bGjuIhGCZFh8ObhV/nVgDgL0HZYC34D89REh6DOfeJEWMwgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  @stack('style')
</head>
  <body class="bg-gray-200">
    {{-- header first --}}
    <div class="h-12 bg-gray-800">
      <div class="width-auto-mobile sm:width-auto text-white"></div>
    </div>
    {{-- header second --}}
    <div class="h-16 md:h-24 bg-white sticky top-0 z-10">
      <div class="h-full width-auto-mobile sm:width-auto flex items-center justify-between">
        <div class="text-xl flex justify-center gap-2">
          <div class="flex md:hidden text-gray-400 items-center cursor-pointer hover:text-orange-600">
            <i class="fa-solid fa-bars-staggered"></i>
          </div>
          <img class="h-24 w-24 sm:h-32 sm:w-32 object-contain" draggable="false" src="https://cdn.shopify.com/s/files/1/0599/8746/0264/files/logo_166x.png?v=1632122528" alt="">
        </div>

        <div class="w-[60%]">
          <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="search" id="default-search" 
              class="outline-0 block px-4 py-2 sm:py-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
              ring-orange-500 border-orange-500 dark:bg-gray-700 
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 
              dark:focus:border-orange-500" 
              placeholder="Search Products" required>
              <button type="submit" 
              class="text-white absolute right-[0.3rem] bottom-[0.3rem] sm:right-2.5 sm:bottom-2.5 bg-orange-600 hover:bg-orange-800 focus:ring-4 focus:outline-none 
              focus:ring-orange-300 font-medium rounded-lg text-sm px-2 py-1 sm:px-4 sm:py-2 dark:bg-orange-600 dark:hover:bg-orange-600
                dark:focus:ring-orange-800">
                Search
              </button>
              
            </div>
          </form>
          <div></div>
        </div>

        <div class="hidden xl:flex gap-x-2 items-center">
          <img draggable="false" class="object-contain" src="{{asset('images/icon_call.png')}}" alt="">
          <div>
            <div class="text-xs font-semibold text-gray-600">Customer Support 24/7</div>
            <div class="text-xs font-semibold">Call Us: <span class="text-orange-600">0123-456-789</span></div>
          </div>
        </div>

        <div class="hidden md:flex gap-x-2 items-center">
          <div class="relative">
            <img draggable="false" class="object-contain cursor-pointer cart-hover" 
            src="{{asset('images/icon_cart_header.png')}}" alt="">
            <div class="h-[18px] w-[18px] bg-orange-600 absolute 
            -top-1 left-4 rounded-[50%] flex items-center justify-center text-sm font-bold text-white">
              0
            </div>
          </div>
          <div>
            <div class="text-xs font-semibold">YOUR CART</div>
            <div class="text-xs font-semibold">Total : <span class="text-orange-600">$0</span></div>
          </div>
        </div>
      </div>
    </div>
    {{-- section --}}
    <section class="width-auto-mobile sm:width-auto my-4">
      @yield('content')
    </section>
    {{-- footer --}}
    <div>
      <div data-aos="fade-up" id="foot-top" class="bg-white border-t border-gray-300">
        <div class="width-auto-mobile sm:width-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 divide-x">
          <div class="p-7 flex flex-col items-center justify-center">
            <div id="bg-img" class="relative">
              <img src="{{asset('images/footer-circle.png')}}" alt="">
              <img class="absolute top-7 left-7" src="{{asset('images/footer-img/p-5_40x.png')}}" alt="">
            </div>
            <h1 class="font-bold text-sm mt-4">ACCEPTING ORDERS 24/7</h1>
            <p class="text-xs mt-1">
              LOREM IPSUM DOLOR
            </p>
          </div>
          <div class="p-7 flex flex-col items-center justify-center">
            <div id="bg-img" class="relative">
              <img src="{{asset('images/footer-circle.png')}}" alt="">
              <img class="absolute top-7 left-7" src="{{asset('images/footer-img/p-6_40x.png')}}" alt="">
            </div>
            <h1 class="font-bold text-sm mt-4">MONEY BACK GUARANTEED</h1>
            <p class="text-xs">
              WITH A 30 DAYS
            </p>
          </div>
          <div class="p-7 flex flex-col items-center justify-center">
            <div id="bg-img" class="relative">
              <img src="{{asset('images/footer-circle.png')}}" alt="">
              <img class="absolute top-7 left-7" src="{{asset('images/footer-img/p-7_40x.png')}}" alt="">
            </div>
            <h1 class="font-bold text-sm mt-4">EXPRESS SHIPPING</h1>
            <p class="text-xs">
              OVER ORDER $ 250
            </p>
          </div>
          <div class="p-7 flex flex-col items-center justify-center">
            <div id="bg-img" class="relative">
              <img src="{{asset('images/footer-circle.png')}}" alt="">
              <img class="absolute top-7 left-7" src="{{asset('images/footer-img/p-8_40x.png')}}" alt="">
            </div>
            <h1 class="font-bold text-sm mt-4">EAST & FREE RETURNS</h1>
            <p class="text-xs">
              HOURS: 8AM -11PM
            </p>
          </div>
          <div class="p-7 flex flex-col items-center justify-center">
            <div id="bg-img" class="relative">
              <img src="{{asset('images/footer-circle.png')}}" alt="">
              <img class="absolute top-7 left-7" src="{{asset('images/footer-img/p-9_40x.png')}}" alt="">
            </div>
            <h1 class="font-bold text-sm mt-4">PAYMENT SECURED</h1>
            <p class="text-xs mt-1">
              LOREM IPSUM DOL
            </p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" id="foot-bottom" class="bg-slate-900/95">
        <div class="width-auto-mobile sm:width-auto grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 py-10 px-5 gap-y-6">
          <div>
            <h1 class="font-bold text-md text-white">CUSTOMER SERVICE</h1>
            <ul class="text-gray-400">
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Contact us</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Help and advice</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Shipping & Returns</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Terms and conditions</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Refund Policy</li>
            </ul>
          </div>
          <div>
            <h1 class="font-bold text-md text-white">INFORMATION</h1>
            <ul class="text-gray-400">
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">About Us</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Testimonials</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">My Account</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Payments & Returns</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">View Catalogues Online</li>
            </ul>
          </div>
          <div>
            <h1 class="font-bold text-md text-white">ABOUT US</h1>
            <ul class="text-gray-400">
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Who We Are ?</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Corporate Responsibility</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Bangladesh Laws</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Careers</li>
              <li class="mt-3 cursor-pointer hover:text-orange-600 duration-300">Privacy Policy</li>
            </ul>
          </div>
          <div class="col-span-1 sm:col-span-3 xl:col-span-1">
            <h1 class="font-bold text-md text-white">NEWSLETTER</h1>
            <ul class="text-gray-400">
              <li class="mt-3">
                Sign up for newsletter to receive special offers and exclusive news about Metros products
              </li>
            </ul>
          </div>
        </div>
        <div id="payment-accept" class="text-white bg-gray-900">
          <div class="width-auto-mobile sm:width-auto p-5 flex flex-col items-center gap-y-2 xl:flex-row xl:justify-between">
            <div class="flex items-center gap-x-4">
              <p class="text-xs font-bold">PAYMENT ACCEPT :</p>
              <img src="{{asset('images/footer-img/payment_300x.png')}}" alt="">
            </div>
            <div class="flex items-center gap-x-4">
              <p class="text-xs font-bold">FOLLOW US :</p>
              <div id="social" class="flex gap-x-2">
                <div title="Connect on facebook" class="cursor-pointer h-8 w-8 rounded-full bg-blue-600 flex justify-center items-center hover:bg-orange-600 duration-300">
                  <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div title="Connect on instagram" class="cursor-pointer h-8 w-8 rounded-full bg-blue-600 flex justify-center items-center hover:bg-orange-600 duration-300">
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <div title="Connect on twitter" class="cursor-pointer h-8 w-8 rounded-full bg-blue-600 flex justify-center items-center hover:bg-orange-600 duration-300">
                  <i class="fa-brands fa-twitter"></i>
                </div>
                <div title="Connect on dribble" class="cursor-pointer h-8 w-8 rounded-full bg-blue-600 flex justify-center items-center hover:bg-orange-600 duration-300">
                  <i class="fa-brands fa-dribbble"></i>
                </div>
              </div>
            </div>
            <div>
              <img src="{{asset('images/footer-img/certificate_500x.png')}}" alt="">
            </div>
          </div>
        </div>
        <div class="py-5">
          <p class="text-sm font-semibold text-center text-white">Copyright &copy; 2022 BD-IT. All rights reserved.</p>
        </div>
      </div>
    </div>
    @stack('script')
  </body>
</html>