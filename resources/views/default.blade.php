<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <title>Laravel Comics Fabrizio Fornone</title>
</head>

<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- Jumbotron --}}
    <section>
        <div class="jumbotron"></div>
    </section>
    {{-- Card --}}
    {{-- <section>
        <div class="relative-parent">
            <h2>Current Series</h2>
            <div class="card-row container d-flex">
                <div class="card-box" v-for="(card, index) in cardProps" :key="index">
                    <div class="single-card">
                        <a href="#">
                            <img :src="card.thumb" alt="" />
                        </a>
                    </div>
                    <h4>{{ card.series }}</h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="pointer"><a href="#">LOAD MORE</a></button>
            </div>
        </div>
    </section> --}}
    {{-- Merch --}}
    {{-- <section>
        <div class="merch-container d-flex">
            <ul class="d-flex container">
                <li class="d-flex align-items-center">
                    <img src="@/assets/img/buy-comics-digital-comics.png" alt="" />
                    <div><a href="#">DIGITAL COMICS</a></div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="@/assets/img/buy-comics-merchandise.png" alt="" />
                    <div><a href="#">DC MERCHANDISE</a></div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="@/assets/img/buy-comics-subscriptions.png" alt="" />
                    <div><a href="#">SUBSCRIPTION</a></div>
                </li>
                <li class="d-flex align-items-center">
                    <img id="locator-logo" src="@/assets/img/buy-comics-shop-locator.png" alt="" />
                    <div><a href="#">COMIC SHOP LOCATION</a></div>
                </li>
                <li class="d-flex align-items-center">
                    <img id="visa-logo" src="@/assets/img/buy-dc-power-visa.svg" alt="" />
                    <div><a href="#">DC POWER VISA</a></div>
                </li>
            </ul>
        </div>
    </section> --}}
    {{-- Pre Footer --}}
    @include('partials.preFooter')
    {{-- Footer --}}
    @include('partials.footer')



</body>

</html>