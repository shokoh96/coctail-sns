@extends('layouts.auth')

@section('content')
    <div class="container" id="register">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1><a href="/">ここ酒</a></h1>
                    <div class="auth-text">{{ __('新規登録') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row tp">
                                <label for="name" class="rubi">{{ __('ニックネーム') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="m-form-text @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <small class="caution">※英数字3~16文字（登録後の変更はできません）</small>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>※{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>※{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="8文字以上の半角英数">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>※{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="8文字以上の半角英数">
                                </div>
                            </div>

                            <div class="form-check">
                                <input id="age" class="form-check-input  @error('age') is-invalid @enderror" type="checkbox"
                                    name="age" value="{{ old('age') }}" required autocomplete="age">
                                <label class="form-check-label" for="age">
                                    あなたは20歳以上ですか？
                                </label>
                            </div>

                            <div class="form-group row mb-0 submit-btn">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録する[無料]') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <p>既にアカウントを持っている方</p>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
