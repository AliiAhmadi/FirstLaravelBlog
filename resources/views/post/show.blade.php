@extends('layout.master')



@section('content')
    @include('layout.nav')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer text-muted">{{ $post->created_at }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
