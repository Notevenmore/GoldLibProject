<nav>
  <img src="../img/GoldLibLogo.png" class="logo" alt="logo" />
  <span class="menu">
    <button class="mode"><img src="../img/dark-mode.png" alt="" /></button>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('home') }}#book-menu">Product Menu</a>
    <a href="{{ route('show-cart') }}">Your Cart</a>
    <a href="{{ route('countdown.index') }}">Borrowing Book</a>
  </span>
  @if(!Request::routeIs('profile.index'))
  <span class="link">
    <span class="logout">
      <a href="{{ route('logout') }}">LOGOUT</a>
    </span>
    <a href="{{ route('profile.index') }}">
      <img src="{{ Storage::url('img/profile') }}/{{ Auth::user()->image }}" class="photo-profil" alt="photo profil" />
    </a>
  </span>
  @endif
</nav>