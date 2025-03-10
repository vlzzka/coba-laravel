@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }} </h2>
                <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in 
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}</a></p>

                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" 
                        alt="{{ $post->category->name }}" class="img-fluid">
                    </div>    
                @else
                    <img src="https://picsum.photos/1200/400?" alt="{{ $post->category->name }}" 
                    alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts" class="text-center mb-4 d-block text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
    
@endsection
