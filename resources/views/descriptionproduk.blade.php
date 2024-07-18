@include('layouts.header')
  <body>
  @include('layouts.navbar')
    <section class="book-description">
      <img src="{{ Storage::url('img/books') }}/{{ $book->image }}" class="img-book" alt="buku" />
      <div class="all-content-except-image">
        <h1 class="title-book">{{ $book->name }}</h1>
        {!! $book->description !!}
        <p class="price-book">
          <span class="dollar-coin"><img src="../img/Dollar Coin.png" alt="" /></span>Rp {{ $book->price }}
        </p>
        <div class="buy-button">
          <a href="#buy">BUY</a>
        </div>
        <form action="{{ route('countdown.store') }}" method="post">
          @csrf
          <input type="date" name="waktu_tenggat" id="waktu_tenggat">
          <input type="hidden" name="book" value="{{ $book->id }}">
          <div class="buy-button">
            <button type="submit">BORROW</button>
          </div>
        </form>
        <div class="bottom-button">
          <div class="review-button">
            <a href="{{ route('review', ['id' => $book->id]) }}">REVIEW</a>
          </div>
          <div class="cart-button">
            <form action="{{ route('add-cart') }}" method="post">
              @csrf
              <input type="hidden" name="book" value="{{ $book->id }}">
              <button type="submit"><img src="../img/Shopping Cart.png" alt="" /></button>
            </form>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.footer')
