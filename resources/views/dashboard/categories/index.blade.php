@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-6">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <!-- edit category -->
            <a href="/dashboard/categories/{{ $category->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>

            <!-- delete category -->
            <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf  
              <button class="badge bg-danger border-0" 
              onclick="return confirm('Are You Sure You want to delete this Category? all posts linked to this category will be deleted')"><i class="bi bi-x-circle"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

