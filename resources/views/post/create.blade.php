@extends('layout.master')


@section('content')
    @include('layout.nav')
    <div class="container mt-5">
        <h1>Create New Post</h1>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="post-title">Title</label>
                <input type="text" class="form-control" id="post-title" name="title" required>
            </div>
            <br>
            <div class="form-group">
                <label for="post-content">Content</label>
                <textarea class="form-control" id="post-content" name="content" rows="8" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
