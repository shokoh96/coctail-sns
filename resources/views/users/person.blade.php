<div class="card mt-3 col-11 mx-auto">
    <div class="card-body">
        <div class="d-flex flex-row align-items-center">
            <a href="{{ route('users.show', ['name' => $person->name]) }}" class="text-dark">
                <i class="fas fa-user-circle fa-3x"></i>
            </a>

            <h2 class="h4 card-title m-0 mt-3 ml-3">
                <a href="{{ route('users.show', ['name' => $person->name]) }}" class="text-dark">
                    {{ $person->name }}
                </a>
            </h2>

            @if (Auth::id() !== $person->id)
                <follow-button class="ml-auto" :initial-is-followed-by="@json($person->isFollowedBy(Auth::user()))"
                    :authorized='@json(Auth::check())'
                    endpoint="{{ route('users.follow', ['name' => $person->name]) }}">
                </follow-button>
            @endif
        </div>
    </div>
</div>
