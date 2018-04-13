<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Plataforma Escolar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav">
            {{-- <a class="nav-item nav-link {{ request()->is('/')? 'active':'' }}" href="/">Inicio</a> --}}
            <li class="nav-item dropdown {{ request()->segment(1) == 'estudiantes'? 'active':'' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Estudiantes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ request()->routeIs('estudiantes.index')? 'active':'' }}" href="{{route('estudiantes.index')}}">Lista</a>
                    <a class="dropdown-item {{ request()->routeIs('estudiantes.create')? 'active':'' }}" href="{{route('estudiantes.create')}}">Registro</a>
                </div>
            </li>
            <a class="nav-item nav-link" href="#">Docentes</a>                    
        </div>
    </div>
</nav>