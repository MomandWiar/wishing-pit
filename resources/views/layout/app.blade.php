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

        {{--page header--}}
        @include('partials.header')

        {{--page title--}}
        <h1 class="font-weight-bold">
            @yield('pageTitle')
        </h1>

        {{--error message--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{--page content--}}
        @yield('content')

        {{--page footer--}}
        @include('partials.footer')

    </div>
</body>
</html>
