<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thomas Meter | Over mij</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/portfolio/resources/views/assets/css/style.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/welcome') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registreer</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Thomas Meter
                </div>

                <div class="links">
                    <a href="welcome">Home</a>
                    <a href="about">Over</a>
                    <a href="work">Mijn werk</a>
                    <a href="contact">Contact</a>
                </div>
                
                    <h2 class="tekst">Mijn naam is Thomas Meter en ben op dit moment 18 jaar oud. Ik volg de opleiding webdevelopment op het GLU.
                        Veel van mijn tijd besteed ik aan dingen die niet met school te maken hebben. Dit zijn voornamelijk projecten op het gebied 
                        van e-commerce. Hier ligt mijn passie en verdiep mij er dan ook graag in.
</h2>
            </div>
        </div>
    </body>
</html>
