<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>hot123</title>

    <link rel="stylesheet" href="{{ URL::asset('css/main_page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?4720f99ea74ffb6539d6f421c83dce94";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

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

    <div class="main-page-content">
        @yield('content')
    </div>


</body>
</html>