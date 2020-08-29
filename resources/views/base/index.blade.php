<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Agrosty Mails</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>@yield('title')</h1>
            <p>@yield('subtitle')</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
