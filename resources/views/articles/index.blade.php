@extends('layouts.article-app')

@section('title', 'ここ酒 - 投稿一覧')

@section('content')
    <div class="container" id="article-index">
        <h1 class="mb-5">投稿一覧</h1>
        <div class="cards col-12">
            <div class="card mb-3 col-11">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Sample-img.jpg') }}" alt="サンプル画像">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-row">
                            <i class="fas fa-user-circle fa-3x mr-1"></i>
                            <div>
                                <div class="font-weight-bold">
                                    ユーザー名
                                </div>
                                <div class="font-weight-lighter">
                                    2020/2/1 12:00
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <h3 class="h4 card-title">
                                ジン・トニック
                            </h3>
                            <div class="card-text">
                                ジンとトニックウォーターをビルドするシンプルなレシピ。家でも簡単に作れる上、さっぱりして飲みやすい。シンプルかつスタンダードなカクテルが故にバーテンダーの腕が出やすいとされる。なお、トニックウォーターだけでは甘すぎる場合は炭酸水を半分入れたジン・ソニックというカクテルもある。
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 col-11">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Sample2.jpeg') }}" alt="サンプル画像">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-row">
                            <i class="fas fa-user-circle fa-3x mr-1"></i>
                            <div>
                                <div class="font-weight-bold">
                                    ユーザー名
                                </div>
                                <div class="font-weight-lighter">
                                    2020/2/1 12:00
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <h3 class="h4 card-title">
                                マティーニ
                            </h3>
                            <div class="card-text">
                                ジンの辛味とドライベルモットの香りが絶妙なカクテルの王様。時代が進むにつれ辛口へと変化している。使用するお酒の種類や配合が無数にあるため、バーによって味が異なると言われている。カクテル好きなら1度は味わっておきたい一杯。
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($articles as $article)
                <div class="card mb-3 col-11">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/storage/' . $article->image) }}" alt="サンプル画像">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-row">
                                <i class="fas fa-user-circle fa-3x mr-1"></i>
                                <div>
                                    <div class="font-weight-bold">
                                        {{ $article->user->name }}
                                    </div>
                                    <div class="font-weight-lighter">
                                        {{ $article->created_at->format('Y/m/d H:i') }}
                                    </div>
                                </div>
                                @if (Auth::id() === $article->user_id)
                                    <!-- dropdown -->
                                    <div class="ml-auto card-text">
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <button type="button" class="btn btn-link text-muted m-0 p-2">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('articles.edit', ['article' => $article]) }}"
                                                    class="dropdown-item">
                                                    <i class="fas fa-pen mr-1"></i>記事を更新する
                                                </a>
                                                {{-- <div class="dropdown-divider"></div> --}}
                                                <a class="dropdown-item text-danger" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $article->id }}">
                                                    <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dropdown -->

                                    <!-- modal -->
                                    <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1"
                                        role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="閉じる">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('articles.destroy', ['article' => $article]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        {{ $article->name }}を削除します。よろしいですか?
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                                        <button type="submit" class="btn btn-danger">削除する</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                @endif
                            </div>
                            <div class="card-body pt-0 pb-2">
                                <h3 class="h4 card-title">
                                    <a class="text-dark"
                                        href="{{ route('articles.show', ['article' => $article]) }}">
                                        {{ $article->name }}
                                    </a>
                                </h3>
                                <div class="card-text">
                                    {{ $article->comment }}
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-2 pl-3">
                                <div class="card-text">
                                    <article-like :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($article->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('articles.like', ['article' => $article]) }}">
                                    </article-like>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
