@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @forelse($posts as $post)
                <p>{{ $post->title }}</p>
            @empty
                <p>No posts have been published yet</p>
            @endforelse
            <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
        </div>
    </div>
</div>
@endsection
