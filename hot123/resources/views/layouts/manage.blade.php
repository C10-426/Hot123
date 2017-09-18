<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOT123 Management</title>

    <link rel="stylesheet" href="{{ URL::asset('css/management.css') }}">
    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body id="management-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <a class="navbar-brand" href="#">HOT ADMIN</a>
        <div class="management-btn">
            <div class="btn-group">
                <button type="button" class="btn btn-default">Hello, username</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="management-menu">
        <ul class="list-group">
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="dropdown-header">Site</li>
                    <li class="list-group-item management-menu-item">Dashboard</li>
                    <li class="list-group-item management-menu-item">Lists</li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="dropdown-header">Advertise</li>
                    <li class="list-group-item management-menu-item">Dashboard</li>
                    <li class="list-group-item management-menu-item">Lists</li>
                </ul>
            </li>            
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="dropdown-header">Others</li>
                    <li class="list-group-item management-menu-item">Dashboard</li>
                    <li class="list-group-item management-menu-item">Lists</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="management-content">
        <div class="panel panel-default">
            <div class="panel-body">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>