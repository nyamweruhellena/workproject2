@extends('main')
    @section('contents')
        @include('sections.hero')
        @for ($i = 0; $i < 2; $i++)
            @include('sections.services')
        @endfor
        
    @endsection