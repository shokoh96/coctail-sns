@extends('layouts.article-app')

@section('title', $user->name . 'のフォロー中')

@section('content')
    <div class="container" id="user-page">
        @include('users.user')
        @include('users.tabs', ['hasArticles' => false, 'hasLikes' => false])

        @if ($followings->isNotempty())
            @foreach ($followings as $person)
                @include('users.person')
            @endforeach
        @else
            <div class="no-article col-11 mx-auto text-center">
                <h2 class="text-white">フォロー中のユーザーはまだいません。</h2>
                <img src="{{ asset('img/following.png') }}" alt="フォロー中のユーザーはまだいません。">
                <p class="text-white h3">初めてのフォローをしてみましょう。</p>
            </div>
        @endif
    </div>
@endsection
