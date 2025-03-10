@extends('layouts/main')


@section('container')
    <h1 class="mb-5">Posts Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <Article class="mb-3 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}" >{{ $post->title }}</a>
                <h5>By. <a href="#" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" 
            class="text-decoration-none">{{ $post->category->name }}</a></h5>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </Article>
    @endforeach

@endsection

    
