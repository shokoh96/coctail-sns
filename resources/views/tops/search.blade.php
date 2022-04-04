@extends('layouts.app')

@section('content')
    <div class="container" id="search-form">
        <div class="search-form-container">
            <form method="get" action="{{ route('searches.index') }}">
                <div class="form-group row d-block col-md-4 col-sm-8 col-12 text-center mx-auto mb-4">
                    <label for="name" class="col-form-label">{{ __('フリーワード') }}</label>
                    <div>
                        <input class="form-control" type="text" id="word" name="word" placeholder="マティーニ ライム シンプル etc…">
                    </div>
                </div>

                <div class="form-group row col-sm-8 col-12 mx-auto text-center">

                    <div class="form-group col-md-4 col-6 base">
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
                            ]) }}
                            </select>
                    </div>
                    <div class="form-group col-md-4 col-6 taste">
                        <label for="taste_id" class="col-form-label">甘口-辛口</label>
                        <select name="taste_id" id="taste_id" class="form-control"
                            {{ Form::select('taste_id', [
                                null => '選択なし',
                                1 => '甘口',
                                2 => '中甘口',
                                3 => '中口',
                                4 => '中辛口',
                                5 => '辛口',
                            ]) }}
                            </select>
                    </div>
                    <div class="form-group col-md-4 col-6 frequency">
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
                            ]) }}
                            </select>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-lg-2 col-sm-3 col-8 mx-auto mt-5">
                        <button class="form-control" type="submit">お酒を探す</button>
                    </div>
                </div>

            </form>
        </div><!-- /.search-form-container -->
    </div>
@endsection
