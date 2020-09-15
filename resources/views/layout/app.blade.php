<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>WistList</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">

        {{-- page header--}}

        @if (str_contains(url()->current(), '/wishlist'))
            @include('partials.headerWishlist')
        @else
            @include('partials.header')
        @endif

        {{-- page content--}}
        @yield('content')

        {{-- page footer--}}
        @include('partials.footer')

    </div>
</body>
</html>
