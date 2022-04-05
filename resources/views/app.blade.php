<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="csrf-token" value="{{ csrf_token() }}"/>
        <title>Laravel + Vue</title>
        <!-- css -->
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
        <!-- boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- CDNs de Bootstrap 5 -->
<!--         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->

        <!-- CDNs de Font-Awesome -->
        <script src="https://kit.fontawesome.com/343c6df0ce.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="app">
        
        </div>
        
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</html>