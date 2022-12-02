<h1>Users</h1>
<hr>

<ul>
    @foreach($users as $user)
        <li>{{$user->name}} - {{$user->email}} | <a href="{{route('users.show', $user->id)}}">Detalhes</a></li>
    @endforeach
</ul>
