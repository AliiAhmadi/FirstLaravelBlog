@extends('layout.master')



@section('content')
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
                            <p class="card-text">{{ $post->content }}</p>
                            <!-- Edit, Delete, and Show buttons -->
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-secondary">Show</a>
                        </div>
                    </div>
                @endforeach
                <!-- Repeat above card div for each post -->
            </div>
        </div>
    </div>
@endsection
