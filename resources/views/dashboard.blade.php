<!--// resources/views/navbar.blade.php -->

<!DOCTYPE html>

<head>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    background: transparent;
}

body {
    background: rgb(30, 30, 30);
    color: white;
    overflow: hidden;
    overflow-y: scroll;
}




     </style>
</head>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}" >
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ompoc" />
        <title>Port</title>
    </head>
    <body>
        @include('navbar')
        @yield('content')
    </body>
</html>
