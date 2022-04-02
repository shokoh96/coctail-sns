@extends('layouts.top-app')
@section('content')
    <div id="container">
        <div class="main-top">
            <div class="top-left">
                {{-- <nav>
                    <ul class="item">
                        @auth
                            <li class="nav-item dropdown">
                                <div>
                                    <a href="{{ route('logout') }}"
                                        onclick="confirm('ログアウトしてもよろしいですか?'); event.preventDefault();
                                                                                                                                        document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
                </nav> --}}

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
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
@endsection
