@extends('layouts.main_page')

@section('content')

    <div class="index-container">
        <div class="index-ad">
            <div class="index-long-ad">
                @foreach ($long_fixed_ad as $ad)
                    <a href={{$ad->ad_url}} target="_blank">
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
            <div class="index-short-ad">
                @foreach ($short_fixed_ad as $ad)
                    <a href={{$ad->ad_url}} target="_blank">
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
            <div class="index-shortest-ad">
                @foreach ($shortest_fixed_ad as $ad)
                    <a href={{$ad->ad_url}} target="_blank">
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
        </div>

        <div class="sites">
            <div class="sites-unit">
                <div class="sites-unit-title">成人社区</div>
                @php
                    $sites = $adult_sites;
                @endphp
                @include('subviews.site_board')
            </div>

            <div class="index-search-container">
                <form id="sf" action="http://v.yizhansou.com/search" accept-charset="UTF-8" onsubmit="document.charset='UTF-8'" target="_black">
                    <div class="input-group">
                            <input class="form-control" placeholder="Search for..." id="kw" name="kw" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">搜索</button>
                            </span>
                    </div>
                </form>
            </div>

            <div class="sites-unit">
                <div class="sites-unit-title">欧美剧</div>
                @php
                    $sites = $tv_sites;
                @endphp
                @include('subviews.site_board')
            </div>

            <div class="sites-unit">
                <div class="sites-unit-title">小说阅读</div>
                @php
                    $sites = $novel_sites;
                @endphp
                @include('subviews.site_board')
            </div>
        </div>
    </div>

    <div class="index-left-ad">
        @foreach ($left_float_ad as $ad)
            <a href={{ $ad->ad_url }} target="_blank">
                <img src="/img/{{ $ad->ad_image_url}}" height={{ $ad->height }} width={{ $ad->width }} />
            </a>
        @endforeach
    </div>

    <div class="index-right-ad">
        @foreach ($right_float_ad as $ad)
            <a href={{ $ad->ad_url }} target="_blank">
                <img src="/img/{{ $ad->ad_image_url}}" height={{ $ad->height }} width={{ $ad->width }} />
            </a>
        @endforeach
    </div>
@endsection