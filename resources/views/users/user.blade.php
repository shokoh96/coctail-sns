<div class="col-md-11 col-12 mx-auto pr-0 user-card">
    <div class="card-body">
        <div class="d-flex flex-row">
            <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
                <i class="fas fa-user-circle fa-3x"></i>
            </a>
            @if (Auth::id() !== $user->id)
                <follow-button class="ml-auto" :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
                    :authorized='@json(Auth::check())'
                    endpoint="{{ route('users.follow', ['name' => $user->name]) }}">
                </follow-button>
            @endif
        </div>
        <h2 class="h4 font-weight-normal card-title m-0">
            <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark text-decoration-none">
                {{ $user->name }}
            </a>
        </h2>
    </div>
    <div class="card-body">
        <div class="card-text">
            <a href="{{ route('users.followings', ['name' => $user->name]) }}"
                class="text-muted mr-3 text-decoration-none follow">
                {{ $user->count_followings }}フォロー
            </a>
            <a href="{{ route('users.followers', ['name' => $user->name]) }}"
                class="text-muted text-decoration-none follow">
                {{ $user->count_followers }}フォロワー
            </a>
        </div>
    </div>
</div>
