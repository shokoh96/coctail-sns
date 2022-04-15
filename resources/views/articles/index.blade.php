@extends('layouts.article-app')

@section('title', 'ここ酒 - 投稿一覧')

@section('content')
    <div class="container" id="article-index">
        <h1 class="mb-5">投稿一覧</h1>
        <div class="cards col-12">
            @foreach ($articles as $article)
                @include('articles.card')
            @endforeach
        </div>
        <div id="page_top"><a href="#"></a></div>
    @endsection
