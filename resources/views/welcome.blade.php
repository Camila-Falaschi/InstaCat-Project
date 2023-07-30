<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InstaCat</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=roboto:100,100i,400,400i,700,700i|roboto-mono:200,200i,400,400i,700,700i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=roboto:100,100i,400,400i,700,700i" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="antialiased">
        <main class="container-fluid d-flex h-100">
            <section class="col-md-6 position-relative d-flex align-items-center justify-content-center">
                <div class="purple-layer"></div>
                <img class="img-fluid img-cover" src="{{ asset('images/2.jpg') }}" alt="Welcome Cat">
            </section>
            <section class="home-section col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex flex-column align-items-center gap-description">
                    <div class="d-flex align-items-center mb-3 gap-description">
                        <img class="img-fluid logo mr-3" src="{{ asset('images/InstaCat-logo.png') }}" alt="Instacat Logo">
                        <h1 style="font-weight: 400;">InstaCat</h1>
                    </div>
                    <div class="mb-4 description-text d-flex flex-column align-items-center">
                        <h4>A Social Media for cats.</h4>
                        <p>:･ﾟ✧(=^･ ᆺ ･^=):･ﾟ✧</p>
                    </div>
                </div>
                
                @if (Route::has('login'))
                    <div class="d-flex button-section flex-column align-items-center text-center">
                        @auth
                            <a href="{{ url('/home') }}" class="btn button highlight-button btn-lg">HOME</a>
                        @else
                            <a href="{{ route('login') }}" class="btn button highlight-button btn-lg">LOGIN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn button normal-button btn-lg mb-2">SIGN UP</a>
                            @endif
                        @endauth
                    </div>
                @endif   
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
