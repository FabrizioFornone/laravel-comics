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
    <main>
        @yield('content')
    </main>
    {{-- Pre Footer --}}
    @include('partials.preFooter')
    {{-- Footer --}}
    @include('partials.footer')



</body>

</html>