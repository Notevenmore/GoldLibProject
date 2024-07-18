@include('layouts.header')
<body>
  @include('layouts.navbar')
  <section class="payment-details">
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Amount</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach($payments as $payment)
                <tr>
                  <td>{{ $payment['title'] }}</td>
                  <td>{{ $payment['amount'] }}</td>
                  <td>{{ $payment['cost'] }}</td>
                  <td>{{ $payment['amount'] * $payment['cost']  }}</td>
                </tr>
        @endforeach
        <tr>
          <th colspan="3">Total All</th>
          <td><?= $total ?></td>
        </tr>
      </tbody>
    </table>
    <form action="paymentdetails.php" method="post">
      <button type="submit" name="cost" value="<?= $total ?>">BUY</button>
    </form>
  </section>
  @include('layouts.footer')