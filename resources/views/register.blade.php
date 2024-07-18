@include('layouts.header')
  <body>
    <img src="../img/GoldLibLogo.png" alt="logo" class="logo-register" />
    <section class="form">
      <h1>REGISTER</h1>
      <form action="{{ route('do-register') }}" method="post">
        @csrf
        <input type="text" name="name" id="Email" placeholder="masukkan nama anda" /> <br />
        <input type="email" name="email" id="Email" placeholder="masukkan email" /> <br />
        <input type="password" name="password" id="Password" placeholder="masukkan password" /> <br />
        <input type="password" name="confirm-password" id="Confirm-Password" placeholder="masukkan password kembali" /> <br />
        <p>sudah melakukan register? <a href="{{ route('login') }}">login</a> sekarang</p>
        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
