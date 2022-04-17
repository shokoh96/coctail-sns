@extends('layouts.article-app')

@section('title', $user->name . 'のフォロワー')

@section('content')
    <div class="container" id="user-page">
        @include('users.user')
        @include('users.tabs', ['hasArticles' => false, 'hasLikes' => false])

        @if ($followers->isNotempty())
            @foreach ($followers as $person)
                @include('users.person')
            @endforeach
        @else
            <div class="no-article col-11 mx-auto text-center">
                <h2 class="text-white">フォロワーはまだいません。</h2>
                <img src="{{ asset('img/follower.png') }}" alt="フォロワーはまだいません。">
            </div>
        @endif
    </div>
@endsection
