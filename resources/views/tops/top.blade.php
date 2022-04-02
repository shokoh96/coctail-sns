<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ここ酒</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- リセットCSS -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- 独自CSS取得 -->
    <link href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css" rel="stylesheet">
    <link href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/4-1-6/css/4-1-6.css" rel="stylesheet">
    <!-- 自作CSS -->
    <link rel="stylesheet" href="css/top.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb677ce336.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ローディング（手書き風） -->
    <div id="splash">
        <div id="splash_logo">
            <svg id="mask" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" width="635.14" height="267.28" viewBox="0 0 635.14 267.28"
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
        <div id="container">
            <div class="main-top">
                <div class="top-left">
                    <nav>
                        <ul class="item">
                            @auth
                                <li class="nav-item dropdown">
                                    <div>
                                        <a href="{{ route('logout') }}"
                                            onclick="confirm('ログアウトしてもよろしいですか?'); event.preventDefault();
                                                                                        document.getElementById('logout-form').submit();">
                                            ログアウト
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li><a href="{{ route('register') }}">新規登録</a></li>
                                <li><a href="{{ route('login') }}">ログイン</a></li>
                            @endauth
                            <li><a href="#">お酒検索</a></li>
                            <li><a href="#">記録一覧</a></li>

                        </ul>
                    </nav>

                    <div class="top-left-text">
                        <p class="title">心をお酒に。</p>
                        <h1>ここ酒</h1>
                        <p>いまの気分でお酒を探す場所</p>
                    </div><!-- /.top-left-text -->
                </div><!-- /.top-left-->
                <div class="top-right">
                    <div class="top-right-text">
                        <p>
                            あの日の味を<br>
                            思い出す場所に。
                        </p>
                    </div><!-- /.section-right-text -->
                    <div class="top-right-btn">
                        <ul>
                            <li>
                                <a class="cocktail-serach" href="search"><img src="img/top_button1.jpg" alt="お酒を探す"></a>
                            </li>
                            <li>
                                <a class="cocktail-memo" href="#"><img src="img/top_button2.jpg" alt="お酒を探す"></a>
                            </li>
                        </ul>
                    </div><!-- /.top-right-btn -->
                </div><!-- /.top-right -->
            </div><!-- /.main-top -->

            <div class="main-bottom">
                <div id="bottom-header">
                    <div class="scrolldown"><span>Scroll</span></div>
                </div><!-- /#bottom-header -->
                <div id="video-area">
                    <video id="video" poster="img/top_cocktail.png" webkit-playsinline playsinline muted autoplay loop>
                        <source src="img/top_whiskey.mp4" type="video/mp4">
                    </video>
                </div><!-- /video-area -->
                <div id="bottom-container">
                    <div class="bottom-tp">
                        <div class="bottom-tp-left">
                            <p>
                                お酒に詳しくない<br>
                                気分で決めたい<br>
                                思い出したい<br>
                                記録したい
                            </p>
                            <p>
                                あなたのお酒と出会える場所に
                            </p>
                        </div><!-- /.bottom-tp-left -->
                        <div class="bottom-tp-right">
                            <img src="img/top_relax.png" alt="サンプルイメージ">
                        </div><!-- /.bottom-tp-right -->
                    </div><!-- /.bottom-tp -->
                    <div class="bottom-bt">
                        <div class="bottom-bt-contents">
                            <img src="img/top_bt-image.png" alt="今日は何のむ?">
                            <div class="bt-contents-search">
                                <p>お酒を探す？ <a href="#">▶︎ Click</a></p>
                            </div>
                            <div class="bt-contents-memory">
                                <p>あの日のお酒は… <a href="#">▶︎ Click</a></p>
                            </div>
                            <div class="bt-contents-memo">
                                <p>思い出を残す <a href="#">▶︎ Click</a></p>
                            </div>
                        </div><!-- /.bottom-bt-contents -->
                    </div><!-- /.bottom-bt -->
                </div><!-- /#bottom-container -->
            </div><!-- /.main-bottom -->
        </div><!-- /.container -->
    </main>

    <footer class="footer">
        <h3>ここ酒</h3>
        <p>copyright &copy; 2022 the 5th class All Rights Reserved</p>
    </footer>
    <!--==============JQuery読み込み===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/top.js"></script>
</body>

</html>
