@include("layouts.header")
  <body>
    @include("layouts.navbar")
    <section class="profil">
      <div class="form-profile-with-image">
        <img src="{{ Storage::url('img/profile') }}/{{ $user->image }}" alt="photo-profil" />
        <div class="form-profile">
          <form action="{{ route('profile.update', ['profile' => $user->id]) }}" method="post" enctype='multipart/form-data'>
            @csrf
            @method('put')
            <input type="text" name="name" id="Nickname" value="{{ $user->name }}" placeholder="masukkan nickname" /> <br />
            <input type="email" name="email" id="Email" value="{{ $user->email }}" placeholder="masukkan email" /> <br />
            <label class="Photo-profil" for="Photo-profil">Change Photo Profile</label>
            <input type="file" name="image" id="Photo-profil" placeholder="Photo Profile"/>
            <div class="Photo-profil"><a href="{{ route('home') }}">Back To Home</a></div>
            <button class="Photo-profil" type="submit">Update Profil Data</button> <br />
          </form>
        </div>
      </div>
      <span class="logout">
        <a href="{{ route('logout') }}">LOGOUT</a>
      </span>
    </section>
    @include('layouts.footer')
