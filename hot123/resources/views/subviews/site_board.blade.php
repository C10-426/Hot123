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
                    <a href={{$sites[$index]->link_url}} target="_blank">{{$sites[$index]->link_name}}</a>
                @else
                    <a href="">place holder</a>
                @endif
                </div>
            @endfor
        </div>
    @endfor
    </div>
</div>