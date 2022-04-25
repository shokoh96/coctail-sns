@extends('layouts.article-app')

@section('title', $user->name . '-お気に入り')

@section('content')
    <div class="container" id="user-page">
        @include('users.user')

        @include('users.tabs', ['hasArticles' => false, 'hasLikes' => true])

        @if ($articles->isNotempty())
            @foreach ($articles as $article)
                @include('articles.card')
            @endforeach
            <div id="page_top"><a href="#"></a></div>
        @else
            <div class="no-article col-11 mx-auto text-center">
                <h2 class="text-white">いいねしている投稿はまだありません。</h2>
                <img src="{{ asset('img/user-like.png') }}" alt="いいねしている投稿はまだありません">
                <p class="text-white h3">初めてのいいねをしてみましょう。</p>
            </div>
        @endif

    </div>
@endsection
