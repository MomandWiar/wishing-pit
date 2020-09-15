<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WishList</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-x-green">

    {{-- page header--}}
    @include('partials.header')

    {{-- page content--}}
    @yield('content')

    {{-- page footer--}}
    @include('partials.footer')

</body>
</html>
