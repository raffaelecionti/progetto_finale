 <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('article.index') }}">tutti gli articoli</a>
        </li>
        @auth 
        <li class="nav-item dropdown">
         <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          ciao, {{ Auth::user()->name}}
         </a>
         <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('create.article') }}">Crea</a></li>
          <li class="dropdown-item"><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>
          <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">
            @csrf
          </form>
         </ul>
        </li>
        @else 
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ciao,utente
          </a>
          <ul class="dropdown-menu">
           <li class="dropdown-item"><a href="{{ route('login') }}">Accedi</a></li>
           <hr class="dropdown-divider">
           <li class="dropdown-item"><a href="{{ route('register') }}">Registrati</a></li>
          </ul>
        </li>
        @endauth
      </ul>
    </div>
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Categorie
     </a>
     <ul class="dropdown-menu">
      @foreach ($categories as $category)
      <li>
        <a class="dropdown-item " href="{{ route('byCategory', ['category' => $category->id]) }}">{{ $category->name }}</a>
      </li>
      @if (!$loop->last)
      <hr class="dropdown-divider">
      @endif
      @endforeach
     </ul>
    </li>
  </div>
</nav>

