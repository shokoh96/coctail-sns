@extends('layouts.article-app')

@section('title', 'ここ酒 - 編集画面')

@section('content')
    <div class="container" id="article-edit">
        <h1 class="text-center text-white">編集<img src="{{ asset('img/edit.png') }}" alt="編集"></h1>
        <div class="form-container">
            <div class="form-inner">
                <div class="article-form col-10 mx-auto">
                    <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @include('articles.form')
                        <div class="form-btn">
                            <button type="submit">更新する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="back-btn">
            <a href="{{ route('articles.index') }}"><i class="fas fa-arrow-circle-left mr-2"></i>投稿一覧に戻る</a>
        </div>
    </div>
@endsection
