@include('layouts.header')
  <body>
    <section class="form">
      <img src="../img/GoldLibLogo.png" alt="logo" />
      <h1>LOGIN</h1>
      <form action="{{ route('authorize') }}" method="post">
        @csrf
        <input type="email" name="email" id="Email" placeholder="Masukkan email" value="<?= isset($_POST['email']) && $message != 'Email yang dimasukkan salah' ? $_POST['email'] : '' ?>"/> <br />
        @if($email_error)
          <span class="error-msg" style="color: red;font-size: 0.8rem;">{{ $message }}</span><br>
        @endif
        <input type="password" name="password" id="Password" placeholder="Masukkan password" /><br />
        @if($password_error)
          <span class="error-msg" style="color: red;font-size: 0.8rem;">{{ $message }}</span><br>
        @endif
        <p>Doesn't have account? <a href="{{ route('register') }}">register</a> now !</p>
        <button type="submit" name="login">Submit</button>
      </form>
    </section>
  </body>
</html>
