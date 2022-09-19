@extends('main')
    @section('contents')
        {{-- @include('components.events') --}}

        {{-- loop through the resulting data from the database --}}
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            {{-- <img src="{{ asset('images/' . $post->image) }}" alt="image" class="bd-placeholder-img card-img-top" width="100%" height="225"> --}}
                            <div class="card-body">
                                <h3>{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->content }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('post', $post->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    @endsection