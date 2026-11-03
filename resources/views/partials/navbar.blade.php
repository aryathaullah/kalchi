<nav class="nav" aria-label="Menu utama">
    <div class="nav-bar">
        <a class="brand" href="{{ route('home') }}">Kal-Chi</a>

        <button class="burger" id="burger" type="button"
                aria-expanded="false" aria-controls="menu" aria-label="Buka menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="menu" id="menu">
            <a class="pill {{ request()->routeIs('home') ? 'active' : '' }}"
               href="{{ route('home') }}">Home</a>

            <a class="pill {{ request()->routeIs('pages.product') ? 'active' : '' }}"
               href="{{ route('pages.product') }}">Product</a>

            <a class="pill {{ request()->routeIs('pages.founder') ? 'active' : '' }}"
               href="{{ route('pages.founder') }}">Founder</a>

            <a class="pill shop"
               href="https://id.shp.ee/NqLQqcjm"
               target="_blank"
               rel="noopener">Shop ↗</a>
        </div>
    </div>
</nav>