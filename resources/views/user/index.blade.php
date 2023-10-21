<h1>List of Users</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->first_name }} {{ $user->last_name }} - Email: {{ $user->email }}</li>
    @endforeach
</ul>
