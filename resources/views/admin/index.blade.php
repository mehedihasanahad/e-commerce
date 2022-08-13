<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- tailwind --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>