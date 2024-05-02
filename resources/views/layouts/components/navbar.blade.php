<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand" style="color: black" href="{{ route('welcome') }}"> <img src="{{ Vite::asset('resources/images/home/mtrans.png') }}" width="100" height="100"alt="Inventory Logo" >MusicMerch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('item.*') ? 'active' : '' }}" href="{{ route('item.index') }}">Stok Barang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
