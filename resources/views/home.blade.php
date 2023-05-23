@extends('layouts.app')

@section('content')
    <div class="cards-section">

        <div class="cards">

            @foreach ($comics as $comic)
                <div class="single-card">
                    <div class="img">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="load-more">Load more</div>
        <div class="current-series">current series</div>
    </div>
@endsection
