<div class="list-group-item">
    <img class="mr-3" src="{{ $user->gravatar() }}" width=32>
    <a href="{{ route('users.show',$user) }}">
        {{ $user->name }}
    </a>
    @can('destroy',$user)
    <form action="">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
    @endcan
</div>