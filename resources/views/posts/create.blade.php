@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <button class="btn btn-success">Publish Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
