<?php

$blueList = [
    [
        'img' => 'buy-comics-digital-comics.png',
        'text' => 'digital comics',
    ],
    [
        'img' => 'buy-comics-merchandise.png',
        'text' => 'dc merchadise',
    ],
    [
        'img' => 'buy-comics-subscriptions.png',
        'text' => 'subscription',
    ],
    [
        'img' => 'buy-comics-shop-locator.png',
        'text' => 'comic chop locator',
    ],
    [
        'img' => 'buy-dc-power-visa.svg',
        'text' => 'dc power visa',
    ],
];
?>

<div class="blue-content">
    <div class="content">
        @foreach ($blueList as $btn)
            <div>
                <img src="{{ Vite::asset('resources/img/' . $btn['img']) }}" alt="">
                <div>{{ $btn['text'] }}</div>
            </div>
        @endforeach
    </div>
</div>
