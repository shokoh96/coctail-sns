@extends('layouts.article-app')

@section('title', 'ここ酒 - 新規投稿')

@section('content')
    <div class="container" id="article-create">
        <h1 class="text-center text-white">新規投稿<img src="{{ asset('img/create.png') }}" alt="新規投稿"></h1>
        <div class="create-container">
            <div class="create-inner">
                <div class="article-form col-10 mx-auto">
                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <div class="form-content">
                            <div class="form-content-top d-flex">
                                <div class="form-tp-left">
                                    <p class="file-preview">
                                        <img id="preview"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            style="max-width:200px;">
                                    </p>
                                    <input type="file" id="image" name="image" accept='image/png,image/jpeg,image/jpg'
                                        onchange="previewImage(this);" class="file">
                                </div>
                                <div class="form-tp-right">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">名前</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="base" class="col-sm-2 col-form-label">ベース</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="base" class="form-control" id="base"
                                                placeholder="ジン、ウォッカ、など">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="taste" class="col-sm-2 col-form-label">味</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="taste" class="form-control" id="taste"
                                                placeholder="甘い、辛い、など">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="feature" class="col-sm-2 col-form-label">特徴</label>
                                        <div class="col-sm-10">
                                            <textarea name="feature" class="form-control" rows="3" id="feature" placeholder="シンプル、さっぱり、など"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="material" class="col-12 col-form-label">作り方(300文字以内)</label>
                                <div class="col-sm-12">
                                    <textarea name="material" class="form-control" rows="3" id="material" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="comment" class="col-12 col-form-label">コメント(500文字以内)</label>
                                <div class="col-sm-12">
                                    <textarea name="comment" class="form-control" rows="5" id="comment" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button type="submit">投稿する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="back-btn">
            <a href="{{ route('articles.index') }}"><i class="fas fa-arrow-circle-left mr-2"></i>思い出一覧に戻る</a>
        </div>
    </div>
@endsection
