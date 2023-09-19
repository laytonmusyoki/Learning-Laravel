<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','crud operations')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        *{
            box-sizing: border-box;
        }
        .navbar{
            margin:2% 5%;
            background: grey;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        h2{
            color: aqua;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>CRUD operation on MySQL using Laravel</h2>
    </div>
    @yield('content')

    <h5 style="position: fixed;bottom:10px; right:10px; color:green;">Layton Softwares</h5>
</body>
</html>