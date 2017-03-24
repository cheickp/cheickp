<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titre')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                            color: #636b6f;
                            font-family: "Times New Roman", 'Raleway', sans-serif;
                            font-weight: 100;
                            height: 100vh;
                            margin: 0;
                        }

        </style>
    </head>
    <body>
        <div>
                  @yield('contenu')
        </div>
    </body>
</html>
