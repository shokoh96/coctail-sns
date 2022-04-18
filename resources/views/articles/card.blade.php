<div class="card mb-3 col-md-11 col-12">
    <div class="row no-gutters">
        <div class="col-md-4 card-img">
            <a href="{{ route('articles.show', ['article' => $article]) }}"><img
                    src="{{ asset('/storage/' . $article->image) }}" alt="お酒の画像"></a>
        </div>
        <div class="col-md-8 card-info">
            <div class="card-body d-flex flex-row">
                <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
                    <i class="fas fa-user-circle fa-3x mr-1"></i>
                </a>
                <div class="user-info">
                    <div class="font-weight-bold">
                        <a href="{{ route('users.show', ['name' => $article->user->name]) }}"
                            class="text-dark text-decoration-none">
                            {{ $article->user->name }}
                        </a>
                    </div>
                    <div class="font-weight-lighter">
                        {{ $article->created_at->format('Y/m/d H:i') }}
                    </div>
                </div>
                @if (Auth::id() === $article->user_id)
                    <!-- dropdown -->
                    <div class="ml-auto">
                        <div class="dropdown">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button type="button" class="btn btn-link text-muted m-0 p-2">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('articles.edit', ['article' => $article]) }}"
                                    class="dropdown-item">
                                    <i class="fas fa-pen mr-1"></i>編集する
                                </a>
                                <a class="dropdown-item text-danger" data-toggle="modal"
                                    data-target="#modal-delete-{{ $article->id }}">
                                    <i class="fas fa-trash-alt mr-1"></i>削除する
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- dropdown -->

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
                @endif
            </div>
            <div class="card-body card-content pt-0 pb-2">
                <h3 class="h3 card-title">
                    <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
                        {{ $article->name }}
                    </a>
                </h3>
                <div class="card-text">
                    {{ $article->comment }}
                </div>
                <div class="card-text card-heat">
                    <article-like :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
                        :initial-count-likes='@json($article->count_likes)' :authorized='@json(Auth::check())'
                        endpoint="{{ route('articles.like', ['article' => $article]) }}">
                    </article-like>
                </div>
            </div>
        </div>
    </div>
</div>
