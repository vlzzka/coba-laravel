@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $category->name }} </h2>
                
                <!-- back to post -->
                <a href="/dashboard/posts" class="btn btn-primary "><i class="bi bi-arrow-left"></i> Back to all My Posts</a>
                
                <!-- edit post -->
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning "><i class="bi bi-pencil"></i> Edit</a>
                

                <!-- delete post -->
                <!-- <a href="#" class="btn btn-danger "><i class="bi bi-x-circle"></i> Delete</a> -->
                <form action="/dashboard/posts/{{ $post->slug}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"></i> Delete Post</button>
                </form>

                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" 
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>    
                @else
                    <img src="https://picsum.photos/1200/400?" alt="{{ $post->category->name }}" 
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection

