@extends('layouts.app')

@section('content')
    <div class="container" id="search-index">
        <div class="search-form">
            <form method="get" action="#">
                <div class="form-group row d-block col-md-4 text-center mx-auto mb-4">
                    <label for="name" class="col-form-label">{{ __('フリーワード') }}</label>
                    <div>
                        <input class="form-control col-sm-12" type="text" id="word" name="word"
                            placeholder="マティーニ ライム シンプル etc…">
                    </div>
                </div>

                <div class="form-group row col-sm-9 mx-auto text-center">

                    <div class="form-group col-sm-4">
                        <label for="base_id" class="col-form-label">お酒のベース</label>
                        <select name="base_id" id="base_id" class="form-control"
                            {{ Form::select('base_id', [
                                null => '選択なし',
                                1 => 'ジン',
                                2 => 'ウォッカ',
                                3 => 'テキーラ',
                                4 => 'ラム',
                                5 => 'ウイスキー',
                                6 => 'ブランデー',
                                7 => 'リキュール',
                                8 => 'ワイン',
                                9 => 'ビール',
                                10 => '日本酒',
                                0 => 'ノンアルコール',
                            ]) }}>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="taste_id" class="col-form-label">甘口-辛口</label>
                        <select name="taste_id" id="taste_id" class="form-control"
                            {{ Form::select('taste_id', [
                                null => '選択なし',
                                1 => '甘口',
                                2 => '中甘口',
                                3 => '中口',
                                4 => '中辛口',
                                5 => '辛口',
                            ]) }}>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="alcohol" class="col-form-label">度数</label>
                        <select name="alcohol" id="alcohol" class="form-control"
                            {{ Form::select('alcohol', [
                                null => '選択なし',
                                '0 0' => 'ノンアルコール',
                                '1 10' => '1~10(弱め)',
                                '11 20' => '11~20(普通)',
                                '21 30' => '21~30(やや強い)',
                                '31 40' => '31~40(強い)',
                                '41 100' => '41~ (とても強い)',
                            ]) }}>
                        </select>
                    </div>

                </div>

                <div class="form-group row tp">
                    <div class="col-md-2 mx-auto mt-4">
                        <button class="form-control" type="submit">お酒を探す</button>
                    </div>
                </div>

            </form>
        </div><!-- /.search-form -->
        <div class="search-result">
            <div class="cards">
                <div class="row">
                    {{-- @foreach ($posts as $post) --}}
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    <a href="#" class="col-lg-4 col-md-6">
                        <div class="card">
                            <h2 class="japanese">マティーニ</h2>
                            <p class="english">Martini</p>
                            <div class="card-body">
                                <p class="summarize">カクテルの王様</p>
                                <div class="items">
                                    <div class="col-6">
                                        <span>Base</span>
                                        ジン
                                    </div>
                                    <div class="col-6">
                                        <span>Tec</span>
                                        ステア
                                    </div>
                                    <div class="col-6">
                                        <span>Taste</span>
                                        ショート
                                    </div>
                                    <div class="col-6">
                                        <span>Style</span>
                                        辛口
                                    </div>
                                    <div class="col-6">
                                        <span>Alc.</span>
                                        42%
                                    </div>
                                    <div class="col-6">
                                        <span>Top</span>
                                        食前
                                    </div>
                                </div>
                                <p class="explanation">
                                    ジンとドライベルモットをミキシンググラスでステアし、グラスに注ぐ。オリーブをカクテルピックに刺して沈め、仕上げにレモンピールをふる。
                                </p>
                                <img src="{{ asset('img/API-result.png') }}" alt="カクテル一覧">
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </a>
                    {{-- @endforeach --}}
                </div><!-- /.row -->
            </div><!-- /.cards -->
        </div><!-- /.search-result -->
        <div class="page-top-btn">
            <a href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div><!-- /.top-btn -->
    </div>
@endsection
