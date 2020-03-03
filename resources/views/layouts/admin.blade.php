<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/821f3edfc2.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-extra.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</head>
<body>
    <div id="app" class="site-wrapper">
        <div class="side-bar">
            <header>
                Ambiantic
            </header>

            <div class="menus">
                <a href="#" class="all-music-nav">All Images</a>
                <a href="#" class="add-music-nav">Add Image</a>
                <a href="#">Add Image Category</a>
                <a href="#">Site Statistics</a>
                <a href="#">Dead Link</a>
            </div>
        </div>

        <div class="main-content">
            @yield('content')
        </div>

        
    </div>

    <script src="{{ asset('js/script.js') }}" ></script>

    <script>
        
    </script>
</body>
</html>
