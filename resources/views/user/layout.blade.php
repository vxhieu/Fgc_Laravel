<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body class="container">
    <div class="header">
        <div class="header-wrapper">
            <div class="wrapper--title">Manage List User</div>
        </div>
    </div>
    <div class="main">
        @yield('main')
    </div>
    @if(isset($isShow))
    <div class="user-information">
        <div class="form-wrap">
            <div class="form-action">
                <button class="action-close">
                    Close
                </button>
                <div class="title">
                    <span>Edit User</span>
                    <span>Create User</span>
                </div>
            </div>
            <form class="form-data"  action="{{ route('user.create')}}" method="POST">
                <div class="wrap-data">
                    <div class="user">
                        <label>First Name</label>
                        <input name="first_name" placeholder="Enter your first name" autofocus>
                    </div>
                    <div class="user">
                        <label>Last Name</label>
                        <input name="last_name"  placeholder="Enter your last name">
                    </div>
                    <div class="user">
                        <label>Address</label>
                        <input name="address"  placeholder="Enter your address">
                    </div>
                    <div class="user">
                        <label>Phone Number</label>
                        <input name="phone_number"  placeholder="Enter your phone number">
                    </div>
                    <div class="user">
                        <label>Email</label>
                        <input name="email"  placeholder="Enter your email">
                    </div>
                    <div class="user">
                        <label>Password</label>
                        <input name="password"  placeholder="Enter your password">
                    </div>
                </div>
                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endif
</body>
</html>
