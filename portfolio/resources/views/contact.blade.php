<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thomas Meter | Contact</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/portfolio/resources/views/assets/css/style.css">

    <style>
            @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

        body {
            background-image: url("/portfolio/resources/views/assets/img/achtergrond2.jpg");

        }

        form {
            max-width: 420px;
            margin: 50px auto;
        }

        .feedback-input {
            color: white;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 500;
            font-size: 18px;
            border-radius: 5px;
            line-height: 22px;
            background-color: transparent;
            border: 2px solid #fff;
            transition: all 0.3s;
            padding: 13px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            outline: 0;
        }

        .feedback-input:focus {
            border: 2px solid;
        }

        textarea {
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }

        [type="submit"] {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            width: 100%;
            background: #CC6666;
            border-radius: 5px;
            border: 0;
            cursor: pointer;
            color: white;
            font-size: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
            transition: all 0.3s;
            margin-top: -4px;
            font-weight: 700;
        }

        [type="submit"]:hover {
            background: #fff;
            color: black;
        }
    </style>
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
            <h2>Neem contact met mij op via dit formulier of door een mailtje te sturen naar thomasmeterzakelijk@gmail.com</h2>
            <form>
                <input name="name" type="text" class="feedback-input" placeholder="Name" />
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT" />
            </form>
        </div>
    </div>
</body>

</html>