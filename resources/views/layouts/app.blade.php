<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>App</title>
    @livewireStyles
</head>
<body>
    @section('sidebar')
        <h2 class="capitalize text-blue-500 font-bold">This is the master sidebar.</h2> 
    @show

    <div class="container">
        @yield('content')
    </div>

    @livewireScripts    
</body>
</html>