@extends('layout.master')

@section('style')
    @include('layout.styleHidden')
@endsection

@section('content')
    @include('layout.nav')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Add text-center class -->
                <h1>My Blog</h1>
                <hr>
                <!-- Display all posts here -->
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text post-excerpt">{{ $post->content }}</p>
                            <!-- Edit, Delete, and Show buttons -->
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            {{-- <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger">Delete</a> --}}
                            <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-secondary">Show</a>
                        </div>
                    </div>
                @endforeach
                <!-- Repeat above card div for each post -->
            </div>
        </div>
    </div>
    @include('layout.scriptHidden')
@endsection
