<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <span class="navbar-brand  mb-0 h1">@yield('title')</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="/">Retour aux galleries <span class="sr-only">(current)</span></a>
        </ul>
        @guest 
        <span class="navbar-text">
            <a href="/login">Login</a>
        </span>
        @else
        <form class="navbar-text" action="/logout" method="POST">
            @csrf
            <a type="submit" href="/">Login</a>
        </form>
        @endguest
        
    </div>
    
    </nav>
</header>