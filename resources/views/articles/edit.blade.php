@extends('layouts.article-app')

@section('title', 'ここ酒 - 編集画面')

@section('content')
    <div class="container" id="article-edit">
        <h1 class="text-center text-white">編集<img src="{{ asset('img/edit.png') }}" alt="編集"></h1>
        <div class="form-container">
            <div class="form-inner">
                <div class="article-form col-10 mx-auto">
                    <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @include('articles.form')

                        <div class="form-btn">
                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                                削除する
                            </a>
                            <button type="submit" class="ml-5">更新する</button>
                        </div>
                    </form>
                    <!-- modal -->
                    <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
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
                </div>
            </div>
        </div>
        <div class="back-btn">
            <a href="{{ route('articles.index') }}"><i class="fas fa-arrow-circle-left mr-2"></i>投稿一覧に戻る</a>
        </div>
    </div>
@endsection
