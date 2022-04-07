@extends('layouts.app')

@section('title', 'ここ酒 - 検索結果')

@section('content')
    <div class="container" id="search-result">
        <div class="search-result-container">
            @if (!empty($posts))
                <h1 class="mb-5">おすすめのカクテルは...</h1>
            @endif
            <div class="cards">
                <div class="row">
                    @if (!empty($posts))
                        @foreach ($posts as $post)
                            <a href="{{ route('searches.show', $post['cocktail_id']) }}" class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <h2 class="japanese">{{ $post['cocktail_name'] }}</h2>
                                    <p class="english">{{ $post['cocktail_name_english'] }}</p>
                                    <div class="card-body">
                                        <p class="summarize">{{ $post['cocktail_digest'] }}</p>
                                        <div class="items">
                                            <div class="col-6">
                                                <span>Base</span>
                                                @if (!empty($post['base_name']))
                                                    {{ $post['base_name'] }}
                                                @else
                                                    なし
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <span>Tec</span>
                                                {{ $post['technique_name'] }}
                                            </div>
                                            <div class="col-6">
                                                <span>Taste</span>
                                                {{ $post['taste_name'] }}
                                            </div>
                                            <div class="col-6">
                                                <span>Style</span>
                                                {{ $post['style_name'] }}
                                            </div>
                                            <div class="col-6">
                                                <span>Alc.</span>
                                                {{ $post['alcohol'] . '%' }}
                                            </div>
                                            <div class="col-6">
                                                <span>Top</span>
                                                {{ $post['top_name'] }}
                                            </div>
                                        </div>
                                        <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </a>
                        @endforeach
                    @else
                        <div class="not-found mx-auto col-12">
                            <div class="not-found-container text-center col-10">
                                <p class="text-white">検索条件に該当するカクテルがありません。</p>
                                <img src="{{ asset('img/sorry.png') }}" alt="検索条件に該当するカクテルがありません。">
                            </div>
                        </div>
                    @endif

                </div><!-- /.row -->
            </div><!-- /.cards -->
        </div><!-- /.search-result-container -->

        @if (!empty($posts))
            <div class="page-top-btn">
                <a href="#page-top"><i class="fas fa-angle-up"></i></a>
            </div><!-- /.top-btn -->
        @endif
    </div>
@endsection
