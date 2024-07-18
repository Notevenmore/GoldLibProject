@include('layouts.header')
  <body>
  @include('layouts.navbar')
    <header class="home">
      <div class="title-app">
        <h1>GoldLib</h1>
        <p>Pembelian buku atau peminjaman buku, cukup dilakukan melalui rumah saja buku buku tersedia disini dengan beragam kebutuhan yang anda inginkan</p>
      </div>
      <img src="../img/background-header.png" alt="" />
    </header>
    <section class="books-menu">
      @if($books->isEmpty())
      <div class="empty">
        <h1>Buku belum tersedia!</h1>
        <p>Harap tunggu pihak admin GoldLib untuk menambahkan buku terlebih dahulu dalam beberapa waktu. Terima kasih</p>
      </div>
      @else
        @foreach($books as $book)

        <div class="book-menu" id="book-menu-{{ $book->id }}">
          <img src="{{ Storage::url('img/books') }}/{{ $book->image }}" class="img-book" alt="buku" />
          <h1 class="title-book">{{ $book->name }}</h1>
          <div class="button">
            <div class="buy-button btn">
              <a href="#buy">Buy</a>
            </div>
            <div class="desc-button btn">
              <a href="{{ route('description', ['id' => $book->id]) }}">Description</a>
            </div>
          </div>
        </div>
        
        @endforeach
      @endif
    </section>
    <footer>
      <h3>Copyright by &copy;GoldenWise 2023</h3>
    </footer>
    @include('layouts.footer')
