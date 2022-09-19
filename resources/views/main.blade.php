<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
            {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css" integrity="sha512-R+xPS2VPCAFvLRy+I4PgbwkWjw1z5B5gNDYgJN5LfzV4gGNeRQyVrY7Uk59rX+c8tzz63j8DeZPLqmXvBxj8pA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
            <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        </head>

        <body>
            @include('components.header')
            @yield('contents') 
            @include('components.footer')
            <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" ></script> 
            <script src="{{ asset('js/app.js') }}"></script>
        </body>
    </html>