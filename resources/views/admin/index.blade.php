<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- tailwind --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- font-awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css" integrity="sha512-nS1/hdh2b0U8SeA8tlo7QblY6rY6C+MgkZIeRzJQQvMsFfMQFUKp+cgMN2Uuy+OtbQ4RoLMIlO2iF7bIEY3Oyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css" integrity="sha512-EvFBzDO3WBynQTyPJI+wLCiV0DFXzOazn6aoy/bGjuIhGCZFh8ObhV/nVgDgL0HZYC34D89REh6DOfeJEWMwgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
      @font-face {
        font-family: self-font-regular;
        src: url('{{asset("fonts/Noto_Sans/NotoSans-Regular.ttf")}}');
      }
      @font-face {
        font-family: self-font-medium;
        src: url('{{asset("fonts/Noto_Sans/NotoSans-Medium.ttf")}}');
      }
      @font-face {
        font-family: self-font-thin;
        src: url('{{asset("fonts/Noto_Sans/NotoSans-Thin.ttf")}}');
      }
  </style>
</head>
<body class="font-[self-font-regular]">
    <div id="app" class="transition-all">
        <router-view></router-view>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>