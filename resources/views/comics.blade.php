@extends('layout.default')

@section('content')
{{-- Comics --}}
<div class="relative-parent">
    <h3>Current Series</h3>
    <div class="card-row container d-flex">
        @foreach ( $data as $comic )
        <div class="card-box">
            <div class="single-card">
                <a href="#">
                    <img src="{{ $comic['thumb'] }}" alt="" />
                </a>
            </div>
            <div class="series">{{ $comic['series'] }}</div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <button class="pointer"><a href="#">LOAD MORE</a></button>
    </div>
</div>
{{-- Merch --}}
<div class="merch-container d-flex">
    <ul class="d-flex container">
        <li class="d-flex align-items-center">
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
            <div><a href="#">DIGITAL COMICS</a></div>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
            <div><a href="#">DC MERCHANDISE</a></div>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
            <div><a href="#">SUBSCRIPTION</a></div>
        </li>
        <li class="d-flex align-items-center">
            <img id="locator-logo" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
            <div><a href="#">COMIC SHOP LOCATION</a></div>
        </li>
        <li class="d-flex align-items-center">
            <img id="visa-logo" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
            <div><a href="#">DC POWER VISA</a></div>
        </li>
    </ul>
</div>
@endsection