<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Portfolio</title>
        <link rel="shortcut icon" href="{{URL::asset('images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{URL::asset('images/favicon.ico')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        @include('header')
        @include('lead')
        @include('about')
        @include('experience')
        @include('education')
        @include('projects')
        @include('skills')
        @include('contact')
        @include('footer')
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
