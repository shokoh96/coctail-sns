@extends('layouts.article-app')

@section('title', $user->name . '-お気に入り')

@section('content')
    <div class="container" id="user-page">
        @include('users.user')
        <ul class="nav nav-tabs nav-justified mt-3">
            <li class="nav-item">
                <a href="{{ route('users.show', ['name' => $user->name]) }}" class="nav-link text-muted">
                    投稿
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.likes', ['name' => $user->name]) }}" class="nav-link text-muted active">
                    お気に入り
                </a>
            </li>
        </ul>
        @foreach ($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection
