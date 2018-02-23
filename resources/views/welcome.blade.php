<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Intranet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="varial/bootstrap/css/masterpage.css" rel="stylesheet" type="text/css"/>
        <link href="varial/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="varial/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="varial/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css"/>
        <link href="varial/bootstrap/css/masterpage.css" rel="stylesheet" type="text/css"/>
        
          <!-- scrip-->
          <script src="varial/js/jquery-3.3.1.min.js" type="text/javascript"></script>
          <script src="varial/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
          <script src="varial/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
