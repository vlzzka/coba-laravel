@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Supermarket Sales</h1>
</div>

<a href="#" class="btn btn-primary mb-3">
  Lihat Grafik Penjualan
</a>

<!-- Filter & Search Form -->
<form action="{{ route('supermarket_sales.index') }}" method="GET" class="mb-3">
  <div class="row col-lg-11">
    <div class="col-md-2">
      <select name="branch" class="form-control">
        <option value="">Pilih Branch</option>
          @foreach ($branches as $branch)
            <option value="{{ $branch }}" {{ request('branches') == $branch ? 'selected' : '' }}>{{ $branch }}</option>
          @endforeach
      </select>
    </div>
    <div class="col-md-1">
      <button type="submit" class="btn btn-primary">Filter</button>
    </div>
  </div>
</form>

<div class="table-responsive col-lg-10">
  <table class="table table-striped" id="supermarket_salesTable">
    <thead>
      <tr>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="id">No <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="branch">Branch <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="city">City <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="product_line">Product Line <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="unit_price">Price <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="quantity">Quantity <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="total">Total <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="date">Date<span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="time">Time <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="gross_main_percentage">Gross Main Precentage <span class="sort-icon"></span></a></th>
        <th><a href="#" class="sortable" style="text-decoration: none" data-column="gross_income">Gross Income<span class="sort-icon"></span></a></th>
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

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sortableHeaders = document.querySelectorAll(".sortable");

    // Ambil parameter sorting dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const currentSortBy = urlParams.get("sortBy");
    const currentSortOrder = urlParams.get("sortOrder");

    // Tambahkan panah ke kolom yang sedang diurutkan
    if (currentSortBy) {
        const activeHeader = document.querySelector(`[data-column="${currentSortBy}"] .sort-icon`);
        if (activeHeader) {
            activeHeader.innerHTML = currentSortOrder === "asc" ? " ▲" : " ▼";
        }
    }

    // Tambahkan event listener untuk sorting
    sortableHeaders.forEach(header => {
      header.addEventListener("click", function (e) {
        e.preventDefault();

        const column = this.getAttribute("data-column");
        let sortOrder = "asc"; // Default ascending

      // Jika kolom yang sama diklik, ubah arah sorting
      if (currentSortBy === column && currentSortOrder === "asc") {
        sortOrder = "desc";
      }
        urlParams.set("sortBy", column);
        urlParams.set("sortOrder", sortOrder);

        window.location.search = urlParams.toString();
      });
    });
  });
</script>


@endsection
