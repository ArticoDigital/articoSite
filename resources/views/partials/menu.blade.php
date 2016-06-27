@inject('menu', 'Artico\Services\MenuBack')
<nav class="Menu col-2">
    <ul>
        @foreach($menu->getMenu() as $key => $link)
            <li>
                <a href="{{ route($link['route']) }}">
                    <figure><img src="{{asset('images/'.$link['class'].'.svg')}}"></figure>
                    <span>{{ $key }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</nav>