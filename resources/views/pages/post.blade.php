@extends('main')
    @section('contents')
        <div class="container">
            <div class="col-md-12">
                <div class="m-4">
                    <p>{{ $post->content }}</p>
                    <p>{{ $post->muser->first_name }}</p>
                </div>
            </div>
        </div>
        
    @endsection