<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            Clientes
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('home.index') ? ' active' : '' }}" aria-current="page"
                        href="{{ route('home.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cliente.index') ? ' active' : '' }}"
                        href="{{ route('cliente.index') }}">Listar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cliente.create') ? ' active' : '' }}"
                        href="{{ route('cliente.create') }}">Insertar Cliente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
