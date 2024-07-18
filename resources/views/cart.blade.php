@include('layouts.header')
  <body>
  @include('layouts.navbar')
    <section class="cart">
      @if(!$carts->isEmpty())
        <form action="{{ route('payment-details') }}" method="post">
          @csrf
          @foreach($carts as $cart)
            <div class="item-book">
              <img src="{{ Storage::url('img/books') }}/{{ $cart->book->id }}.png" alt="buku" />
              <input type="number" name="book[{{ $iteration - 1 }}][amount]" id="amount-books" min="0" value="{{ $cart['amount'] }}" >
              <label for="book-{{ $iteration }}">{{ $cart->book->name }}</label>
              <input type="checkbox" name="book[{{ $iteration - 1 }}][id]" id="book-{{ $iteration++ }}" value="{{ $cart['id'] }}" />
            </div>
          @endforeach
          <div class="button">
            <div class="check-out-button">
              <button type="submit" name="checkout" value='1'>CHECKOUT</button>
            </div>
            <div class="delete-button">
              <button type="submit" name="delete" value='1'>DELETE</button>
            </div>
            </div> 
        </form>
      @else
        <h1>BELUM ADA BARANG YANG DICHECKOUT!</h1>
        <p>Lakukan checkout barang terlebih dahulu pada halaman <a href="{{ route('home') }}">Buku</a></p>
      @endif
    </section>
    @include('layouts.footer')
