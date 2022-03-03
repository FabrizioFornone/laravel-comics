<header class="d-flex justify-content-between align-items-center container py-2">
    <div>
        <img src="{{asset('img/dc-logo.png')}}" alt="" />
    </div>
    <nav>
        <ul class="d-flex pointer">
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">CHARACTERS</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/comics') }}">COMICS</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">MOVIES</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">GAMES</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">COLLECTIBLES</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">VIDEOS</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">FANS</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">NEWS</a>
            </li>
            <li class="d-flex align-items-center">
                <a href="{{ url('/') }}">SHOP</a>
            </li>
        </ul>
    </nav>
    <div>
        <input type="text" placeholder="Search">
    </div>
</header>