<div class="list-group-item">
    <img class="mr-3" src="{{ $user->gravatar() }}" width=32>
    <a href="{{ route('users.show',$user) }}">
        {{ $user->name }}
    </a>
</div>