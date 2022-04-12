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
                    <div class="bt-title">
                        <p>{{ $article->created_at->format('Y/m/d H:i') }}</p>
                        <h2>{{ $article->name }}</h2>
                        <div class="card-body pt-0 pb-2 pl-3">
                            <div class="card-text">
                                <article-like>

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
