<?php $menuLinks = [
    [
        'text' => 'Characters',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Comics',
        'url' => '#',
        'current' => true,
    ],
    [
        'text' => 'Movies',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'TV',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Games',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Collectibles',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Videos',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Fans',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'News',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Shop',
        'url' => '#',
        'current' => false,
    ],
]; ?>

<div class="header-menu">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    <ul>
        @foreach ($menuLinks as $menu)
            <li>
                {{ $menu['text'] }}
                <div class="blue-orizontal"></div>
            </li>
        @endforeach
    </ul>
</div>
