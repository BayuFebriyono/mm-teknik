<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>{{ $title ?? 'Page Title' }}</title>


    @livewireStyles
</head>

<body>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    {{ $slot }}

    @livewireScripts
</body>

</html>
