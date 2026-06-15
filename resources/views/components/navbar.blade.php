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
          <a class="nav-link" aria-current="page" href=""{{ route('article.index') }}>{{__('ui.allArticles')}}</a>
        </li>
        @auth 
        <li class="nav-item dropdown">
         <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          ciao, {{ Auth::user()->name}}
         </a>
         <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('create.article') }}">Crea</a></li>
          @auth
      @if (Auth::user()->is_revisor)
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25" href="{{route('revisor.index')}}">Zona Revisore
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ App\Models\Article::toBeRevisedCount() }}
          </span>
        </a>
      </li>
      @endif
      @endauth
          <li class="dropdown-item"><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>
          <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">
            @csrf
          </form>
         </ul>
        </li>
        @else 
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="{{route('article.index')}}">{{__('ui.hello,utente')}}
            
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
     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="{{route('article.index')}}">{{__('ui.categories')}}
      
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
    <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
      <div class="input-group">
        <input type="search" name="query" class="form-control" placeholder="search" aria-label="search">
        <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
          {{__('ui.search')}}
        </button>
      </div>
    </form>
    <x-_locale lang="it"/>
    <x-_locale lang="uk"/>
    <x-_locale lang="es"/>
  </div>
</nav>

