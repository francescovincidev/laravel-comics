<?php

$footerList = [
    [
        'title' => 'DC comics',
        'footerLinks' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
    ],
    [
        'title' => 'Shop',
        'footerLinks' => ['Shop DC', 'Shop DC Collectibles'],
    ],
    [
        'title' => 'DC',
        'footerLinks' => ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'],
    ],
    [
        'title' => 'Sites',
        'footerLinks' => ['DC', 'MAD Magazine', 'DC kids', 'DC Universe', 'DC Power Visa'],
    ],
];
?>

<div class="footer-main-content">
    <div class="content">
        <div class="lists">
            @foreach ($footerList as $list)
                <ul>
                    <li>
                        {{ $list['title'] }}
                    </li>
                    @foreach ($list['footerLinks'] as $link)
                        <li>
                            {{ $link }}
                        </li>
                    @endforeach
                </ul>
            @endforeach


        </div>


    </div>

</div>
