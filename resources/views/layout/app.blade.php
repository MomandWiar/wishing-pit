<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>WistList</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">

        {{--page navigation--}}
        @include('partials.navigation')

        {{--page header--}}
        @include('partials.header')

        {{--error message--}}
        @include('partials.error')

        {{--page content--}}
        @yield('content')

    </div>
</body>
</html>
