@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Data Penjualan</h1>
</div>

<div class="table-responsive col-lg-10">
  <table class="table table-striped" id="salesTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Brand</th>
            <th>Processor</th>
            <th>RAM (GB)</th>
            <th>Storage</th>
            <th>GPU</th>
            <th>Weight (KG)</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($sales as $sale)
        <tr>
            <td>{{ $sales->firstItem() + $loop->index }}</td>
            <td>{{ $sale->brand }}</td>
            <td>{{ $sale->processor }}</td>
            <td>{{ $sale->ram_gb }}</td>
            <td>{{ $sale->storage }}</td>
            <td>{{ $sale->gpu }}</td>
            <td>{{ $sale->weight_kg }}</td>
            <td>{{ $sale->price_usd }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div>
  {{ $sales->links() }}
</div>


@endsection
