
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Supermarket Sales</h1>
</div>

<div class="table-responsive col-lg-10">

<!-- tombol sorting -->
<a href="{{ route('supermarket_sales.index', ['order' => 'asc']) }}">Sort: Rendah ke Tinggi</a> |
<a href="{{ route('supermarket_sales.index', ['order' => 'desc']) }}">Sort: Tinggi ke Rendah</a>

  <table class="table table-striped" id="supermarket_salesTable">
    <thead>
      <tr>
          <th>No</th>
          <th>Branch</th>
          <th>City</th>
          <th>Product Line</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Date</th>
          <th>Time</th>
          <th>Gross Margin Precentage</th>
          <th>Gross Income</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($sales as $sale)
      <tr>
        <td>{{ $sale->id }}</td>
        <td>{{ $sale->branch }}</td>
        <td>{{ $sale->city }}</td>
        <td>{{ $sale->product_line }}</td>
        <td>${{ number_format($sale->unit_price, 2) }}</td>
        <td>{{ $sale->quantity }}</td>
        <td>${{ number_format($sale->total, 2) }}</td>
        <td>{{ $sale->date }}</td>
        <td>{{ $sale->time }}</td>
        <td>{{ $sale->gross_margin_percentage }}</td>
        <td>{{ $sale->gross_income }}</td>
    </tr>
      @endforeach
    </tbody>
  </table>  
</div>

<div class="mt-3">
  {{ $sales->links() }}
</div>


@endsection
