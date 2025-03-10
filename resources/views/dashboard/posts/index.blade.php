@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-11" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-11">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>{{ $post->user->username }}</td>
          <td>
            <!-- view post -->
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info "><i class="bi bi-eye-fill"></i></a>
          
          @can('admin')
          
            <!-- edit post -->
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>

              <!-- delete post -->
              <form action="/dashboard/posts/{{ $post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"></i></button>
              </form>
          </td>
          @endcan
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection




