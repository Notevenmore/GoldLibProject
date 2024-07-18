@include('layouts.header')
  <body>
    @include('layouts.navbar')
    <section class="review-list">
      <h1>{{ $book->name }}</h1>
      @foreach($book->review as $review)
      <div class="comments-users-data">
        <div class="header-comments">
          <img src="{{ Storage::url('img/profile') }}/{{ $review->user->image }}" alt="" class="photo-profil" />
          <h1>{{ $review->user->name }}</h1>
        </div>
        <div class="comments">
          <p>{{ $review->comment }}</p>
        </div>
      </div>
      @endforeach
      <form action="{{ route('send-comment', ['id' => 2]) }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <textarea name="comment" id="Comment" placeholder="Give your review about this book here!" cols="130" rows="2"></textarea>
        <button type="submit">Send</button>
      </form>
    </section>
    @include('layouts.footer');
