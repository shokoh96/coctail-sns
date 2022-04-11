@extends('layouts.article-app')

@section('title', 'ここ酒 - 新規投稿')

@section('content')
    <div class="container" id="article-create">
        <h1 class="text-center text-white">新規投稿<img src="{{ asset('img/create.png') }}" alt="新規投稿"></h1>
        <div class="form-container">
            <div class="form-inner">
                <div class="article-form col-10 mx-auto">
                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @include('articles.form')
                        <div class="form-btn">
                            <button type="submit">投稿する</button>
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
