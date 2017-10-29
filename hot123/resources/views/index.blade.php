@extends('layouts.main_page')

@section('content')

    <div class="index-container">
        <div class="index-ad">
            <div class="index-long-ad">
                @foreach ($long_fixed_ad as $ad)
                    <a href={{$ad->ad_url}}>
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
            <div class="index-short-ad">
                @foreach ($short_fixed_ad as $ad)
                    <a href={{$ad->ad_url}}>
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
            <div class="index-shortest-ad">
                @foreach ($shortest_fixed_ad as $ad)
                    <a href={{$ad->ad_url}}>
                        <img src="/img/{{ $ad->ad_image_url }}" height={{ $ad->height }} width={{ $ad->width }} />
                    </a>
                 @endforeach
            </div>
        </div>

        <div class="sites">
            <div class="sites-unit">
                <div class="sites-unit-title"></div>
                <div class="sites-unit-board panel panel-default">
                    <div class="panel-body">
                    @for($i = 0; $i < 6; $i++)
                        <div class="sites-unit-board-row">
                            @for($j = 0; $j < 6; $j++)
                                @php
                                    $index = ($i * 6) + $j;
                                @endphp
                                <div class="sites-unit-board-row-item">
                                @if ($index < count($sites))
                                    <a href={{$sites[$index]->link_url}}>{{$sites[$index]->link_name}}</a>
                                @else
                                    <a href="">place holder</a>
                                @endif
                                </div>
                            @endfor
                        </div>
                    @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-left-ad">
        @foreach ($left_float_ad as $ad)
            <a href={{ $ad->ad_url }}>
                <img src="/img/{{ $ad->ad_image_url}}" height={{ $ad->height }} width={{ $ad->width }} />
            </a>
        @endforeach
    </div>

    <div class="index-right-ad">
        @foreach ($right_float_ad as $ad)
            <a href={{ $ad->ad_url }}>
                <img src="/img/{{ $ad->ad_image_url}}" height={{ $ad->height }} width={{ $ad->width }} />
            </a>
        @endforeach
    </div>
@endsection