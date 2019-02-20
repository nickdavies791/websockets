@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-end mb-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
            </div>
            <post-list></post-list>
        </div>
    </div>
</div>
@endsection
