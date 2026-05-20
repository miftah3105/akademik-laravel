 <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark app-navbar">
            <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="brand-logo"><i class="bi bi-mortarboard-fill"></i></span>
                Akademik
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}" href="{{ route('home') }}"><i class="bi bi-grid-1x2-fill me-1"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}" aria-current="{{ request()->routeIs('mahasiswa.*') ? 'page' : 'false' }}" href="{{ route('mahasiswa.index') }}"><i class="bi bi-people-fill me-1"></i>Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dosen.*') ? 'active' : '' }}" aria-current="{{ request()->routeIs('dosen.*') ? 'page' : 'false' }}" href="{{ route('dosen.index') }}"><i class="bi bi-person-workspace me-1"></i>Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('prodi.*') ? 'active' : '' }}" aria-current="{{ request()->routeIs('prodi.*') ? 'page' : 'false' }}" href="{{ route('prodi.index') }}"><i class="bi bi-diagram-3-fill me-1"></i>Prodi</a>
                </li>
                </ul>
                <form class="d-flex mt-3 mt-md-0" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" name="q" value="{{ request('q') }}" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            </div>
        </nav>
        </header>
