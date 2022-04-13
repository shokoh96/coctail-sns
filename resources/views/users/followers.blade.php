@extends('layouts.article-app')

@section('title', $user->name . 'のフォロワー')

@section('content')
    <div class="container">
        @include('users.user')
        @include(('users.tabs', ['hasArticles' => false, 'hasLikes' => false]))
        @foreach($followings as $person)
            @include('users.person')
        @endforeach
    </div>
@endsection
