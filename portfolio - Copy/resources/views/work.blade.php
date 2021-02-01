<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Thomas Meter | Mijn projecten</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/portfolio/resources/views/assets/css/style.css">

</head>
<style>
  * {
    box-sizing: border-box;
  }



  .row,
  .row>.column {
    padding: 8px;
  }

  .column {
    float: left;
    width: 23.6%;
    background: black;
    margin: 10px;
    border-radius: 10px;
    border-color: white;
    border-style: solid;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  @media screen and (max-width: 900px) {
    .column {
      width: 50%;
    }
  }

  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
    }
  }
</style>

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
      <h2>Bekijk hier de projecten waar ik de afgelopen tijd mee bezig ben geweest.</h2>
    </div>

  </div>
  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column">
      <div class="content">
        <img src="/portfolio/resources/views/assets/img/doorwijzer.JPG" style="width:100%">
        <a href="https://www.doorwijzer.nl/">
          <h2>Doorwijzer.nl</h2>
        </a>
        <p>11-03-2020 / heden</p>
        <p>Doorwijzer.nl is een affiliate webshop. Hier staan verschillende producten op in de tech niche. Klanten komen
          op mijn website
          , omdat ik gebruik maak van SEO. Vervolgens stuur ik deze klanten door naar de webshop waar zij het product
          kunnen kopen. Wanneer zij het product dan
          daadwerkelijk kopen krijg ik een commisie over het aankoopbedrag.
        </p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="/portfolio/resources/views/assets/img/laptopnu.JPG" style="width:100%">
        <a href="https://www.laptopnu.nl/laptops/">
          <h2>Laptopnu.nl</h2>
        </a>
        <p>06-01-2021 / heden</p>
        <p>Laptopnu.nl is ook een affiliate webshop. Hier ben ik pas net mee begonnen. Klanten kunnen hier laptops met
          elkaar vergelijken
          en uiteindelijk een keuze maken waar zij de laptop gaan kopen.
        </p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="/portfolio/resources/views/assets/img/clothing.JPG" style="width:100%">
        <a href="https://lesgarconsclothing.com/">
          <h2>Les Garçons Clothing</h2>
        </a>
        <p>12-11-2020 / heden</p>
        <p>Les Garçons Clothing is een kleding merk dat ik gestart ben met een vriend van mij. Het wordt een kleding
          merk dat een gevoel van luxe verkoopt. Marketing technisch was dit
          de beste keuze die wij konden maken. Hier gaat erg veel tijd in zitten, maar dit hebben wij er allemaal voor
          over.
        </p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="/portfolio/resources/views/assets/img/ctrlsync.JPG" style="width:100%">
        <a href="https://www.ctrlsync.nl/">
          <h2>CtrlSync</h2>
        </a>
        <p>06-11-2020 / heden</p>
        <p>Begin van 2020 ben ik begonnen met affiliate marketing. Ik heb meerdere website's gehad en beheer er zelf ook
          nog een aantal. Op een gegeven
          moment begonnen er ook inkomsten uit deze website's te komen en moest ik mij gaan inschrijven bij de KVK. Toen
          is CtrlSync geboren. Hier vallen al
          mijn website's nu ook nog onder. Ik kreeg op een gegeven moment ook aanvragen om website's te gaan maken voor
          zowel particulieren als voor bedrijven.
          Toen heb ik besloten mijn service te gaan uitbreiden.
        </p>
      </div>
    </div>
  </div>

</body>

</html>