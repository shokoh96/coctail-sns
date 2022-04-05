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
                        <p class="cocktail_digest">{{ $posts['cocktail_digest'] }}</p>
                        <h1>{{ $posts['cocktail_name'] }}</h1>
                        <div class="box-tags">
                            <div class="tag-group">
                                <div class="tag">
                                    <span>ベース</span>
                                    <p>{{ $posts['base_name'] }}</p>
                                </div>
                                <div class="tag">
                                    <span>技法</span>
                                    <p>{{ $posts['technique_name'] }}</p>
                                </div>
                            </div>
                            <div class="tag-group">
                                <div class="tag">
                                    <span>味わい</span>
                                    <p>{{ $posts['taste_name'] }}</p>
                                </div>
                                <div class="tag">
                                    <span>スタイル</span>
                                    <p>{{ $posts['style_name'] }}</p>
                                </div>
                            </div>
                            <div class="tag-group">
                                <div class="tag">
                                    <span>度数</span>
                                    <p>{{ $posts['alcohol'] }}%</p>
                                </div>
                                <div class="tag">
                                    <span>Top</span>
                                    <p>{{ $posts['top_name'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="explanation col-7 cocktail-explanation">
                            <hr>
                            <p class="cocktail_desc">{{ $posts['cocktail_desc'] }}</p>
                        </div>
                        <div class="recipes-title col-6">作り方</div>
                        <div class="recipes col-5">
                            @foreach ($posts['recipes'] as $recipe)
                                <div class="col-12 d-flex justify-content-between">
                                    <p>{{ $recipe['ingredient_name'] }}</p>
                                    <p>{{ $recipe['amount'] }}{{ $recipe['unit'] }}</p>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        <div class="explanation col-7">
                            <p class="recipe_desc">{{ $posts['cocktail_desc'] }}</p>
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
