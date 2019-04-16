    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vleugels') }}</title>
        
    <link href="{{ asset('styles/bootstrap-4.1.2/bootstrap.min.css') }}" rel="stylesheet" text="text/css">    
    <link href="{{ asset('styles/main_styles.css') }}" rel="stylesheet" text="text/css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
          crossorigin="anonymous">
    