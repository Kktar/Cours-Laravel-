<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hello-city</title>
    </head>
    <body >

      <h1> Salam wa Gay-i-Dior</h1>
      <p>It's currently {{ date('H:i ') }}.</p>



      <footer>
        <p>&copy;Copyright {{ date('Y')}} &middot; <a href="/about-us">About US</a></p>
      </footer>

    </body>
</html>
