<h1>Users</h1>
<hr>

<ul>
    @foreach($users as $user)
        <li>{{$user->name}} - {{$user->email}}</li>
    @endforeach
</ul>
