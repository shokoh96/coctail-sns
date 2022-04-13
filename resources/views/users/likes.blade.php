@extends('layouts.article-app')

@section('title', $user->name . '-お気に入り')

@section('content')
    <div class="container" id="user-page">
        @include('users.user')

        @include('users.tabs', ['hasArticles' => false, 'hasLikes' => true])

        @foreach ($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection
