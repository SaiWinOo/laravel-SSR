<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
    <style>
        body{
            background: #0C152D;
            /*background: linear-gradient(337deg, rgba(12,21,45,1) 0%, rgba(19,33,70,1) 49%, rgba(26,45,95,0.99) 100%);*/
        }
    </style>
</head>
<body class="text-gray-50" >
@yield('content')


</body>
</html>
