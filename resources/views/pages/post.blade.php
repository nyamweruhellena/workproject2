@extends('main')
    @section('contents')
        <div class="container">
            <div class="col-md-12">
                <div class="m-4">
                    <p>{{ $post->content }}</p>
                    <p>{{ $post->user }}</p>
                </div>
            </div>
        </div>
        
    @endsection