@extends('layouts.article-app')

@section('title', 'ここ酒 - 投稿詳細')

@section('content')
    <div class="container" id="article-show">
        <h1 class="mb-5">投稿詳細</h1>
        <div class="back-btn text-center">
            <a href="javascript:history.back()">戻る</a>
        </div>
        <div class="show-container">
            <div class="container-top"><img src="{{ asset('img/show.png') }}" alt="投稿詳細画像"></div>
            <div class="container-bottom">
                <div class="bt-contents">

                    <div class="d-flex">
                        <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
                            <i class="fas fa-user-circle fa-2x mr-1"></i>
                        </a>
                        <div class="w-100">
                            <div class="font-weight-bold d-flex justify-content-between">
                                <a href="{{ route('users.show', ['name' => $article->user->name]) }}"
                                    class="text-dark h4">
                                    {{ $article->user->name }}
                                </a>
                                <p class="mt-1 mb-0 h5">{{ $article->created_at->format('Y/m/d H:i') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bt-title d-flex justify-content-between align-items-center">
                        <h2>{{ $article->name }}</h2>
                        <div>
                            <div class="card-text card-heat">
                                <article-like :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
                                    :initial-count-likes='@json($article->count_likes)'
                                    :authorized='@json(Auth::check())'
                                    endpoint="{{ route('articles.like', ['article' => $article]) }}">
                                </article-like>
                            </div>
                        </div>
                    </div>
                    <div class="bt-content">
                        <div class="content-left">
                            <img src="{{ asset('/storage/' . $article->image) }}" alt="お酒の画像">
                        </div>
                        <div class="content-right">
                            <div class="tag-group">
                                <div class="tag">
                                    <span>ベース</span>
                                    <p>{{ $article->base }}</p>
                                </div>
                                <div class="tag">
                                    <span>味</span>
                                    <p>{{ $article->taste }}</p>
                                </div>
                                <div class="tag">
                                    <span>特徴</span>
                                    <p>{{ $article->feature }}</p>
                                </div>
                            </div>
                            <div class="material-title">作り方</div>
                            <hr>
                            <div class="material">
                                {{ $article->material }}
                            </div>
                            <div class="comment-title">コメント</div>
                            <hr>
                            <div class="comment">
                                {{ $article->comment }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-btn text-center back-btn-bt">
            <a href="javascript:history.back()">戻る</a>
        </div>
    </div>
@endsection
