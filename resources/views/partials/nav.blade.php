{{-- <nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contacto') }}">Contact</a></li>
    </ul>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
        </li>
      </ul>
        @guest
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        @endguest
        @auth
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">{{Auth::user()->name}}</a>
            </li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                  <li class="nav-item">
                    <a class="nav-link" onclick="this.closest('form').submit()">Logout</a>
                  </li>
            </form>
          </ul>
        @endauth
    </div>
  </nav>