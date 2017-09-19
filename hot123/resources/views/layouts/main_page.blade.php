<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>hot123</title>

    <link rel="stylesheet" href="{{ URL::asset('css/main_page.css') }}">
    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body id="main-page-layout">
    <nav class="main-page-nav navbar navbar-default">
        <div class="main-page-nav-container container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="logo" src="...">
                </a>
            </div>
        </div>
    </nav>

    <div class="main-page-head-ad">
    Head advertise
    </div>

    <div class="main-page-left-ad">
        Left Advertise
    </div>
    <div class="main-page-content">
        @yield('content')
    </div>
    <div class="main-page-right-ad">
        Right Advertise
    </div>


</body>
</html>