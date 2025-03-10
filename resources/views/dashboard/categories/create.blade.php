@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Category</h1>
</div>


<div class="col-lg-8">
  <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
    @csrf   
    <div class="mb-3">
      <label for="name" class="form-label">Category Name</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" 
      name="name" required autofocus value="{{ old('name') }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="slug" 
      name="slug" required value="{{ old('slug') }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <!-- <div class="mb-3">
      <label for="image" class="form-label">Category Image</label>
      <img class="img-preview img-fluid m-3 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" 
      id="image" name="image" onchange="previewImage()">
      @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div> -->
      
    
    
    <!-- <button type="submit" class="btn btn-primary">Create Category</button> -->
  </form>

</div>

<script>
  const title = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/category/checkSlug?title=' + title.value)
    .then(response => response.json()) 
    .then(data => slug.value = data.slug)
  });

// autoave
  $(document).ready(function() {
    $('#Form').on('keypress', function(e) {
        if (e.which === 13) { // Jika tombol Enter ditekan
            e.preventDefault(); // Mencegah submit default
            saveCategory(); // Jalankan fungsi simpan data
        }
    });

    function saveCategory() {
      let name = $('#name').val();
      let slug = $('#slug').val();

      $.ajax({
        url: "{{ route('categories.store') }}",
        type: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            name: name,
            slug: slug
        },
        success: function(response) {
            alert("Kategori berhasil disimpan!");
            $('#name').val('');
            $('#slug').val('');
        },
        error: function(xhr) {
            alert("Terjadi kesalahan: " + xhr.responseText);
        }
      });
    }
  });
</script>

@endsection




