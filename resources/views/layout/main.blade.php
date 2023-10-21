@extends('user.layout')
@section('main')
<div class="action">
    <form class="action-create" action="{{ route('user.store')}}" method="POST">
        <button type="submit">Create New User</button>
    </form>
</div>
<div class="users">
    <div class="list-user">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php $count=0 ?>
            @foreach($users as $user)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{ $user->first_name }}</td>
                    <td> {{ $user->last_name }} </td>
                    <td> {{ $user->phone_number }}</td>
                    <td> {{ $user->address }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->password }}</td>
                    <td>
                            <div class="action">
                                <form  action="{{ route('user.createupdate', ['post' => $user->id]) }}" method="POST">
                                <div class="btn action-user">
                                    <button class="btn-delete">Delete</button>
                                </div>
                                </form>
                                <form  action="{{ route('user.delete', ['post' => $user->id]) }}" method="POST">
                                <div class="btn action-user">
                                    <button class="btn-edit">Edit</button>
                                </div>
                                </form>
                            </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
