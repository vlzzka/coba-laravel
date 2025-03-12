
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Supermarket Sales</h1>
</div>

<div class="table-responsive col-lg-10">
  <table class="table table-striped" id="supermarket_salesTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Invoice_ID</th>
            <th>Branch</th>
            <th>City</th>
            <th>Customer Type</th>
            <th>Gender</th>
            <th>Product Line</th>
            <th>Quantity</th>
            <th>Tax 5</th>
            <th>Total</th>
            <th>Date</th>
            <th>Payment</th>
            <th>Cogs</th>
            <th>Gross Margin Precentage</th>
            <th>Gross Income</th>
            <th>Rating</th>

        </tr>
    </thead>
    <tbody>
    <tbody>
      @foreach($sales as $sale)
      <tr>

          <td>{{ $sale->id }}</td>
          <td>{{ $sale->invoice_id }}</td>
          <td>{{ $sale->branch }}</td>
          <td>{{ $sale->city }}</td>
          <td>{{ $sale->customer_type }}</td>
          <td>{{ $sale->gender }}</td>
          <td>{{ $sale->product_line }}</td>
          <td>${{ number_format($sale->unit_price, 2) }}</td>
          <td>{{ $sale->quantity }}</td>
          <td>${{ number_format($sale->total, 2) }}</td>
          <td>{{ $sale->date }}</td>
          <td>{{ $sale->payment }}</td>
          <td>{{ $sale->rating }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div>
  
</div>


@endsection
