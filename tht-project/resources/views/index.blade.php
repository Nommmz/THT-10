@extends('layouts.app')

@section('content')
<div class="container">
    <header class="blog-header">
        <h1 class="text-center">Our Blog</h1>
        <p class="text-center">Discover the latest updates and stories.</p>
    </header>

    <div class="blog-posts">
        @foreach ($posts as $post)
            <div class="blog-card">
                <img data-src="{{ $post->image }}" alt="{{ $post->title }}" class="lazyload">
                <div class="card-content">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('blog.show', $post->id) }}">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
