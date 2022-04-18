@csrf
{{-- @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach --}}
<div class="form-content">
    <div class="form-content-top d-flex">
        <div class="form-tp-left">
            <p class="file-preview">
                <img id="preview"
                    @if (empty($article->image)) src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    @else
                        src="{{ asset('/storage/' . $article->image) }}" @endif
                    style="max-width:200px;">
            </p>
            <input type="file" id="image" name="image" accept='image/png,image/jpeg,image/jpg'
                onchange="previewImage(this);" class="file" value="{{ $article->image ?? old('image') }}">
        </div>
        <div class="form-tp-right">
            <div class="form-group row">
                <label for="name" class="col-2 col-form-label">名前</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="name" name="name" required
                        value="{{ $article->name ?? old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="base" class="col-2 col-form-label">ベース</label>
                <div class="col-10">
                    <input type="text" name="base" class="form-control" id="base" placeholder="ジン、ウォッカ、など"
                        value="{{ $article->base ?? old('base') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="taste" class="col-2 col-form-label">味</label>
                <div class="col-10">
                    <input type="text" name="taste" class="form-control" id="taste" placeholder="甘い、辛い、など"
                        value="{{ $article->taste ?? old('taste') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="feature" class="col-2 col-form-label">特徴</label>
                <div class="col-10">
                    <textarea name="feature" class="form-control" rows="3" id="feature"
                        placeholder="シンプル、さっぱり、など">{{ $article->feature ?? old('feature') }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-4">
        <label for="material" class="col-12 col-form-label">作り方(300文字以内)</label>
        <div class="col-sm-12">
            <textarea name="material" class="form-control" rows="3" id="material" placeholder=""
                maxlength="300">{{ $article->material ?? old('material') }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="comment" class="col-12 col-form-label">コメント(500文字以内)</label>
        <div class="col-sm-12">
            <textarea name="comment" class="form-control" rows="5" id="comment" placeholder=""
                maxlength="500">{{ $article->comment ?? old('comment') }}</textarea>
        </div>
    </div>
</div>
