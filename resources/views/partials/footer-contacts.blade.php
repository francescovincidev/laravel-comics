<?php
$socialList = [
    'title' => 'Follow us',
    'socials' => ['footer-facebook.png', 'footer-twitter.png', 'footer-youtube.png', 'footer-pinterest.png', 'footer-periscope.png'],
];

?>


<div class="footer-contacts">
    <div class="content">
        <div class="singup">sing-up now!</div>
        <div class="socials">
            <ul>
                <li>
                    {{ $socialList['title'] }}
                </li>
                @foreach ($socialList['socials'] as $social)
                    <li>
                        <img src="{{ Vite::asset('resources/img/' . $social) }}" alt="">

                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
