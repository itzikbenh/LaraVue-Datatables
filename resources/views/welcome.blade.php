<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Datatables</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <projects-client-side></projects-client-side>
            {{--<projects></projects>--}}
        </div>
    </body>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
