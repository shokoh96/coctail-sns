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

        </div>
    @endsection
