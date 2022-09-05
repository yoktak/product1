<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
        <!-- Styles -->
        <link href="{{ asset('CSS/sidebar.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 sticky-top vh-100 side">
                    <div class='sidebar_fixed'>
                        <a href=''>
                            <div class="m-ms-5">
                                <h2><i class="bi bi-book-fill">　Nospoil</i></h2>
                            </div>
                        </a>
                        <a href='/posts'>
                            <div class="m-ms-5">
                                <i class="bi bi-house-door">　Home</i>
                            </div>
                        </a>
                        <a href='/user'>
                            <div class="m-ms-5">
                                <i class="bi bi-person-fill">　Profile</i>
                            </div>
                        </a>
                        <a href=''>
                            <div class="m-ms-5">
                                <i class="bi bi-person-plus">　NewAccount</i>
                            </div>
                        </a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <div class="m-ms-5">
                                <i class="bi bi-arrow-counterclockwise">　logout</i>
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href='/posts/create'>
                            <div class="m-ms-5">
                                <i class="bi bi-plus-square">　NewPost</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-9">
                    <div class='main'>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
