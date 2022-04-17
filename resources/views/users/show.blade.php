@extends('layouts.article-app')

@section('title', $user->name)

@section('content')
    <div class="container" id="user-page">
        @include('users.user')

        @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])

        @if ($articles->isNotempty())
            @foreach ($articles as $article)
                @include('articles.card')
            @endforeach
            <div id="page_top"><a href="#"></a></div>
        @else
            <div class="no-article col-11 mx-auto text-center">
                <h2 class="text-white">投稿はまだありません。</h2>
                <img src="{{ asset('img/user-article.png') }}" alt="投稿がまだありません">
                <p class="text-white h3">初めての投稿をしてみましょう。</p>
            </div>
        @endif
    </div>
@endsection
