<nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow" id="navbar" style="background:#08ce22;width:100%;">
  <a href="/" class="navbar-brand"><img src="/assets/logo.png" style="height:50px;width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/playgame">Play Game</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/contact">ContactUs</a>
      </li>
      @else
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/playgame">Play Game</a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="/contact">ContactUs</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item dropdown active">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left: 50px;">
          <img src="/uploads/avatars/{{Auth::user()->pimage}}" style="height:32px;width:32px;border-radius: 50%; position: absolute;top: 10px;left: 10px;">  {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profile"><i class="fas fa-user"></i>
            {{ __('Profile') }}
          </a>
          <a class="dropdown-item" href="/profile"><i class="fas fa-trophy"></i>
            {{ __('My Achievements') }}
          </a>
          <a class="dropdown-item" href="/message"><i class="fas fa-envelope"></i>
            {{ __('Messeges') }}
          </a>
          <hr>
          <a class="dropdown-item" href="/policy"><i class="fas fa-lock"></i>
            {{ __('Privacy') }}
          </a>
          <a class="dropdown-item" href="/changepassword"><i class="fas fa-cogs"></i>
            {{ __('Setting') }}
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
            {{ __('Logout') }}
          </a>
          <hr>
          <a class="dropdown-item" href="/profile"><i class="fas fa-question-circle"></i>
            {{ __('Help') }}
          </a>
          <a class="dropdown-item" href="/profile"><i class="fas fa-bug"></i>
            {{ __('Report a Problem') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0"  role="search" action="/search" method="get">
      @csrf
      <input class="form-control mr-sm-2"  name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<style>
ul li:hover {
font-weight: bold;
font-size: 20px;}
ul li{
margin-right:20px;
font-size: 20px;
}
</style>