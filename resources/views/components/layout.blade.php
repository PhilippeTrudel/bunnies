<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bunnies</title>

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <div>
        <div class="text-xl" >
          Bunny App
        </div>
        <hr/>
        {{ $slot }}
        <div>
          Footer
        </div>
      </div>
    </body>
</html>