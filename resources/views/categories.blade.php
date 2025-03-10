@extends('layouts/main')


@section('container')
    <h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            @if($categories[0]->image)
                                <div style="max-height: 350px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $category[0]->image) }}" alt="{{ $category[0]->category->name }}" class="img-fluid">
                                </div>    
                            @else                                                                                               
                                <img src="https://picsum.photos/1200/1200? {{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            @endif
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                            </div>
                       </div>
                    </a>
                </div>                  
            @endforeach
        </div>  
    </div>
@endsection

    
