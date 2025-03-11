@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Data Penjualan</h1>
</div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Brand</th>
                <th>processor</th>
                <th>ram</th>
                <th>storage</th>
                <th>gpu</th>
                <th>weight</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->brand }}</td>
                    <td>{{ $sale->processor }}</td>
                    <td>{{ $sale->ram }}</td>
                    <td>{{ $sale->storage }}</td>
                    <td>{{ $sale->gpu }}</td>
                    <td>{{ $sale->weight }}</td>
                    <td>{{ $sale->price}}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

@endsection
