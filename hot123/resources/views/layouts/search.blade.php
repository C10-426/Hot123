@extends('layouts.main_page')

@section('content')

    <div class="search-wrap fl">
        <form id="formUrl" action="search" method="get">
            <p><input class="search-box" id="s-box" name="kw" type="text" autocomplete="off"></p>
            <input class="submit-input" type="submit" id="search" placeholder="请输入检索关键字" data-eid="qd_A13">
            <span id="search-btn" class="search-btn" for="search">
                <em class="iconfont" data-eid="qd_A13"></em>
            </span>
        </form>
    </div>

    <div class="search-result">
        <iframe name="ifm" id="ifm" src="//www.qidian.com/search?kw={{$kw}}" scrolling="yes" style="background-color: transparent;" frameBorder=0 scrolling=no width="100%" onLoad="iFrameHeight()">
        </iframe>
    </div>

    <script type="text/javascript" language="javascript"> 
        function iFrameHeight() { 
            var winHeight = 800;
            // 获取窗口高度
            if (window.innerHeight)
                winHeight = window.innerHeight;
            else if ((document.body) && (document.body.clientHeight))
                winHeight = document.body.clientHeight;
            // 通过深入 Document 内部对 body 进行检测，获取窗口大小
            if (document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth)
            {
                winHeight = document.documentElement.clientHeight;
                winWidth = document.documentElement.clientWidth;
            }
            var ifm= document.getElementById("ifm"); 
            if(ifm != null) { 
                ifm.height = winHeight; 
            } 
        } 
    </script>
@endsection