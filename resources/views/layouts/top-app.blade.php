<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>ここ酒</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <!-- 独自CSS取得 -->
    <link href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css" rel="stylesheet">
    <link href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/4-1-6/css/4-1-6.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- 自作CSS -->
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb677ce336.js" crossorigin="anonymous"></script>
    <!-- ファビコン -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
</head>

<body>
    <!-- ローディング（手書き風） -->
    <div id="splash">
        <div id="splash_logo">
            <svg id="mask" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="267.28" viewBox="0 0 635.14 267.28"
                style="enable-background:new 0 0 635.14 267.28;" xml:space="preserve">
                <image xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/text.svg" width="635.14"
                    height="267.28" mask="url(#clipmask)"></image>
                <mask id="clipmask" maskUnits="objectBoundingBox">
                    <path class="st0"
                        d="M136.35,0S30.41,240.87,4,204.92,91.13,12.33,111.05,16.19s4-30.51,33.76-5,45.51,25.2,45.51,25.2l-57.07,3,1.17,23.08s-9.38-.78,7.79-5.09L159.39,53s-33.24,41.77-27.53,33.09,21.78-24.6,29.65-17-3.32,46-9,48.76,62-56.47,62-56.47l1.72,37s-2.12-43.2,2.65-43.42S230,40.74,238.89,44.21l17,50.3L234.27,75.14l18.5-4.64L230.6,91.24,261.68,85l35.44-35.89L299.45,85l11.32-31,25.08-7.39-14.26-10,7.94,45.53L314.78,76l22.94-16.09-63.07,78.74-36.44,61.21,17.49-15.18,6.7,34.36,5.33-47.55,58.93-33.16L279.39,193,283,207.76s4.47-16,3.12-15.37,9.84-3.72,9.84-3.32,2.58,13.16,2,13.43-9.9,3.91-9.9,3.91l11.81-1.12s16.27-44.29,16-44.56S321.27,221,321.27,221s-2.85,29.29-3.53,30.1-7.46-3.8-7.46-3.8,62.31-82,64.22-79.62-6.3,51-6.3,51l-12.7-14.71,8.35-18.44,20.08-1.9s1.08,33.9,0,34.19,26.56-33.57,26.56-33.57l28.86-17.82-13.68-12.48L431,202l-11.41-.3-1.61-8.77,8.58-6.74L436,210.57l9.29-1.9,6.77-9.56-8.93-31.48,12.81,9.91L520,129.12l-11.84-19.36,14.6-14.09,29.16-7.46,4.27,21-2,24.08-22.29,14.78-13.86,28.53-5.62,43.27s2.35,24.83-4.26,25.73-13.3,10.3-13.3,10.3l12,11.4,11.21-10.88L500.27,242,573.69,19.25l12.83,2.87-12.83,19,50.81,8.77-18,14.59,28.63,29.85-23,1.24" />
                    <line class="st0" x1="490.5" y1="50.6" x2="459.9" y2="103.6" />
                </mask>
            </svg>
        </div><!-- /splash-logo -->
    </div><!-- /splash -->

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <h3>ここ酒</h3>
        <p>copyright &copy; 2022 the sho koh All Rights Reserved</p>
    </footer>
    <!--==============JQuery読み込み===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/top.js') }}"></script>
</body>

</html>
