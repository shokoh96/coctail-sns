@extends('layouts.app')

@section('content')
    <div class="container" id="search-show">
        <div class="search-show-container">
            <div class="damy"></div>

            <div class="back-btn text-center">
                <a href="javascript:history.back()">戻る</a>
            </div>

            <div class="show-box">
                <div class="box-inner">
                    <div class="box-contents">
                        <p class="cocktail_digest">ジンの良さを気軽に楽しめる王道のカクテル</p>
                        <h1>ジントニック</h1>
                        <div class="box-tag">
                            <div class="col-6">
                                <span>ベース</span>
                                ジン
                            </div>
                            <div class="col-6">
                                <span>技法</span>
                                ビルド
                            </div>
                            <div class="col-6">
                                <span>味わい</span>
                                辛口
                            </div>
                            <div class="col-6">
                                <span>スタイル</span>
                                ロング
                            </div>
                            <div class="col-6">
                                <span>度数</span>
                                16%
                            </div>
                            <div class="col-6">
                                <span>Top</span>
                                オール
                            </div>
                            <div class="col-6">
                                <span>グラス</span>
                                タンブラー
                            </div>
                        </div>
                        <div class="recipes">
                            <div class="col-12 d-flex justify-content-between">
                                <p>ジン</p>
                                <p>45ml</p>
                            </div>
                            <hr>
                            <div class="col-12 d-flex justify-content-between">
                                <p>トニックウォーター</p>
                                <p>FullUP</p>
                            </div>
                            <hr>
                            <div class="col-12 d-flex justify-content-between">
                                <p>ライム</p>
                                <p>1/6個</p>
                            </div>
                            <hr>
                        </div>
                        <p class="recipe_desc">
                            グラスに氷を入れてジンを注ぎ、その後冷えたトニック・ウォーターでグラスを満たし、炭酸が抜けないよう軽くステアする。最初にカットしたライムを飾り付ける。
                        </p>
                        <hr>
                        <p class="cocktail_desc">
                            ジンとトニックウォーターをビルドするシンプルなレシピ。家でも簡単に作れる上、さっぱりして飲みやすい。シンプルかつスタンダードなカクテルが故にバーテンダーの腕が出やすいとされる。なお、トニックウォーターだけでは甘すぎる場合は炭酸水を半分入れたジン・ソニックというカクテルもある。
                        </p>
                    </div>
                </div>
            </div>

            <div class="back-btn text-center back-btn-bt">
                <a href="javascript:history.back()">戻る</a>
            </div>
        </div>
    </div>
@endsection
