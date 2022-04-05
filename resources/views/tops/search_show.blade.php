@extends('layouts.app')

@section('content')
    <div class="container" id="search-show">
        <div class="search-show-container">
            <div class="back-btn text-center">
                <a href="javascript:history.back()">戻る</a>
            </div>

            <div class="show-box">
                <div class="box-inner">
                    <div class="box-contents">
                        <p class="cocktail_digest">ジンの良さを気軽に楽しめる王道のカクテル</p>
                        <h1>ジン・トニック</h1>
                        <div class="box-tags">
                            <div class="tag-group">
                                <div class="tag">
                                    <span>ベース</span>
                                    <p>ウイスキー</p>
                                </div>
                                <div class="tag">
                                    <span>技法</span>
                                    <p>ビルド</p>
                                </div>
                            </div>
                            <div class="tag-group">
                                <div class="tag">
                                    <span>味わい</span>
                                    <p>辛口</p>
                                </div>
                                <div class="tag">
                                    <span>スタイル</span>
                                    <p>ロング</p>
                                </div>
                            </div>
                            <div class="tag-group">
                                <div class="tag">
                                    <span>度数</span>
                                    <p>16%</p>
                                </div>
                                <div class="tag">
                                    <span>Top</span>
                                    <p>オール</p>
                                </div>
                            </div>
                        </div>
                        <div class="explanation col-7 cocktail-explanation">
                            <hr>
                            <p class="cocktail_desc">
                                ジンとトニックウォーターをビルドするシンプルなレシピ。家でも簡単に作れる上、さっぱりして飲みやすい。シンプルかつスタンダードなカクテルが故にバーテンダーの腕が出やすいとされる。なお、トニックウォーターだけでは甘すぎる場合は炭酸水を半分入れたジン・ソニックというカクテルもある。
                            </p>
                        </div>
                        <div class="recipes-title col-6">作り方</div>
                        <div class="recipes col-5">
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
                        <div class="explanation col-7">
                            <p class="recipe_desc">
                                グラスに氷を入れてジンを注ぎ、その後冷えたトニック・ウォーターでグラスを満たし、炭酸が抜けないよう軽くステアする。最初にカットしたライムを飾り付ける。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back-btn text-center back-btn-bt">
                <a href="javascript:history.back()">戻る</a>
            </div>
        </div>
    </div>
@endsection
