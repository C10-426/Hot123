<div class="sites-unit-board panel panel-default">
    <div class="panel-body">
    @for($i = 0; $i < 5; $i++)
        <div class="sites-unit-board-row">
            @for($j = 0; $j < 6; $j++)
                @php
                    $index = ($i * 6) + $j;
                @endphp
                <div class="sites-unit-board-row-item">
                @if ($index < count($sites))
                    <?php $link_url = $sites[$index]->link_url; ?>
                    <?php $link_name = $sites[$index]->link_name; ?>
                    <a onclick="onUrlClicked('{{$link_url}}')" href="javascript:void(0)" target="_blank">{{$link_name}}</a>
                @else
                    <a href=href="javascript:void(0)">place holder</a>
                @endif
                </div>
            @endfor
        </div>
    @endfor
    </div>
</div>

<<script>
    function onUrlClicked(link_url) {
        _hmt.push(['_trackEvent', 'biz', 'click', 'url', link_url]);
        window.open(link_url);
    }
</script>